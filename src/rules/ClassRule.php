<?php
/**
 * Validator
 * Copyright 2017 Charlotte Dunois, All Rights Reserved
 *
 * Docs: https://laravel.com/docs/5.2/validation
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation\Rule;

class ClassRule implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if($exists === false) {
            return null;
        }
        
        $is_string = is_string($value);
        
        $options = explode(',', $options);
        $class = ltrim($options[0], '\\');
        
        if(!empty($options[1]) && $options[1] === 'string_only' && !$is_string) {
            return 'formvalidator_make_class_stringonly';
        }
        
        if(!$is_string && !is_object($value)) {
            return 'formvalidator_make_class';
        }
        
        if($is_string && !class_exists($value)) {
            return 'formvalidator_make_class';
        }
        
        if(!is_a($value, $class, true) && !in_array($class, class_parents($value)) && !in_array($class, class_implements($value))) {
            return array('formvalidator_make_class_inheritance', array('{0}' => $options));
        }
        
        return true;
    }
}

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
        
        if(!is_string($value) && !is_object($value)) {
            return 'formvalidator_make_class';
        }
        
        if(is_string($value) && !class_exists($value)) {
            return 'formvalidator_make_class';
        }
        
        $options = ltrim($options, '\\');
        if(!is_a($options, $value, true) && !in_array($options, class_parents($value)) && !in_array($options, class_implements($value))) {
            return array('formvalidator_make_class_inheritance', array('{0}' => $options));
        }
        
        return true;
    }
}

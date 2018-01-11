<?php
/**
 * Validator
 * Copyright 2017-2018 Charlotte Dunois, All Rights Reserved
 *
 * Docs: https://laravel.com/docs/5.2/validation
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation\Rule;

class TypeRule implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if($exists === false) {
            return null;
        }
        
        if(!is_array($value)) {
            return array('formvalidator_make_array_subtype', array('{0}' => $options));
        }
        
        if($options == 'float') {
            $options = 'double';
        }
        
        foreach($value as $val) {
            if(gettype($val) != $options) {
                return array('formvalidator_make_array_subtype', array('{0}' => $options));
            }
        }
        
        return true;
    }
}

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

/**
 * Name: `digits`
 * This rule ensures a specific field is a numeric value (string) with the specified length. Usage: `digits:LENGTH`
 */
class Digits implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if($exists === false) {
            return null;
        }
        
        if(!is_numeric($value) || mb_strlen($value) != mb_strlen($options)) {
            return array('formvalidator_make_digits', array('{0}' => $options));
        }
        
        return true;
    }
}

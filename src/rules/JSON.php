<?php
/**
 * Validator
 * Copyright 2017 Charlotte Dunois, All Rights Reserved
 *
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation\Rule;

/**
 * Name: `json`
 *
 * This rule ensures a specific field is a valid JSON string.
 */
class JSON implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if($exists === false) {
            return null;
        }
        
        json_decode($value);
        if(json_last_error() !== JSON_ERROR_NONE) {
            return 'formvalidator_make_json';
        }
        
        return true;
    }
}

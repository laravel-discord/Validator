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

/**
 * Name: `float` - Type Rule
 * This rule ensures a specific field is a float.
 */
class FloatRule implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if($exists === false) {
            return null;
        }
        
        if(!is_float($value)) {
            return 'formvalidator_make_float';
        }
        
        return true;
    }
}

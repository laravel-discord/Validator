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
 * Name: `accepted`
 * This rule ensures a specific field is accepted (value: `yes`, `on`, `1` or `true`).
 */
class Accepted implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if($exists === false) {
            return null;
        }
        
        if(!in_array($value, array('yes', 'on', 1, true, '1', 'true'))) {
            return 'formvalidator_make_accepted';
        }
        
        return true;
    }
}

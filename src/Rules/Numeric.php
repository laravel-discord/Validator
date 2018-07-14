<?php
/**
 * Validator
 * Copyright 2017 Charlotte Dunois, All Rights Reserved
 *
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation\Rules;

/**
 * Name: `numeric`
 *
 * This rule ensures a specific field is numeric.
 */
class Numeric implements \CharlotteDunois\Validation\ValidationRule {
    /**
     * {@inheritdoc}
     */
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if(!$exists) {
            return false;
        }
        
        if(!ctype_digit($value)) {
            return 'formvalidator_make_numeric';
        }
        
        return true;
    }
}

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
 * Name: `callable` - Type Rule
 *
 * This rule ensures a specific field is a callable.
 */
class CallableRule implements \CharlotteDunois\Validation\ValidationRule {
    /**
     * {@inheritdoc}
     */
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if(!$exists) {
            return false;
        }
        
        if(!is_callable($value)) {
            return 'formvalidator_make_callable';
        }
        
        return true;
    }
}

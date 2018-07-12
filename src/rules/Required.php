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
 * Name: `required`
 *
 * This rule ensures a specific (upload) field is present and not empty.
 */
class Required implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if(($exists === false || is_null($value) || (is_string($value) === true && trim($value) === '')) && (!isset($_FILES[$key]) || $_FILES[$key]['error'] != 0)) {
            return 'formvalidator_make_required';
        }
        
        return true;
    }
}

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
 * Name: `between`
 *
 * This rule ensures a specific field is a value between two options, inclusive. Usage: `before:VALUE_MIN,VALUE_MAX`
 */
class Between implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if($exists === false) {
            return null;
        }
        
        $n = explode(',', $options);
        if($n[0] > $value || $value > $n[1]) {
            return array('formvalidator_make_between', array('{0}' => $r[1]));
        }
        
        return true;
    }
}

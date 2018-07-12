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
 * Name: `dateformat`
 *
 * This rule ensures a specific field is a date in a specific format. Usage: `dateformat:FORMAT`
 */
class Date_Format implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if($exists === false) {
            return null;
        }
        
        $dt = date_parse_from_format($options, $value);
        if($dt === false || $dt['errorcount'] > 0) {
            return array('formvalidator_make_date_format', array('{0}' => $options));
        }
        
        return true;
    }
}

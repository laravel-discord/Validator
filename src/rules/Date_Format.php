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
 * Name: `date_format`
 * This rule ensures a specific field is a date in a specific format. Usage: `date_format:FORMAT`
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

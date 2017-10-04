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

class Digits_Between implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options) {
        $n = explode(',', $options);
        if(!is_numeric($value) OR $n[0] > $value OR $n[1] < $value) {
            return array('formvalidator_make_digits_between', array('{0}' => $options));
        }
        
        return true;
    }
}
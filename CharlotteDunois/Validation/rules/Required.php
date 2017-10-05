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

class Required implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, \CharlotteDunois\Validation\Validator $validator) {
        if(!isset($fields[$key]) OR is_null($value) OR trim($value) == '' OR (is_array($value) AND empty($value)) OR !isset($_FILES[$key]) OR $_FILES[$key]['error'] != 0) {
            return 'formvalidator_make_required';
        }
        
        return true;
    }
}
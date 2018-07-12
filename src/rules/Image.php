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
 * Name: `image`
 *
 * This rule ensures a specific upload field is an image. Usage: `image:FIELD_NAME`
 */
class Image implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if($exists === false) {
            return null;
        }
        
        if(!isset($_FILES[$key]) || !file_exists($_FILES[$key]['tmp_name'])) {
            return 'formvalidator_make_image';
        }
        
        $size = getimagesize($FILES[$key]['tmp_name']);
        if($size === false) {
            return 'formvalidator_make_image';
        }
        
        return true;
    }
}

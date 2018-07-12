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
 * Name: `mimetypes`
 *
 * This rule ensures a specific upload field is of specific mime type (comma separated). Valid options (examples): `image/*`, `*­/*`, `image/png`. Usage: `mimetypes:MIME_TYPE`
 */
class MimeTypes implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if($exists === false) {
            return null;
        }
        
        if(!isset($_FILES[$key]) || !file_exists($_FILES[$key]['tmp_name']) || $_FILES[$key]['error'] != 0) {
            return 'formvalidator_make_invalid_file';
        }
        
        $mime = mime_content_type($_FILES[$key]['tmp_name']);
        
        $val = explode(',', $options);
        if(empty($val)) {
            return true;
        }
        
        $result = explode('/', $mime);
        
        foreach($val as $mime) {
            $mime = explode('/', $mime);
            if(count($mime) == 2 && count($result) == 2) {
                if(($mime[0] == "*" || $mime[0] == $result[0]) && ($mime[1] == "*" || $mime[1] == $result[1])) {
                    return true;
                }
            }
        }
        
        return 'formvalidator_make_invalid_file';
    }
}

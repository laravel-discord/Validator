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

class Alpha_Num implements \CharlotteDunois\Validation\ValidationRule {
    function validate($value, $key, $fields, $options, \CharlotteDunois\Validation\Validator $validator) {
        if(!ctype_alnum($value)) {
            return 'formvalidator_make_alpha_num';
        }
        
        return true;
    }
}
<?php
/**
 * Validator
 * Copyright 2017-2018 Charlotte Dunois, All Rights Reserved
 *
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation\Rules;

/**
 * Name: `uppercase`
 *
 * This rule ensures a specific field is all uppercase.
 */
class Uppercase implements \CharlotteDunois\Validation\RuleInterface {
    /**
     * {@inheritdoc}
     * @return bool|string|array  Return false to "skip" the rule. Return true to mark the rule as passed.
     */
    function validate($value, $key, $fields, $options, $exists, \CharlotteDunois\Validation\Validator $validator) {
        if(!$exists) {
            return false;
        }
        
        if(!\is_string($value) || \mb_strtoupper($value) !== $value) {
            return 'formvalidator_make_uppercase';
        }
        
        return true;
    }
}

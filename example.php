<?php
include_once('validator.class.php');

$val = CharlotteDunois\Validation\Validator::make(array('username' => 'CharlotteDunois', 'email' => 'info@charuru', 'regip' => '127.0.0.1', 'sex' => 2), array('username' => 'string|required|min:5|max:75', 'email' => 'email', 'regip' => 'ip', 'sex' => 'int|min:0|max:2'));
var_dump($val->fails(), $val->getErrors());

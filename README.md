Validator
==================

This is a Pure PHP implementation based on Laravel's Validation. The usage isn't different from the Laravel Validation. The docs on laravel.com can be used with this.

Usage
==================
Include file and initialize an instance.

    <?php
    include_once('validator.class.php');
    
    //This one will not fail
    $nofail = CharlotteDunois\Validation\Validator::make(array('username' => 'CharlotteDunois', 'email' => 'noreply@github.com'), array('username' => 'string|required|min:5|max:75', 'email' => 'email'));
    var_dump($nofail->fails());
    
    //This one will fail due to invalid email
    $fail = CharlotteDunois\Validation\Validator::make(array('username' => 'CharlotteDuois', 'email' => 'noreply@githubcom'), array('username' => 'string|required|min:5|max:75', 'email' => 'email'));
    var_dump($fail->fails(), $fail->errors());


Laravel Docs
==================
https://laravel.com/docs/5.2/validation

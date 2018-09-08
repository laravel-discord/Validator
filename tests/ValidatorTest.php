<?php
/**
 * Validator
 * Copyright 2017-2018 Charlotte Dunois, All Rights Reserved
 *
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation;

final class ValidatorTest extends \PHPUnit\Framework\TestCase {
    function tearDown() {
        unset($_FILES['test']);
    }
    
    function testThingsEmpty() {
        $fields = array();
        
        $rules = array(
            'justsomething' => 'activeurl|after|alphadash|array|before|between|date|dateformat|different:username|digits:5|dimensions:min_width=1280x720|file:test|float|image|ip|lowercase|mimetypes:image/*|nowhitespace|regex:/.*/i|same|size:5|uppercase|url',
            'username' => 'string|alpha|required',
            'password' => 'string|alphanum|min:6|confirmed:confirmed',
            'email' => 'email|filled',
            'read_rules' => 'present|accepted',
            'json' => 'json',
            'age' => 'integer|min:16|max:40',
            'age_string' => 'numeric|in:16,17,18,19,20',
            'deez' => 'array:integer|distinct',
            'callback' => 'function',
            'callable' => 'callable',
            'class' => 'class:\stdClass',
            'class_object' => 'class:\\stdClass,object_only',
            'class_string' => 'class:\\stdClass,string_only',
            'class_extends' => 'class:\\PHPUnit\\Framework\\TestCase',
            'null' => 'nullable|boolean'
        );
        
        $validator = Validator::make($fields, $rules);
        
        $this->assertTrue($validator->fails());
    }
    
    function testAccepted() {
        $validator = Validator::make(
            array('test' => 'yes'),
            array('test' => 'accepted')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 0),
            array('test' => 'accepted')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testActiveURL() {
        $validator = Validator::make(
            array('test' => 'github.com'),
            array('test' => 'activeurl')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'failure.local'),
            array('test' => 'activeurl')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testAfter() {
        $validator = Validator::make(
            array('test' => '2010-01-02'),
            array('test' => 'after:2010-01-01')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => '2009-12-31'),
            array('test' => 'after:2010-01-01')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testAlpha() {
        $validator = Validator::make(
            array('test' => 'yes'),
            array('test' => 'alpha')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'yes-'),
            array('test' => 'alpha')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testAlpaDash() {
        $validator = Validator::make(
            array('test' => 'yes-'),
            array('test' => 'alphadash')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'yes09'),
            array('test' => 'alphadash')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testAlphaNum() {
        $validator = Validator::make(
            array('test' => 'yes5'),
            array('test' => 'alphanum')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'yes.'),
            array('test' => 'alphanum')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testArray() {
        $validator = Validator::make(
            array('test' => array()),
            array('test' => 'array')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $validator2 = Validator::make(
            array('test' => array('hi')),
            array('test' => 'array:string')
        );
        
        $this->assertTrue($validator2->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator3 = Validator::make(
            array('test' => null),
            array('test' => 'array')
        );
        
        $this->assertTrue($validator3->throw('\\LogicException'));
    }
    
    function testArray2() {
        $this->expectException(\LogicException::class);
        
        $validator4 = Validator::make(
            array('test' => array(5.2)),
            array('test' => 'array:bool')
        );
        
        $this->assertFalse($validator4->throw('\\LogicException'));
    }
    
    function testBefore() {
        $validator = Validator::make(
            array('test' => '2009-12-31'),
            array('test' => 'before:2010-01-01')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => '2010-01-02'),
            array('test' => 'before:2010-01-01')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testBetween() {
        $validator = Validator::make(
            array('test' => 1),
            array('test' => 'between:0,2')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 3),
            array('test' => 'between:0,2')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testBoolean() {
        $validator = Validator::make(
            array('test' => true),
            array('test' => 'boolean')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => null),
            array('test' => 'boolean')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testCallable() {
        $validator = Validator::make(
            array('test' => 'var_dump'),
            array('test' => 'callable')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'what is this'),
            array('test' => 'callable')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testClass() {
        $validator = Validator::make(
            array('test' => '\\stdClass'),
            array('test' => 'class:\\stdClass')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $validator2 = Validator::make(
            array('test' => (new \stdClass())),
            array('test' => 'class:\\stdClass')
        );
        
        $this->assertTrue($validator2->throw('\\LogicException'));
        
        $validator3 = Validator::make(
            array('test' => (new \stdClass())),
            array('test' => 'class:\\stdClass,object_only')
        );
        
        $this->assertTrue($validator3->throw('\\LogicException'));
        
        $validator4 = Validator::make(
            array('test' => '\\stdClass'),
            array('test' => 'class:\\stdClass,string_only')
        );
        
        $this->assertTrue($validator4->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator5 = Validator::make(
            array('test' => 'muffin'),
            array('test' => 'class:\\stdClass')
        );
        
        $this->assertFalse($validator5->throw('\\LogicException'));
    }
    
    function testClass2() {
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => (new \stdClass())),
            array('test' => 'class:\\ArrayObject')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testClass3() {
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => (new \stdClass())),
            array('test' => 'class:\\stdClass,string_only')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testClass4() {
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => '\\stdClass'),
            array('test' => 'class:\\stdClass,object_only')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testClass5() {
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => 5),
            array('test' => 'class:\\stdClass')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testConfirmed() {
        $validator = Validator::make(
            array('test' => 'hi', 'test_confirmation' => 'hi'),
            array('test' => 'confirmed')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 3),
            array('test' => 'confirmed')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testDate() {
        $validator = Validator::make(
            array('test' => '2010-01-01'),
            array('test' => 'date')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'what is this'),
            array('test' => 'date')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testDateFormat() {
        $validator = Validator::make(
            array('test' => '01.01.2010'),
            array('test' => 'dateformat:d.m.Y')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => '2010-01-01'),
            array('test' => 'dateformat:d.m.Y')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testDifferent() {
        $validator = Validator::make(
            array('test' => 'var_dump', 'test2' => 'hi'),
            array('test' => 'different:test2')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'var_dump', 'test2' => 'var_dump'),
            array('test' => 'different:test2')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testDigits() {
        $validator = Validator::make(
            array('test' => '500'),
            array('test' => 'digits:3')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => '20'),
            array('test' => 'digits:3')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testDimensions() {
        $file = file_get_contents(__DIR__.'/testfile.png');
        
        $validator = Validator::make(
            array('test' => $file),
            array('test' => 'dimensions:min_width=10,min_height=10,width=32,height=32,max_width=40,max_height=40,ratio=1')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $_FILES['test'] = array('tmp_name' => __DIR__.'/testfile.png', 'error' => 0);
        
        $validator2 = Validator::make(
            array(),
            array('test' => 'dimensions:ratio=1/1')
        );
        
        $this->assertTrue($validator2->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        unset($_FILES['test']);
        
        $validator = Validator::make(
            array('test' => $file),
            array('test' => 'dimensions:min_width=40')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testDimensions2() {
        $file = file_get_contents(__DIR__.'/testfile.png');
        
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => $file),
            array('test' => 'dimensions:min_height=40')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testDimensions3() {
        $file = file_get_contents(__DIR__.'/testfile.png');
        
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => $file),
            array('test' => 'dimensions:width=40')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testDimensions4() {
        $file = file_get_contents(__DIR__.'/testfile.png');
        
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => $file),
            array('test' => 'dimensions:height=40')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testDimensions5() {
        $file = file_get_contents(__DIR__.'/testfile.png');
        
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => $file),
            array('test' => 'dimensions:max_width=10')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testDimensions6() {
        $file = file_get_contents(__DIR__.'/testfile.png');
        
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => $file),
            array('test' => 'dimensions:max_height=10')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testDimensions7() {
        $file = file_get_contents(__DIR__.'/testfile.png');
        
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => $file),
            array('test' => 'dimensions:ratio=0.5')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testDimensions8() {
        $file = file_get_contents(__DIR__.'/testfile.png');
        
        $this->expectException(\LogicException::class);
        
        $_FILES['test'] = array('tmp_name' => __DIR__.'/testfile2.png', 'error' => 0);
        
        $validator = Validator::make(
            array(),
            array('test' => 'dimensions:ratio=0.5')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
        
        unset($_FILES['test']);
    }
    
    function testDimensions9() {
        
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => null),
            array('test' => 'dimensions:')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testDistinct() {
        $validator = Validator::make(
            array('test' => array(0, 1)),
            array('test' => 'distinct')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => array(0, 0)),
            array('test' => 'distinct')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testEmail() {
        $validator = Validator::make(
            array('test' => 'email@test.com'),
            array('test' => 'email')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'what is this'),
            array('test' => 'email')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testFile() {
        $_FILES['test'] = array('tmp_name' => __DIR__.'/testfile.png', 'error' => 0);
        
        $validator = Validator::make(
            array(),
            array('test' => 'file')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        unset($_FILES['test']);
        
        $validator2 = Validator::make(
            array(),
            array('test' => 'file')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testFilled() {
        $validator = Validator::make(
            array('test' => 'var_dump'),
            array('test' => 'filled')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 0),
            array('test' => 'filled')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testFloat() {
        $validator = Validator::make(
            array('test' => 5.2),
            array('test' => 'float')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'what is this'),
            array('test' => 'float')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testFunction() {
        $validator = Validator::make(
            array('test' => function () {}),
            array('test' => 'function')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'what is this'),
            array('test' => 'function')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testImage() {
        $file = file_get_contents(__DIR__.'/testfile.png');
        
        $validator = Validator::make(
            array('test' => $file),
            array('test' => 'image')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $_FILES['test'] = array('tmp_name' => __DIR__.'/testfile.png', 'error' => 0);
        
        $validator2 = Validator::make(
            array(),
            array('test' => 'image')
        );
        
        $this->assertTrue($validator2->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $_FILES['test'] = array('tmp_name' => __DIR__.'/testfile2.png', 'error' => 0);
        
        $validator3 = Validator::make(
            array(),
            array('test' => 'image')
        );
        
        $this->assertFalse($validator3->throw('\\LogicException'));
        
        unset($_FILES['test']);
    }
    
    function testImage2() {
        $this->expectException(\LogicException::class);
        
        $validator4 = Validator::make(
            array('test' => 'what is this'),
            array('test' => 'image')
        );
        
        $this->assertFalse($validator4->throw('\\LogicException'));
    }
    
    function testIn() {
        $validator = Validator::make(
            array('test' => '5'),
            array('test' => 'in:5,4')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => '1'),
            array('test' => 'in:5,4')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testInteger() {
        $validator = Validator::make(
            array('test' => 5),
            array('test' => 'integer')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'what is this'),
            array('test' => 'integer')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testIP() {
        $validator = Validator::make(
            array('test' => '192.168.1.1'),
            array('test' => 'ip')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'what is this'),
            array('test' => 'ip')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testJSON() {
        $validator = Validator::make(
            array('test' => '{"help":true}'),
            array('test' => 'json')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => ''),
            array('test' => 'json')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testLowercase() {
        $validator = Validator::make(
            array('test' => 'ha'),
            array('test' => 'lowercase')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'HA'),
            array('test' => 'lowercase')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testMax() {
        $_FILES['test'] = array('tmp_name' => __DIR__.'/testfile.png', 'error' => 0);
        
        $validator = Validator::make(
            array(),
            array('test' => 'max:6')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        unset($_FILES['test']);
        
        $validator2 = Validator::make(
            array('test' => array(2, 5, 30)),
            array('test' => 'max:6')
        );
        
        $this->assertTrue($validator2->throw('\\LogicException'));
        
        $validator3 = Validator::make(
            array('test' => 5),
            array('test' => 'max:6')
        );
        
        $this->assertTrue($validator3->throw('\\LogicException'));
        
        $validator4 = Validator::make(
            array('test' => 'abcd'),
            array('test' => 'max:6')
        );
        
        $this->assertTrue($validator4->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator5 = Validator::make(
            array('test' => 5),
            array('test' => 'max:4')
        );
        
        $this->assertFalse($validator5->throw('\\LogicException'));
    }
    
    function testMax2() {
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => 'uiasufisa'),
            array('test' => 'max:4')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testMimeTypes() {
        
        $file = file_get_contents(__DIR__.'/testfile.png');
        
        $validator = Validator::make(
            array('test' => $file),
            array('test' => 'mimetypes:image/*')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $_FILES['test'] = array('tmp_name' => __DIR__.'/testfile.png', 'error' => 0);
        
        $validator2 = Validator::make(
            array(),
            array('test' => 'mimetypes:*/*')
        );
        
        $this->assertTrue($validator2->throw('\\LogicException'));
        
        unset($_FILES['test']);
        
        $this->expectException(\LogicException::class);
        
        $_FILES['test'] = array('tmp_name' => __DIR__.'/testfile2.png', 'error' => 0);
        
        $validator3 = Validator::make(
            array(),
            array('test' => 'mimetypes:')
        );
        
        $this->assertFalse($validator3->throw('\\LogicException'));
        
        unset($_FILES['test']);
    }
    
    function testMimeTypes2() {
        $file = file_get_contents(__DIR__.'/testfile.png');
        
        $this->expectException(\LogicException::class);
        
        $validator4 = Validator::make(
            array('test' => $file),
            array('test' => 'mimetypes:')
        );
        
        $this->assertFalse($validator4->throw('\\LogicException'));
    }
    
    function testMin() {
        $_FILES['test'] = array('tmp_name' => __DIR__.'/testfile.png', 'error' => 0);
        
        $validator = Validator::make(
            array(),
            array('test' => 'min:1')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        unset($_FILES['test']);
        
        $validator2 = Validator::make(
            array('test' => array(2, 5, 30)),
            array('test' => 'min:1')
        );
        
        $this->assertTrue($validator2->throw('\\LogicException'));
        
        $validator3 = Validator::make(
            array('test' => 5),
            array('test' => 'min:1')
        );
        
        $this->assertTrue($validator3->throw('\\LogicException'));
        
        $validator4 = Validator::make(
            array('test' => 'abcd'),
            array('test' => 'min:1')
        );
        
        $this->assertTrue($validator4->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator5 = Validator::make(
            array('test' => 5),
            array('test' => 'min:6')
        );
        
        $this->assertFalse($validator5->throw('\\LogicException'));
    }
    
    function testMin2() {
        $this->expectException(\LogicException::class);
        
        $validator = Validator::make(
            array('test' => 'abc'),
            array('test' => 'min:4')
        );
        
        $this->assertFalse($validator->throw('\\LogicException'));
    }
    
    function testNoWhitespace() {
        $validator = Validator::make(
            array('test' => 'hi'),
            array('test' => 'nowhitespace')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'what is this'),
            array('test' => 'nowhitespace')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testNullable() {
        $validator = Validator::make(
            array('test' => null),
            array('test' => 'nullable')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $validator2 = Validator::make(
            array('test' => null),
            array('test' => 'nullable|numeric')
        );
        
        $this->assertTrue($validator2->throw('\\LogicException'));
    }
    
    function testNumeric() {
        $validator = Validator::make(
            array('test' => '5'),
            array('test' => 'numeric')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'what is this'),
            array('test' => 'numeric')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testPresent() {
        $validator = Validator::make(
            array('test' => 5),
            array('test' => 'present')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array(),
            array('test' => 'present')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testRegex() {
        $validator = Validator::make(
            array('test' => 5),
            array('test' => 'regex:/\\d+/')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'what is this'),
            array('test' => 'regex:/\\d+/')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testRequired() {
        $validator = Validator::make(
            array('test' => 5),
            array('test' => 'required')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => null),
            array('test' => 'required')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testSame() {
        $validator = Validator::make(
            array('test' => 5, 'test2' => 5),
            array('test' => 'same:test2')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 5, 'test2' => 4),
            array('test' => 'same:test2')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testSize() {
        $_FILES['test'] = array('tmp_name' => __DIR__.'/testfile.png', 'error' => 0);
        
        $validator = Validator::make(
            array(),
            array('test' => 'size:2')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        unset($_FILES['test']);
        
        $validator2 = Validator::make(
            array('test' => array(0, 1, 2, 3, 4)),
            array('test' => 'size:5')
        );
        
        $this->assertTrue($validator2->throw('\\LogicException'));
        
        $validator3 = Validator::make(
            array('test' => 5),
            array('test' => 'size:5')
        );
        
        $this->assertTrue($validator3->throw('\\LogicException'));
        
        $validator4 = Validator::make(
            array('test' => 'hello'),
            array('test' => 'size:5')
        );
        
        $this->assertTrue($validator4->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator5 = Validator::make(
            array('test' => 'hi'),
            array('test' => 'size:5')
        );
        
        $this->assertFalse($validator5->throw('\\LogicException'));
    }
    
    function testString() {
        $validator = Validator::make(
            array('test' => 'hello'),
            array('test' => 'string')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 5),
            array('test' => 'string')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testUppercase() {
        $validator = Validator::make(
            array('test' => 'API'),
            array('test' => 'uppercase')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'hello'),
            array('test' => 'uppercase')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testURL() {
        $validator = Validator::make(
            array('test' => 'https://github.com'),
            array('test' => 'url')
        );
        
        $this->assertTrue($validator->throw('\\LogicException'));
        
        $this->expectException(\LogicException::class);
        
        $validator2 = Validator::make(
            array('test' => 'hello'),
            array('test' => 'url')
        );
        
        $this->assertFalse($validator2->throw('\\LogicException'));
    }
    
    function testFailNullableRule() {
        $validator = Validator::make(array('test' => null), array('test' => 'string'));
        
        $this->assertFalse($validator->passes());
    }
    
    function testFailNullableRule2() {
        $validator = Validator::make(array('test' => null), array('test' => 'between:0,1'));
        
        $this->assertFalse($validator->passes());
    }
    
    function testFailNullableRule3() {
        $validator = Validator::make(array('test' => 5), array('test' => 'nullable|between:0,1'));
        
        $this->assertFalse($validator->passes());
    }
    
    function testInvalidRule() {
        $this->expectException(\RuntimeException::class);
        
        Validator::make(array('field' => 'int'), array('field' => 'int'))->throw();
    }
    
    function testLanguageFun() {
        $validator = Validator::make(array(), array());
        
        $this->assertSame('test', $validator->language('test'));
        $this->assertSame('Is smaller / before than 1', $validator->language('formvalidator_make_before', array('{0}' => '1')));
        $this->assertSame(array(), $validator->errors());
    }
}

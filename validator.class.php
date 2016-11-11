<?php
/**
 * Validator
 * Pure PHP implementation based on Laravel's Validator.
 * Copyright 2016 Charlotte Dunois, All Rights Reserved
 *
 * Docs: https://laravel.com/docs/5.2/validation
 * Website: https://charuru.moe
 * License: https://github.com/CharlotteDunois/Validator/blob/master/LICENSE
**/

namespace CharlotteDunois\Validation;

class Validator {
	private $errors = array();
	private $fields = array();
	private $rules = array();
	private $return_asap = false;
	private $lang = NULL;
	private $lang_words = array();
	
	private function __construct($fields, $rules, $lang, $return_asap) {
		$this->fields = $fields;
		$this->rules = $rules;
		$this->return_asap = $return_asap;
		$this->lang = $lang;
	}
	
	/**
     * Create a new Validator instance.
     *
     * @param  array    $fields
     * @param  array    $rules
     * @param  string   $lang
     * @param  boolean  $return_asap
     * @return Validator
     */
	static function make($fields, $rules, $lang = 'en', $return_asap = false) {
		return new Validator($fields, $rules, $lang, $return_asap);
	}
	
	/**
     * Return errors
     *
     * @return array
     */
	function errors() {
		return $this->errors;
	}
	
	/**
     * Determine if the data fails the validation rules.
     *
     * @return bool
     */
	function fails() {
		if(!is_array($this->fields) OR !is_array($this->rules)) {
			return false;
		}
		
		$istate = array();
		foreach($this->rules as $key => $rule) {
			$set = explode('|', $rule);
			
			$value = "";
			if(isset($this->fields[$key])) {
				$value = $this->fields[$key];
			}
			
			$nullable = false;
			foreach($set as $r) {
				$r = explode(':', $r);
				switch($r[0]) {
					case 'accepted';
						if(!in_array($value, array('yes', 'on', 1, true))) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_accepted');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'active_url';
						if(!checkdnsrr($value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_active_url');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'after';
						if(strtotime($r[1]) > strotitime($value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_after', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'alpha';
						if(!ctype_alpha($value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_alpha');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'alpha_dash';
						if(mb_ereg("/^([^A-Za-z\-_]+)$/i", $value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_alpha_dash');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'alpha_num';
						if(!ctype_alnum($value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_alpha_num');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'array';
						if(!is_array($value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_array');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'before';
						if(strtotime($r[1]) < strtotime($value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_before', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'between';
						$n = explode(',', $r[1]);
						if(($n[0] <= $value AND $value <= $n[1]) === false) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_between', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'boolean';
						if(!is_bool($value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_boolean');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'confirmed';
						if(!isset($r[1])) {
							$r[1] = 'confirmation';
						}
						
						if(!isset($this->fields[$key.'_'.$r[1]]) OR $this->fields[$key] !== $this->fields[$key.'_'.$r[1]]) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_confirmed');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'date';
						if(strtotime($value) === false) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_date');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'date_format';
						$dt = date_parse_from_format($r[1], $value);
						if($dt === false OR $dt['errorcount'] > 0) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_date_format', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'different';
						if($value == $this->fields[$r[1]]) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_different', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'digits';
						if(!is_numeric($value) OR strlen($value) != strlen($r[1])) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_digits', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'digits_between';
						$n = explode(',', $r[1]);
						if(!is_numeric($value) OR $n[0] > $value OR $n[1] < $value) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_digits_between', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'dimensions';
						if(!isset($_FILES[$key])) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_invalid_file');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
						
						$file = $_FILES[$key];
						$size = getimagesize($file['tmp_name']);
						
						$n = explode(',', $r[1]);
						foreach($n as $x) {
							$k = explode('=', $x);
							switch($k[0]) {
								case 'min_width':
									if($k[1] > $size[0]) {
										$istate[] = false;
										$this->errors[$key] = $this->language('formvalidator_make_min_width', array('{0}' => $r[1]));
										if($this->return_asap === true) {
											break 3;
										} else {
											break 2;
										}
									}
								break;
								case 'min_height':
									if($k[1] > $size[1]) {
										$istate[] = false;
										$this->errors[$key] = $this->language('formvalidator_make_min_height', array('{0}' => $r[1]));
										if($this->return_asap === true) {
											break 3;
										} else {
											break 2;
										}
									}
								break;
								case 'width':
									if($k[1] != $size[0]) {
										$istate[] = false;
										$this->errors[$key] = $this->language('formvalidator_make_width', array('{0}' => $r[1]));
										if($this->return_asap === true) {
											break 3;
										} else {
											break 2;
										}
									}
								break;
								case 'height':
									if($k[1] != $size[1]) {
										$istate[] = false;
										$this->errors[$key] = $this->language('formvalidator_make_height', array('{0}' => $r[1]));
										if($this->return_asap === true) {
											break 3;
										} else {
											break 2;
										}
									}
								break;
								case 'max_width':
									if($k[1] < $size[0]) {
										$istate[] = false;
										$this->errors[$key] = $this->language('formvalidator_make_max_width', array('{0}' => $r[1]));
										if($this->return_asap === true) {
											break 3;
										} else {
											break 2;
										}
									}
								break;
								case 'max_height':
									if($k[1] < $size[1]) {
										$istate[] = false;
										$this->errors[$key] = $this->language('formvalidator_make_max_height', array('{0}' => $r[1]));
										if($this->return_asap === true) {
											break 3;
										} else {
											break 2;
										}
									}
								break;
								case 'ratio':
									if(strpos($k[1], '/') !== false) {
										$k[1] = explode('/', $k[1]);
										$k[1] = $k[1][0] / $k[1][1];
									}
									
									if(number_format(($size[0] / $size[1]), 1) != number_format($k[1], 1)) {
										$istate[] = false;
										$this->errors[$key] = $this->language('formvalidator_make_ratio', array('{0}' => $r[1]));
										if($this->return_asap === true) {
											break 3;
										} else {
											break 2;
										}
									}
								break;
							}
						}
					break;
					case 'distinct';
						if($value == array_unique($value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_distinct');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'email';
						if(!filter_var($value, FILTER_VALIDATE_EMAIL)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_email');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'file';
						if(!isset($_FILES[$key])) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_invalid_file');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
						
						$file = $_FILES[$key];
						if($file['error'] != 0) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_invalid_file');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'filled';
						if(isset($this->fields[$key]) AND empty($this->fields[$key])) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_filled');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'image';
						if(!isset($_FILES[$key])) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_invalid_file');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
						
						$img = getimagesize($_FILES[$key]['tmp_name']);
						if($img === false) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_image');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'in';
						$n = explode(',', $r[1]);
						if(!in_array($value, $n)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_in', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'integer';
						if(!is_int($value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_integer');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'ip';
						if(!filter_var($value, FILTER_VALIDATE_IP)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_ip');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'json';
						if(json_decode($value) === false) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_json');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'max';
						if(isset($_FILES[$key])) {
							$v = filesize($_FILES[$key]['tmp_name']);
						} elseif(is_array($value)) {
							$v = count($value);
						} elseif(is_numeric($value)) {
							$v = $value;
						} else {
							$v = strlen($value);
						}
						
						if($v > $r[1]) {
							$istate[] = false;
							if(is_string($value)) {
								$this->errors[$key] = $this->language('formvalidator_make_max_string', array('{0}' => $r[1]));
							} else {
								$this->errors[$key] = $this->language('formvalidator_make_max', array('{0}' => $r[1]));
							}
							
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'mimetypes';
						if(!isset($_FILES[$key])) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_invalid_file');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
						
						if(file_exists($_FILES[$key]['tmp_name']) AND function_exists('finfo_open')) {
							$finfo = new finfo(FILEINFO_MIME_TYPE);
							if($finfo === false) {
								return false;
							}
							
							$mime = $finfo->file($_FILES[$key]['tmp_name']);
							unset($finfo);
						} else {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_invalid_file', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
						
						$mime_check = false;
						$result = explode('/', $mime);
						
						$val = explode(',', $r[1]);
						foreach($val as $mime) {
							if($mime_check === false) {
								$mime = explode('/', $mime);
								if(count($mime) == 2 AND count($result) == 2) {
									if(($mime[0] != "*" OR $mime[0] == $result[0]) AND ($mime[1] != "*" OR $mime[1] != $result[1])) {
										$mime_check = true;
									}
								}
							}
						}
						
						if($mime_check === false) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_mimetypes', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'mimes';
						if(!isset($_FILES[$key])) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_invalid_file', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
						
						$fileext = pathinfo($_FILES[$key]['name'], PATHINFO_EXTENSION);
						
						$ext_check = false;
						foreach($val as $ext) {
							if($ext_check === false) {
								if($ext == $fileext) {
									$ext_check = true;
								}
							}
						}
						
						if($ext_check === false) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_mimes', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'min';
						if(isset($_FILES[$key])) {
							$v = filesize($_FILES[$key]['tmp_name']);
						} elseif(is_array($value)) {
							$v = count($value);
						} elseif(is_numeric($value)) {
							$v = $value;
						} else {
							$v = strlen($value);
						}
						
						if($v < $r[1]) {
							$istate[] = false;
							if(is_string($value)) {
								$this->errors[$key] = $this->language('formvalidator_make_min_string', array('{0}' => $r[1]));
							} else {
								$this->errors[$key] = $this->language('formvalidator_make_min', array('{0}' => $r[1]));
							}
							
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'nullable';
						$nullable = true;
					break;
					case 'numeric';
						if(!ctype_digit($value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_numeric');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'present';
						if(!isset($this->fields[$key])) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_present');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'regex';
						if(mb_ereg("/^([^".$r[1]."]+)$/i", $value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_regex');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'required';
						if(!isset($this->fields[$key]) OR is_null($value) OR trim($value) == '' OR (is_array($value) AND empty($value)) OR (isset($_FILES[$key]) AND $_FILES[$key]['error'] != 0)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_required');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'same';
						if(!isset($this->fields[$r[1]]) OR $value != $this->fields[$r[1]]) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_same', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'size';
						if(isset($_FILES[$key])) {
							$v = filesize($_FILES[$key]['tmp_name']);
						} elseif(is_array($value)) {
							$v = count($value);
						} elseif(is_numeric($value)) {
							$v = $value;
						} else {
							$v = strlen($value);
						}
						
						if($v != $r[1]) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_size', array('{0}' => $r[1]));
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'string';
						if(!is_string($value)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_string');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					case 'url';
						if(!filter_var($value, FILTER_VALIDATE_URL)) {
							$istate[] = false;
							$this->errors[$key] = $this->language('formvalidator_make_url');
							if($this->return_asap === true) {
								break 2;
							} else {
								break 1;
							}
						}
					break;
					
				}
				
				if($nullable === false AND is_null($value)) {
					$istate[] = false;
					$this->errors[$key] = $this->language('formvalidator_make_nullable');
				}
			}
		}
		
		if(!empty($this->errors)) {
			return true;
		}
		
		return false;
	}
	
	/**
     * Return the error message based on the language key (language based).
     *
     * @return string
     */
	function language($key) {
		if(empty($this->lang_words)) {
			include(dirname(__FILE__).'/validator.lang.'.$this->lang.'.php');
			if(!empty($l)) {
				$this->lang_words = $l;
			}
		}
		
		if(isset($this->lang_words[$key])) {
			return $this->lang_words[$key];
		}
		
		return $key;
	}
}

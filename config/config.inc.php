<?php

$config['hostname'] = 'remotemysql.com';
$config['username'] = 'C6SjdJHEFF';
$config['password'] = 'bRHLoGh2BV';
$config['database'] = 'C6SjdJHEFF';


$__config = $config;
unset($config);

/**
 * CONFIG
 */
class Config{

	protected $config;

	public function __construct(){
		$this->config = $GLOBALS['__config'];
	}
	
	function item($index=null){
		if(is_null($index)){
			return $this->config;
		}
		else{
			if(isset($this->config[$index])){
				return $this->config[$index];
			}
			else{
				return NULL;
			}
		}
	}

}

<?php

$config['hostname'] = 'sql6.freesqldatabase.com';
$config['username'] = 'sql6420409';
$config['password'] = 'jQilRuYtWF';
$config['database'] = 'chat';


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

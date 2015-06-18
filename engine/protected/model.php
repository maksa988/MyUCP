<?php
/*
* MyUCP
* File Version 4.0
* Date: 30.03.2015
* Developed by Maksa988
*/

abstract class Model {
	private $registry;
	
	public function __construct($registry) {
		$this->registry = $registry;
	}
	
	public function __get($key) {
		return $this->registry->$key;
	}
	
	public function __set($key, $value) {
		$this->registry->$key = $value;
	}
}
?>

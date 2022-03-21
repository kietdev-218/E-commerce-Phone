<?php
include_once 'smarty/libs/Smarty.class.php';

class Smarty_dt extends Smarty{
	public function __construct(){
		parent::__construct();
		$this->setCacheDir("smarty/cache/");
		$this->setCompileDir("smarty/templates_c/");
		$this->setConfigDir("smarty/configs/");
		$this->setTemplateDir("smarty/templates/");
	}
	public function hien_thi($layout){
		$this->display($layout);
	}
}
?>
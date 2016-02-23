<?php
require_once('HtmlOverrideClass.php');
class OverrideClass {
	public $Html;

	private $base_path;
	public function __construct($base_path) {

		$this->base_path = $base_path;

		$this->Html = new HtmlOverrideClass();
		$this->Html->css = function() {};
		$this->Html->script = function() {};


	}

	public function element($path) {
		$full_path = $this->base_path . '/' . $path . '.ctp';
		require_once($full_path);
	}
}
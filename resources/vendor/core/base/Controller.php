<?php

namespace resources\vendor\core\base;
/**
* Ekzempljar klassa Controller nasleduetsja každym Controllerom
*
*/
abstract class Controller {
	/**
	* tekuščij maršrut v parametry (controller, action, params)
	* @var array
	*/
	public $route = [];
	/**
	* tekuščij vid (controller, action, params)
	* @var string
	*/
	public $view;
	/**
	* tekuščij šablon
	* @var array
	*/
	public $layout;
	/**
	* peredača polzovatel'skih dannyh i drugie peremennye
	* tekuščij šablon
	* @var array
	*/
	public $vars = [];

	public function __construct($route)
	{
		$this->route = $route;
    $this->view = $route['action'];
    //include  VIEW . "/{$route['controller']}/{$this->view}.php";
	}
	/**
	* Render Vida, to est' View file
	* bufereziruet
	*/
	public function getView() {
		$vObj = new View($this->route, $this->layout, $this->view);
		$vObj->render($this->vars);
	}
	/**
	* Vozvrašaet peremennye na stranicu
	* @param array $vars
	*/
	public function set($vars) {
		$this->vars = $vars;
	}

}

?>

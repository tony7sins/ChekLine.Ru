<?php

namespace app\Http\Controllers;

class AppController extends \resources\vendor\core\base\Controller {

    public $layout = '_main';
    // public $layout = '_default';

    public function indexAction()
    {
      //$this->layout = '_main'; // podključaetsja šablon main iz dir: /layouts
  		//$this->view = 'index';
  		$title = "INDEX";
  		$this->set(compact('title'));
    }
    /**
    * pri polučenii značenija 'view' iz 'table routes' peredaet 'action/alias' v '$this->view' objecta 'View'
    * переопределяет $this->view из базового Controller
    * по умолчанию base Controller's $this->view = $route['action']
    * если QueryString занесено в формате
    */
    public function viewAction() {
        $this->view = $this->route['alias'];
    }

}

?>

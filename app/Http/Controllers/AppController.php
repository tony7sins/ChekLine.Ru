<?php 

namespace App\Http\Controllers;

class AppController extends \resources\vendor\core\base\Controller {
    
    public $layout = '_main';
    
    public function indexAction() {
        
        //$this->layout = '_main'; // podključaetsja šablon main iz dir: /layouts	
		//$this->view = 'index';
		$title = "INDEX";
		$this->set(compact('title'));

	}

}

?>
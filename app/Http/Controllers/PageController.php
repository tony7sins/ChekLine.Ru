<?php

namespace app\Http\Controllers;

// Page controller - Opisanie

class PageController extends AppController {

    //public $layout = '_main'; // pereopdredeljaem šablon dlja vseh vidov dannogo klassa
	//public $layout = '_default';

//    public function indexAction() {
//
//      //$this->layout = '_main'; // podključaetsja šablon main iz dir: /layouts
//		//$this->view = 'index';
//		$title = "INDEX";
//		$this->set(compact('title'));
//
//	}

    public function viewAction() {
        $this->view = $this->route['alias'];
    }


//
//    public function testAction() {
//
//        $this->view = 'test';
//        $title = "TEST";
//		$this->set(compact('title'));
//
//    }
//
//    public function aboutAction() {
////  $this->view = 'about';
////  $title = "ABOUT";
////  $this->set(compact('title'));
//    }

    // 	echo "Posts::index";
    //	public function testAction() {
    //	debug($this->route);
    //	debug($_GET);
    //	echo $_GET['page'];
    //	echo "Page::view";

}

?>

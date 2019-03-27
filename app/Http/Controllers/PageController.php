<?php

namespace app\Http\Controllers;

// Page controller - Opisanie

class PageController extends AppController {

  //public $layout = '_main'; // pereopdredeljaem šablon dlja vseh vidov dannogo klassa
	//public $layout = '_default';

  // public function viewAction() {
  //     $this->view = $this->route['alias'];
  // }
  public function aboutAction() {
    $this->view = 'about';
    $title = "ABOUT";
    $someVal = "test2";
    $this->set(compact('title','someVal'));
  }
  public function productionAction() {
    $getVal = $_GET['a'];
    // echo $getVal;
    $someVal = "test2 ";
    $this->set(compact('someVal',"getVal"));
  }
  public function contactsAction() {
    // $getVal = $_GET['a'];
    // echo $getVal;
    $someVal = "test2";
    $this->set(compact('someVal'));
  }

//    public function indexAction() {
//
//    //$this->layout = '_main'; // podključaetsja šablon main iz dir: /layouts
//		//$this->view = 'index';
//		$title = "INDEX";
//		$this->set(compact('title'));
//
//	}
//
//    public function testAction() {
//
//        $this->view = 'test';
//        $title = "TEST";
//		$this->set(compact('title'));
//
//    }
//


// echo "Posts::index";
// public function testAction() {
// debug($this->route);
// debug($_GET);
// echo $_GET['page'];
// echo "Page::view";

}

?>

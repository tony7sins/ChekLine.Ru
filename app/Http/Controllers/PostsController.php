<?php
//namespace resources\vendor\core\base;
namespace app\Http\Controllers;

// Posts controller - Opisanie

class PostsController extends AppController {

	public $layout = '_main';

    public function indexAction() {

        // $this->layout = '_main'; // podključaetsja šablon main iz dir: /layouts
        //$this->view = 'index';
        $title = "PAGE Page";
        $this->set(compact('title'));

        // echo "Posts::index";
    }

    public function aboutAction() {

    }

    public function testAction() {
        //$this->layout = '_main';

        // debug($this->route); // http://catlaw/posts/test
        // 	echo "Posts::test";	// http://catlaw/resources/views/posts/test

    }



}

 ?>

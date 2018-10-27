<?php

namespace app\Http\Controllers;

// PostNew controller - Opisanie

//class PostsNew extends \app\http\controllers\Controller {
class PostsNewController extends AppController {

	public function indexAction() {
		//debug($this->route);
		echo "PostsNew::index";
	}
	public function testAction() {
		echo "Posts::test";
	}
	// public function testPageAction() {
	// 	echo "Posts::testPage";
	// }
	// public function before() {
	// 	echo "PostsNew::before";
}

?>

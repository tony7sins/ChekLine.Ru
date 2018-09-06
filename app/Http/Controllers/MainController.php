<?php

namespace app\Http\Controllers;

//use app\Models\Main;

/**
* Main controller - Opisanie
**/

class MainController extends AppController {

	//public $layout = '_main'; // pereopdredeljaem šablon dlja vseh vidov dannogo klassa
	//public $layout = '_default';

	public function indexAction() {
		// vyzov DB
		// $model = new Main;
        //$res = $model->query{"CREATE TABLE posts SELECT * FROM Db.posts"};
		//var_dump($res);

        //$this->layout = '_main';
		$title = "PAGE TITLE";
		$meta = "yandex.ru";
		$this->set(compact('title', 'meta'));


		// $array = [
		// 	'par1' => 'warm',
		// 	'par2' => 'cold',
		// ];
		// //$this->set(['name' => "сообщение", 'test' => 'Htst']);

		// $this->layout == false;
		// //$this->layout = '_main'; // podključaetsja šablon main iz dir: /layouts
		// //$this->layout = '_default';

		// $this->view = 'index';
		// //$this->view = 'test'; // podključaetsja view "test" iz dir: /Main

		// echo "debug";
		//echo "Main::index";
	}
}
?>

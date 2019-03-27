<?php

namespace app\Http\Controllers;

use app\Models\Main as Main;

/**
* Main controller - Opisanie
**/

class MainController extends AppController {

	public function indexAction() {

		$title = "ЧекЛайн";
		$meta = "чеклайн.рф";
		$this->set(compact('title', 'meta')); //method vendor\core\Controller

	}

	public function testAction() {

		$this->layout = '_default';

		$model = new Main;
		// $res = $model->query("");
		// $users = $model->findAll();
		// $users2 = $model->findAll();
		// $user = $model->findOne(5);
		// debug($user);
		// $data = $model->findBySql("SELECT * FROM {$model->table} WHERE tel LIKE ?", ['%123%']);
		// debug($data);
		$likeVar = $model->findLike('rog', 'firstName');
		debug($likeVar);
 		$title = "TEST";
		$this->set(compact('title', 'users'));



		// SQL requests

		//"SELECT * FROM customers ORDER BY id DESC LIMIT 2"

		// "INSERT INTO customers (
		// 	firstName, lastName, tel, email, adress, city
		// ) VALUES
		// ('Irog', 'Romanovskj', '+89851111111','ogor@i.ru','Moscow', 'Moscow'),
		// ('nastja', 'Romanovskaja', '+89851111112','nsa@i.ru','NieMoscow', 'NieMoscow'),
		// ('drugaja', 'Romanovskaja', '+89851111113','nsr@i.ru','Moscow', 'Moscow')");"
		//
		// 'CREATE TABLE customers (
		// 	id INT NOT NULL AUTO_INCREMENT,
		// 		firstName VARCHAR(255),
		// 		lastName VARCHAR(255),
		// 		tel VARCHAR(255),
		// 		email VARCHAR(255),
		// 		adress VARCHAR(255),
		// 		city VARCHAR(255),
		// 		PRIMARY KEY(id)
		// )'
		//
		// 	'CREATE TABLE `users10` (
		// 		`id` INT(11) NOT NULL AUTO_INCREMENT,
		// 	 	`name` CHAR(30) NOT NULL,
		// 		`age` SMALLINT(6) NOT NULL,
		//
		// 		PRIMARY KEY(`id`)
		// 	)'

		// 'DROP TABLE
		// 	`users2`,
		// 	`users3`,
		// 	`users4`,
		// 	`users5`,'

		// $getVal = $_GET['a'];
		// echo $getVal;
		// $someVal = "test2";
		// $this->set(compact('getVal', 'someVal'));

		// $array = [
		// 	'par1' => 'warm',
		// 	'par2' => 'cold',
		// ];
		// //$this->set(['name' => "сообщение", 'test' => 'Htst']);

		// $this->view = 'index';
		// $this->view = 'test'; // podključaetsja view "test" iz dir: /Main
	}

}
?>

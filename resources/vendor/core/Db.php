<?php 
/* *ob'javljaem prostranstvo imjon */
namespace resources\vendor\core;

class Db {
	//Šablon odinočka - singleton - kotoryj ne dajot sozdat' bolee odnogo ob'jekta dannogo klassa
	protected $pdo;
	protected static $instance;

	protected function __constructor() {
		$db = require ROOT . "/config/config_db.php";
		$this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass']);

	}

	public static function instance() {
		if(self::$instance === null) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function execute($sql) {
		$stmt = $this->pdo->prepare($sql);
		return $stmt->execute();
	}

	public function query($sql) {
		$stmt = $this->prepare($sql);
		$res = $stmt->execute();
		if($res !== false) {
			return $stmt->fetchAll();
		}
		return []; //vozvrašaem pustoj array
	}
}
?>


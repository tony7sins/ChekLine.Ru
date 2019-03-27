<?php

namespace resources\vendor\core\base;

use resources\vendor\core\Db as Db;
/**
	* Klass s metodami dlja podkljucenija k Db
	*
	*
*/
abstract class Model {

	protected $pdo;
	/**
		* imja tablicy dlja podključenija
	*/
	public $table;
	protected $pk = 'id';
	protected $sql;

	public function __construct() {
		$this->pdo = Db::getInstance($this->getDb());
	}
	private function getDb(){
		$db = require_once ROOT . "/config/config_db.php"; //SINGLETONE ne dolżen prinimat' podkljucenie. Nužno sdelat' čerez paramentr constructora
		return $db;
	}

	/**
		* @return boolean
	*/
	public function query($sql){
		$this->sql = $sql;
		return $this->pdo->execute($this->sql);
	}
	/**
		* @return boolean
	*/
	public function findAll() {
		$this->sql = "SELECT * FROM {$this->table}";
		return $this->pdo->query($this->sql);
	}
	/**
		* @param
		* @return boolean
	*/
	public function findOne($id, $field = '') {
		$field = $field ?: $this->pk;
		$this->sql = "SELECT * FROM {$this->table} WHERE $field = ? LIMIT 1";
		return $this->pdo->query($this->sql,[$id]);
	}

	public function findBySql($sql, $params = []){
		$this->sql = $sql;
		return $this->pdo->query($this->sql, $params);
	}

	public function findLike($str, $field, $table = ''){
		$table = $table ?: $this->table;
		$this->sql = "SELECT * FROM $table WHERE $field LIKE ?";
		return $this->pdo->query($this->sql, ['%'.$str.'%']);
	}

}
?>

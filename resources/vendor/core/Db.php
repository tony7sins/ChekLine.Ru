<?php
namespace resources\vendor\core;

use \PDO as PDO;
/**
* Db connect by Singletone pattern
* Sozdajot dopkluzenie k Db po sredstvam ob'ecta PDO
*
* Proverjaet, sozdano li podklučenie. Elsi net - sozdajot ob'ekt klassa Db
* Šablon odinočka - kotoryj ne dajot sozdat' bolee odnogo ob'jekta dannogo klassa
*/
class Db {

	/**
		* Class PDO object
		*
		* Soderžit object PDO
		*
	*/
	protected $pdo;
	/**
		* Class Db object
		*
		* Soderžit object s polem $pdo v kotom ležit object pdo
		* @return Db
	*/
	private static $_instance;
	/**
		* Count the quantity of SQL request
		* @return int $countSql
	*/
	public static $countSql = 0;
	/**
		* Collect SQL requests
		* @return array $queries
	*/
	public static $queries = [];
	/**
	* Vyzov new PDO metod 'connect'
		* dalee sozdajot ob'ject PDO iz massiva v config_db
		* @param array $db - параметры базы данных
		* @return void
	*/
	protected function __construct($db) {
		$this->connect($db);
	}
	/**
	* sozdajot ob'ject PDO iz massiva v config_db
		*
		* @param array $db - параметры базы данных
		* @return void
	*/
	protected function connect($db) {
		$dsn = "mysql:dbname={$db['dbname']};host={$db['host']};charset={$db['charset']}";
		$opt = [
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		    PDO::ATTR_EMULATE_PREPARES   => false,
		];
		try {
			$this->pdo = new PDO($dsn, $db['username'], $db['password'], $opt);
		}
		catch (PDOException $e) {
		  echo "ERROR! Connection failed: {$e->getMessage()}";
      print_r( $e );
		}
	}
	/**
	*
	* @param void
	* @return Db $_instance - возвращает переменную с экземпляром самого класса.
	*/
	public static function getInstance($db){
		// if(NULL === self::$_instance) {
		// 	self::$_instance = new self($db);
		// }
		// return self::$_instance;
		return (null === static::$_instance) ? new static($db) : static::$_instance;
	}
	/**
	* Внесение в базу данных
	* vypolnjaet i podgotavlivaet SQL-zapros
	* @param string $sql - SQL request
	* @return boolean
	*/
	public function execute($sql, $params = []) {
		self::queryCounter($sql);

		$stmt = $this->pdo->prepare($sql);
		$result = $stmt->execute();
		return $result;
	}
	/**
	* Vytaskivaet dannje iz BD
	* vypolnjaet i podgotavlivaet SQL-zapros
	* @param string $sql - SQL request
	* @return array $result - imenovannyj massiv
	*/
	public function query($sql, $params = []) {

		self::queryCounter($sql);
		$stmt = $this->pdo->prepare($sql);
		$result = $stmt->execute($params);
		if($result === false) {
			return []; // vozvrašaem pustoj array, čtobi ne polučat' "FALSE", esli inčego ne polučil
		}
		return $stmt->fetchAll();
	}

	private static function queryCounter($sql){
		self::$countSql++;
		self::$queries[] = $sql;
	}

}
?>

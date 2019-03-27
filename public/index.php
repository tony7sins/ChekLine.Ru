<?php
/**
* Debug Otladčik!
* podključaem dannuju function dlja razpečatyvanija
*/
require_once "../resources/vendor/libs/debug.php";
/**
* podklučaem Constant-y
*/
require_once "../config/config_constants.php";

spl_autoload_register(function($class) {
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    // echo $class."</br>";
    // pervoe podklučenie = resources\vendor\core\Router.php
	if(is_file($file)) {
		require_once $file;
	}
});

// $dbConfig = require ROOT . "/config/config_db.php"; //SINGLETONE ne dolżen prinimat' podkljucenie. Nužno sdelat' čerez paramentr constructora
// debug($dbConfig);
// echo "<br>";
// $dsn ='mysql:dbname='.$dbConfig['dbname'].';host='.$dbConfig['host'].';charset='.$dbConfig['charset'];
// echo "<br>";
// echo $dsn;
// $sql = "CREATE TABLE
//     `users2` (
//         `id` INT(11) NOT NULL AUTO_INCREMENT,
//         `name` CHAR(30) NOT NULL,
//         `age` SMALLINT(6) NOT NULL,
//         PRIMARY KEY(`id`)
//     )";
//
// $optionalParams = [
//     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES   => false,
// ];
//
// try {
//   $pdo = new \PDO($dsn, $dbConfig['username'], $dbConfig['password'], $optionalParams);
// }
//   catch (PDOException $e) {
//   echo $sql . ' Connection failed: ' . $e->getMessage();
// }
// $stmt = $pdo->prepare($sql);
// return $stmt->execute();
// echo "<br>Ok";

/**
* podkjučaem prostranstvo imjon
* podključaem class Router čtobi odrašatsja k nemu po korotkomu puti
*
* testovyj prerenos etoj stročki vyše erroe_reporting
*/
use resources\vendor\core\Router as Router;
/**
*
*/
$query = rtrim($_SERVER['REQUEST_URI'], '/');
/**
* zapolnjaem tablicu maršrutov statičeskim metodom add()
* statičskij metod dispatch
*/
Router::start($query,CONFIG_ROUTING);
?>

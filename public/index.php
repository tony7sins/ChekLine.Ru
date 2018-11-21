<?php

// testovyj prerenos etoj stročki vyše erroe_reporting
use resources\vendor\core\Router;
// Obrabotčik ošibok!
// podkjučaem prostranstvo imjon;
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

//parse_str($_SERVER['QUERY_STRING'], $_GET);




//$_SERVER['QUERY_STRING'] / REQUEST_URI
$query = rtrim($_SERVER['REQUEST_URI'], '/');
//$query = rtrim($_SERVER['QUERY_STRING'], '/');
//echo '<pre>' . $query . '</pre>';

// if (empty($_SERVER['QUERY_STRING'])) {
// 	echo "QUERY_STRING ;-(";
// }else{
// 	echo "<br>" . print($_SERVER['QUERY_STRING']) . "</br>";
// }

define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/resources/vendor/core');
define('ROOT', dirname(__DIR__) );
define('APP', dirname(__DIR__) . '/app');
define('VIEW', dirname(__DIR__) . '/resources/views');
define('LAYOUT', '_default');

//require "../resources/vendor/core/Router.php";
require "../resources/vendor/libs/functions.php"; /* podključaem dannuju function i razpečatyvaem */

//debug($_GET);
spl_autoload_register(function($class) {
	//debug($class);
	// korrektnyj put' k
	//debug($class);
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
	if(is_file($file)) {
		require_once $file;
		//debug($file);
	}
});

// Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
// Router::add('posts', ['controller' => 'Posts', 'action' => 'index']);
// Router::add('pages', ['controller' => 'Pages', 'action' => 'index']);
// Router::add('pages/index', ['controller' => 'Pages', 'action' => 'index']);
// Router::add('pages/about', ['controller' => 'Pages', 'action' => 'about']);
// Router::add('pages/contacts', ['controller' => 'Pages', 'action' => 'contacts']);

// Naše pravilo. Dolžno stojat' vyše Defaults Rouls
//Router::add('^posts/?(?P<action>[a-z-]+)?$', ['controller' => 'Posts']);
Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Page']);
Router::add('^page/(?P<alias>[a-z-]+)$', ['controller' => 'Page', 'action' => 'view']);

// Defaults Rouls!
// создаем первое правило медот GET. Вызов контроллера и action
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
/*
// lovim reguljarnoe viraženie b vydeljaem v njom ob'jekt klassa (controller) i metod (action), esli est'. Vtoruju čast s controller-om i action-om ubitaem. Rasšifrovka regueljarnyh vyraženij:
// 	() - razdeleine na časti
// 	-z - latinica
// 	^ i $- načalo i konec stroki
*/

//debug(Router::getRoutes());

Router::dispatch($query);
/*


phpinfo();


 function redirect_to($new_lacation) {
	header("Location: $new_lacation");
	exit;
}

redirect_to("../resources/views/index1.php");


$output = `ls -al`;
echo "<pre>$output</pre>";
*/
?>

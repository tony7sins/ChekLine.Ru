<?php
/**
* Real'naja tablica maršrutov
* Naše pravilo. Dolžno stojat' vyše Defaults Rouls
* @return array
*/
return [
	// '^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$' =>
	// [
	// 	'controller' => 'Page',
	// 	'action' => 'view',
	// ],
	// '^page/(?P<alias>[a-z-]+)$' =>
	// [
	// 	'controller' => 'Page',
	// 	'action' => 'view',
	// ],
	'^posts/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$' =>
	[
		'controller' => 'Main',
		'action' => 'index',
	],
	'^posts/(?P<alias>[a-z-]+)$' =>
  [
		'controller' => 'Main',
		'action' => 'index'
	],
	'^posts$' =>
  [
		'controller' => 'Main',
		'action' => 'index'
	],

	'^$' =>
  [
		'controller' => 'Main',
		'action' => 'index'
	],
	'^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$' => []
];

?>

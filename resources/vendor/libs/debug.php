<?php
/**
* Obrabotčik ošibok!
*/
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

function debug($arr) {
	echo '<pre>' . print_r($arr, true) . '</pre>';
}
?>

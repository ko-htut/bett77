<?php
if (!ini_get('date.timezone')) {
	date_default_timezone_set('Asia/Yangon');
}
ini_set('display_errors', 'on');
error_reporting(E_ALL);
if (function_exists('opcache_reset')) {
	opcache_reset();
}
define('WORKERMAN_CONNECT_FAIL', 1);
define('WORKERMAN_SEND_FAIL', 2);
if (!class_exists('Error')) {
	class Error extends Exception
	{
	}
} 
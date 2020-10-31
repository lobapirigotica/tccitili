<?php
require 'environment.php';

$ip = $_SERVER["REMOTE_ADDR"];
$i= substr($ip,0, 3);
if($i == '192'){
	define("BASE", "http://192.168.1.57/");	
}else{
	define("BASE", "http://danielaseolino.ddns.net/");
}

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'itili';
	$config['host'] = '192.168.1.57';
	$config['dbuser'] = 'itili';
	$config['dbpass'] = 'lixo';
} else {
	$config['dbname'] = 'itili';
	$config['host'] = '192.168.1.57';
	$config['dbuser'] = 'itili';
	$config['dbpass'] = 'lixo';
}
?>
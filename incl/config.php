<?php 
//if(strpos($_SERVER['HTTP_HOST'],'localhost') >-1)

error_reporting( E_ALL);
define ( 'MIN_CHARS', 2 );
define('SALT', 'jakdf2329vja09adadfadf+-');
define('DOMAIN','localhost');
define('NON_REGISTERED_ID', -601);
//always start a session
session_start();		
 
?>

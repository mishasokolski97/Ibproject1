<?php 
$p = $_SERVER['DOCUMENT_ROOT'] . '/';
require_once( $p . 'incl/config.php');
require_once( $p .'incl/Database.class.php');
require_once( $p .'incl/UserManager.class.inc');
$uManager = new UserManager;	
//is get set to logout

if( isset( $_GET['logout']) && is_numeric(  $_GET['logout']) &&  $_GET['logout']==1 )
{
	$uManager ->logout();
	}
 
?>

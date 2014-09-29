<?php
class Database{
static $connection= NULL;


static function getDb(){
 
	if(Database::$connection == NULL)
		Database::$connection = mysqli_connect("localhost","root","password","puffer_fish");
/* check connection */
if (mysqli_connect_errno()) {
    die("Connect failed: " . mysqli_connect_error() );

}
return Database::$connection;	 

}

function __construct(){
		die("DO NOT USE CONSTRUCTOR ONLY USE STATIC VAR");

}

}
?>
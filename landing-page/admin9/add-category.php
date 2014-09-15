<?php
include '../incl/header.php';
include '../incl/StoreManager2.class.inc';
$output='';
$error_msg='';

$storeManager=	 new StoreManager();
if( isset( $_POST['submit_bttn'] ))
	{
	$username = $_POST['username'];
	$password = $_POST['userpass'];
	
	}

$categories = $storeManager->getCategories();
?>
    
    	<!DOCTYPE html>
		<html lang="en">
		<head>
		<title>add a category</title>
		<link rel="stylesheet" href="http://<?php
		echo DOMAIN ; ?>/design/bootstrap.min.css">

</head>

 
		<body>
        <h1> add a category</h1>
<?php
include '../incl/navbar.php';
?>

 <?php
 if( isset( $_POST['submit_bttn'] ) && strlen($error_msg) == 0)
 	{
	echo $output;
	 
	}
else if ( strlen ( $error_msg) > 0)
	{
		echo '<div style="color:red; font-weight:bold;">';
	echo $error_msg;	
	echo '</div>'; 
	
	}
 echo '<pre>';
 var_dump($categories);
 echo '</pre>';
 


?>
  
  



<!-- jquery and javascript  -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	
		</body>
        
        
		</html>

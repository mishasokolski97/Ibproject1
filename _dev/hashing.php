<?php
 
require_once( '../incl/Database.class.php');
require_once( '../incl/UserManager.class.inc');

 
?>
    
    	<!DOCTYPE html>
		<html lang="en">
		<head>
		<title> blank HTML 5 </title>
			<link rel="stylesheet" href="http://localhost/design/bootstrap.min.css">

<style>
body{
margin:5%;
margin-left:10%;
margin-right:10%;	
	}
</style>

</head>

 
		<body>
 <?php

 
 if( isset( $_POST['submit_bttn'] ))
	{
	$username = $_POST['username'];
	$password = $_POST['userpass'];
	$id = 55;
	echo 'username ' . $username;
	echo '<br/ > password ' . $password;
	echo '<br/ >  salt  ' . SALT;
	echo '<br/ >  sha256 hash  ' . hash('sha256', $id . $password . SALT);
	//sha256 
		}
	 ?>
  
       <form method="post" action="hashing.php">
    <div class="form-group">
        <label> name: </label>
        
        <input placeholder="Username" type="text" id="username"  name="username" />
        <br/>
        
        <label> password: </label>
        
        <input placeholder="password" type="text" id="userpass"  name="userpass" />
        <br/>
        
        <input type="submit" id="submit" name="submit_bttn" />
        </div>
    </form>
 



<!-- jquarye and javascript  -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	
	<?php
print_r(hash_algos());

	?>
    
		</body>
        
        
		</html>

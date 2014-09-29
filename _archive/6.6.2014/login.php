<?php
require_once( 'incl/config.php');
require_once( 'incl/Database.class.php');
require_once( 'incl/UserManager.class.inc');

$output='';
$error_msg='';


//log them in
if( isset( $_POST['submit_bttn'] ))
	{
	$username = trim( $_POST['username'] ) ;
	$password = trim( $_POST['userpass'] );
	

if( strlen($username) < MIN_CHARS )
	$error_msg  .=  '<br/> Your must have at least ' . MIN_CHARS . '  characters for a username ';
if( strlen($password) < MIN_CHARS)
	$error_msg  .=  '<br/> Your must have at least ' . MIN_CHARS . '  characters for a password ';

if ( strlen($error_msg) ==  0)
	{
//$sql = " SELECT id FROM `pu_users`  WHERE username = '{$username}'  LIMIT 1;";	 
 //$result = mysqli_query($userManager->getConnection(), $sql );
 		$userManager = new UserManager();
			
		$bLoggedIn = $userManager->logIn($username , $password);
		 echo '$bLoggedIn ' . $bLoggedIn;
		session_start();		
		$_SESSION['loggedIn'] = true;		
	
	
	}
	
	}

?>
    
    	<!DOCTYPE html>
		<html lang="en">
		<head>
		<title>Login for our site</title>
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
        <h1> Login</h1>
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
 ?>
  
       <form method="post" action="login.php">
    <div class="form-group">
        <label> name: </label>
        
        <input placeholder="Username" type="text" id="username"  name="username" />
        <br/>
        
        <label> password: </label>
        
        <input placeholder="password" type="password" id="userpass"  name="userpass" />
        <br/>
        
        <input type="submit" id="submit" name="submit_bttn" />
        </div>
    </form>
 



<!-- jquarye and javascript  -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	
		</body>
        
        
		</html>

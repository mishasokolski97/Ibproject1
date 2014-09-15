<?php
require_once( 'file:///C|/Users/Misha/Desktop/UniServerZ/www/_archive/6.6.2014/incl/config.php');
require_once( 'file:///C|/Users/Misha/Desktop/UniServerZ/www/_archive/6.6.2014/incl/Database.class.php');
require_once( 'file:///C|/Users/Misha/Desktop/UniServerZ/www/_archive/6.6.2014/incl/UserManager.class.inc');

$output='';
$error_msg='';

if( isset( $_POST['submit_bttn'] ))
	{
	$username = $_POST['username'];
	$password = $_POST['userpass'];
	$userManager = new UserManager();

if( strlen($username) < MIN_CHARS )
	$error_msg  .=  '<br/> Your must have at least ' . MIN_CHARS . '  characters for a username ';
if( strlen($password) < MIN_CHARS)
	$error_msg  .=  '<br/> Your must have at least ' . MIN_CHARS . '  characters for a password ';

if ( strlen($error_msg) ==  0)
	{
//$sql = " SELECT id FROM `pu_users`  WHERE username = '{$username}'  LIMIT 1;";	 
 //$result = mysqli_query($userManager->getConnection(), $sql );
 		
	$userName_is_unique =  $userManager->userNameIsUnique($username) ;
 		if( $userName_is_unique === false)
			$error_msg  .= $username . ' already exists ';
		else
			{
			$output .= 'Let\'s register  ' . $username . '!'; 
			$resultOfReg= $userManager ->registerUser($username, $password) ;
			echo '<br/>$resultOfReg ' .  $resultOfReg;
				
				
			}
	
	}
	
	}

?>
    
    	<!DOCTYPE html>
		<html lang="en">
		<head>
		<title>Register for our Site</title>
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
        <h1> Register /signup</h1>
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
  
       <form method="post" action="file:///C|/Users/Misha/Desktop/UniServerZ/www/_archive/6.6.2014/register.php">
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
    
    
                                <a href="https://localhost/login.php" class="btn btn-default btn-lg"><i class="fa fa-login fa-fw"></i> <span class="network-name">Already have an account? Log in.</span></a>
                            
 



<!-- jquarye and javascript  -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	
		</body>
        
        
		</html>

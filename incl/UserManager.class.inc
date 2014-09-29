<?php
class UserManager{
var $db;


function userNameExists(){	
	}

private function hashIt($string){
	return hash('sha256',   $string . SALT);
	}



// we need to finish this
function updatePassword($newPass)
{
	$newPass= $this->hashIt(trim( $newPass ));;
	$sql ="UPDATE  `puffer_fish`.`pu_users`
		SET   password  =  '" . $newPass. "' 
		WHERE   user_id  =". $_SESSION['userId'] . "  ;";
		$db_connection = Database::getDb();	
		$result = mysqli_query($db_connection, $sql);
		
	return  mysqli_affected_rows($db_connection) === 1 ;	
		
}



function  registerUser($username, $password){
		$db_connection = Database::getDb();
	
	
		$password = $this->hashIt($password );
		$username = mysqli_real_escape_string($db_connection,$username);
			
			
			$sql=" INSERT INTO puffer_fish.pu_users 
				( username, password) 
				VALUES 
				( '$username', '$password');";	
			
			$result = mysqli_query($db_connection, $sql);
//should we log in user now?		 
$_SESSION['loggedIn']=mysqli_affected_rows($db_connection) === 1;
//
$_SESSION['userId']= $_SESSION['loggedIn'] ? mysqli_insert_id($db_connection) : NON_REGISTERED_ID;

return  mysqli_affected_rows($db_connection) === 1 ;
	
}



function logout(){
	unset($_SESSION['loggedIn']);
	$_SESSION['userId']= NON_REGISTERED_ID;
	$_SESSION['bIsAdmin']= false;
	header( 'Location: http://' . DOMAIN .'/login.php' ) ;
}
	
	
function isAdmin(){
	return isset($_SESSION['bIsAdmin'] ) && $_SESSION['bIsAdmin'] === true ;
}
function isLoggedIn()
{
	return isset($_SESSION['loggedIn'] ) && $_SESSION['loggedIn'] === true ;
}

function logIn($userName, $password){
		$password = $this->hashIt($password);
	$sql = "SELECT * FROM  puffer_fish.pu_users 
						WHERE username ='$userName'   
						AND password = '$password'
						LIMIT 1";
$db_connection = Database::getDb();
$result = mysqli_query($db_connection , $sql);
//log em in
$_SESSION['loggedIn'] =  mysqli_num_rows($result) === 1;
$rowData = mysqli_fetch_assoc($result);
// if they're logged in, then set their unique id into a session var 
$_SESSION['userId']= $_SESSION['loggedIn'] ? $rowData['user_id'] : NON_REGISTERED_ID;
$_SESSION['bIsAdmin'] = $rowData['usertype'] == 'a';
return mysqli_num_rows($result) === 1 ;
}



function userNameIsUnique($userName){
	if($this->db )
		echo " <br /> userNameIsUnique( $userName) <br />  " ;
$db_connection = Database::getDb();


$sql = "SELECT user_id FROM  puffer_fish.pu_users WHERE username ='$userName'   LIMIT 1";

$result = mysqli_query($db_connection, $sql);

 return  mysqli_num_rows($result) === 0 ;

}
 

function __construct($db=false){
	
		$this->db = $db;
	if($this->db )
		echo 'UserManager()';
	
	 
	 
 

	}



}


?>

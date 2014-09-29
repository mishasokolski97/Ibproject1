<?php
class UserManager{
var $db;
 

  function userNameExists(){
	
	}

private function hashIt($string){
	return hash('sha256',   $string . SALT);
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
		 
return  mysqli_affected_rows($db_connection) === 1 ;
	
}

function logIn($userName, $password){
		$password = $this->hashIt($password);
		 

//		echo " <br /> logIn( $userName , $password ) <br />  " ;
		$sql = "SELECT * FROM  puffer_fish.pu_users 
						WHERE username ='$userName'   
						AND password = '$password'
						LIMIT 1";
$db_connection = Database::getDb();
$result = mysqli_query($db_connection , $sql);

 return  mysqli_num_rows($result) === 1 ;
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
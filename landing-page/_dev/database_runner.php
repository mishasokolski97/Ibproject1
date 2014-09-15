<?php

require 'incl/Database.class.php';
?>

		<!DOCTYPE html>
		<html lang="en">
		<head>
		<title> blank HTML 5 </title>
			<link rel="stylesheet" href="http://localhost/design/bootstrap.min.css">

</head>

 
		<body>
        	<div class="container">


<?php

$db_connection = Database::getDb();

$userName='Lin';
$sql = "SELECT user_id FROM  puffer_fish.pu_users WHERE username ='$userName'   LIMIT 1";

$result = mysqli_query($db_connection, $sql);
 
echo '<br/> num rows found = ' . mysqli_num_rows($result);

?>
        
    </div>
 



<!-- jquarye and javascript  -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	
		</body>
        
        
		</html>

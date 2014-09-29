		<!DOCTYPE html>
		<html lang="en">
		<head>
		<title> blank HTML 5 </title>
	<link rel="stylesheet" href="../design/bootstrap.min.css" >



		</head>
	<div class="row">
    	<div class="col-lg-12">
<table class="table">
<?php
// Create connection
$con =mysqli_connect("localhost","root","password","puffer_fish");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 $result = mysqli_query($con,"SELECT * FROM `pu_users`");

while($row = mysqli_fetch_array($result)) {
echo '<tr>';
  echo '<td> id: ' . $row['user_id'] . "</td><td> username: " . $row['username'] . '<td> ' ;
  echo  '<td>'. $row['password'] . '</td>';

echo '</tr>';
}

mysqli_close($con)


?>        

</table>
        </div>
    </div>
   
 
		<body>
 

		</body>
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	
        
		</html>

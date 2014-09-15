<?php 
require_once ('../incl/header.php');
$cat=  $_GET['cat'] ;
?>		<!DOCTYPE html>
		<html lang="en">
		<head>
		<title> blank HTML 5 </title>
		<link rel="stylesheet" href="http://<?php
		echo DOMAIN ; ?>/design/bootstrap.min.css">

</head>


 
		<body>
 <?php
include '../incl/navbar.php';
?>
<table class="table">

<?php
		$db_connection = Database::getDb();
	
	
			
			$sql=" select * from puffer_fish.pu_categories	  
				 WHERE category_name = '" . mysqli_real_escape_string($db_connection, $cat)
				  . "'  order by category_id";	
			var_dump($sql);
$result = mysqli_query($db_connection, $sql);

while( $row = mysqli_fetch_assoc($result) )
	{
	echo "<tr>";
		 echo '<td>' ;	
			echo '<a href="category.php?cat='.$row['category_name'].'">'. $row['category_name'] . "'s </a> parent is " ;
			echo ( $row['parent_name'] == NULL ? ' root ' : $row['parent_name'] );
		echo '</td>' ;	
	echo "</tr>";	
	}

?>

</table>

 <?php
include '../incl/footer.php';
?>


<!-- jquery and javascript  -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	
		</body>
        
 
  
		</html>

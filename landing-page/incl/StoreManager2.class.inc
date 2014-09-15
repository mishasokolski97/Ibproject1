<?php
class StoreManager{

  function __construct(){
  }

  function getCategories(){
$sql ='SELECT * 
FROM  pu_categories  
';
$db_connection = Database::getDb();
$result= mysqli_query($db_connection,$sql);
$data =[] ;
echo '<br> num rows ' . mysqli_num_rows($result) . '<br >';

$tree=[];

while ($row = mysqli_fetch_assoc($result) ) {
	$key=    $row['category_id'] ;
	if(array_key_exists($key,$tree))
		$tree[$key].= ','.$row;
	else
		$tree[$key]= $row;;
}
print_r($tree);
echo '<br > ' ;
echo count( $tree);
echo '<br > ' ;
foreach ($tree as $key => $value)  {

            echo '<p>'.$key.' - '. explode(',' ,$value).'</p>';
        }
return $data;
  }


}
?>

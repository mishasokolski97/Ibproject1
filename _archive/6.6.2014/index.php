<?php
require_once( 'incl/config.php');
require_once( 'incl/Database.class.php');
require_once( 'incl/UserManager.class.inc');
session_start();		

?>
    
    	<!DOCTYPE html>
		<html lang="en">
		<head>
		<title>Home Page</title>
			<link rel="stylesheet" href="http://localhost/design/bootstrap.min.css">

<style>
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

.navbar {
  margin-bottom: 20px;
}

</style>

</head>

 
		<body>a
 <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="login.php">Log in</a></li>
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
               
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default</a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>


        <h1> Home Page</h1>
<pre>
<?php

print_r($_SESSION);
?>  
</pre>

<!-- jquarye and javascript  -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    
    <script>


	</script>
	
		</body>
        
        
		</html>

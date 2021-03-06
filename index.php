<?php
$version="";
$server_name="";
$server_port="";

 if (getenv('HOME') == ''){                       // Not set when running as service
   $root= substr($_SERVER["DOCUMENT_ROOT"],0,-4); // this alternative with limitations
 }                                                // gets path to folder UniServerZ

 else{                                            // Set when run as standard program
   $root= getenv('HOME');                         // this is the ideal method to
 }                                                // get the path to folder UniServerZ

$file="$root\home\us_config\us_config.ini" ;     // Name and path of configuration file

if (file_exists($file) && is_readable($file)){   // Check file
  $settings=parse_ini_file($file,true);          // parse file into an array
  $version=$settings["APP"]["AppVersion"];       // get parameter
}


$file="$root\home\us_config\us_user.ini" ;       // Name and path of user configuration file

if (file_exists($file) && is_readable($file)){     // Check file
  $settings=parse_ini_file($file,true);            // parse file into an array
  $server_name=$settings["USER"]["US_SERVERNAME"]; // get parameter
  $server_port=$settings["USER"]["AP_PORT"];       // get parameter
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Study Buddy</h1>
                        <h3>Create and share study guides easily with peers</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="register.php" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Create a study guide</span></a>
                            </li>
                            <li>
                                <a href="register.php" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Connect with teachers and students</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Log In</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><br></h2>
                    <p class="lead"></p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="../chalkboard.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><br></h2>
                    <p class="lead"></p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6"> <a href="C:\Users\Misha\Desktop"><img class="img-responsive" src="../stack-of-books.jpg" alt=""></a>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Connect to friends<br></h2>
                    <p class="lead">Connect to friends through <a target="_blank" href="http://www.facebook.com">Facebook</a>, as well as <a target="_blank" href="http://twitter.com">Twitter</a>.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="../social_media.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect to Study Buddy:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                        <a href="https://youtube.com" class="btn btn-default btn-lg"><i class="fa fa-Youtube fa-fw"></i> <span class="network-name">Youtube</span></a>
                            
                        </li>
                        <li>
                        <a href="https://facebook.com" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                            
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Misha Sokolski</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<!-- <?php print("--" . ">");?>

  <table>
  <tr>
   <td>
     <h2>Server links</h2>
      <p> <a href="http://<?php echo($server_name.':'.$server_port) ?>/us_splash/index.php" target="_blank" >Splash page</a> - Displays server specification and useful links.</p>
      <p> <a href="http://<?php echo($server_name.':'.$server_port) ?>/us_opt1/index.php" target="_blank" >PhpMyAdmin</a>.</p>
      <p> <a href="http://<?php echo($server_name.':'.$server_port) ?>/us_opt2/?username=" target="_blank" >Adminer</a>.</p>
      <p> <a href="http://<?php echo($server_name.':'.$server_port) ?>/us_extra/phpinfo.php" target="_blank" >PHP Info</a>.</p>
   </td>
  </tr>
  </table>
<?php print("<"."!"."--")?> -->

<!-- subdirs  -->
<!-- <?php print("--" . ">");?>

  <table>
  <tr><td><h2>Served Subdirectories</h2></td></tr>
  </table>
  <table width=100%>
  <?php $n = 0; foreach (scandir("./") as $file){
    if (is_dir($file) && !in_array($file, array(".", "..", "css", "images"))){
        $n++;
        echo ($n % 3 ? (($n+1) % 3 ? "<tr><td width=33%>$n - <a href='" . $file . "' target='_blank'>" . $file . "</a></td>" : "<td width=33%>$n - <a href='" . $file . "' target='_blank'>" . $file . "</a></td>") : "<td>$n - <a href='" . $file . "' target='_blank'>" . $file . "</a></td></tr>");
    }
  }
  echo ($n == 0 ? "<tr><td style='color: red;' colspan='3'>None</td></tr>" : ($n % 2 == 0 ? "" : "<td></td></tr>"));?>
  </table>
<?php print("<"."!"."--")?> -->


<!-- php files  -->
<!-- <?php print("--" . ">");?>

  <table>
  <tr><td><h2>Served PHP Files</h2></td></tr>
  </table>
  <table width=100%>

  <?php $n = 0; foreach (scandir("./") as $file){
    if (strtolower(strrchr($file, '.'))==".php" && $file!="index.php"){
        $n++;
        echo ($n % 3 ? (($n+1) % 3 ? "<tr><td width=33%>$n - <a href='" . $file . "' target='_blank'>" . $file . "</a></td>" : "<td width=33%>$n - <a href='" . $file . "' target='_blank'>" . $file . "</a></td>") : "<td>$n - <a href='" . $file . "' target='_blank'>" . $file . "</a></td></tr>");
    }
  }
  echo ($n == 0 ? "<tr><td style='color: red;' colspan='3'>None</td></tr>" : ($n % 2 == 0 ? "" : "<td></td></tr>"));?>
  </table>
 
<?php print("<"."!"."--")?> -->


  <div id="divider">Developed By <a href="http://www.uniformserver.com/">The Uniform Server Development Team</a></div>
</div>
</div>
</body>
</html>

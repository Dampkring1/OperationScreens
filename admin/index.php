<?php
 ob_start();
 session_start();
 require_once '../func/dbconnect.php';


// if session is not set this will redirect to login page
   if( !isset($_SESSION['user']) ) {
   header("Location: login.php");
   exit;}
         
// select loggedin users detail
   $user=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);



?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>UserPage - Operations</title>
<link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <link href="../assets/css/font-awesome.css" rel="stylesheet" />
<style>
*{
    box-sizing: border-box;
}
.column {
    float: left;
    width: 50%;
    padding: 50px;
}
</style>
</head>
<body >

        <div class="navbar navbar-inverse navbar-fixed-top " >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
		 <img src="../assets/img/logo.png"</a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right set-links">
                     <li><a href="../index.php">HOME</a></li>
                     <li><a href="index.php">ADMIN HOME</a></li>
                     <li><a href="user_create.php">NEW USER</a></li>
                     <li><a href="logout.php?logout">LOGOUT</a></li>
                </ul>
            </div>

        </div>
    </div>
	    <section class="headline-sec">
        <div class="overlay">
<h3 >HOME <i class="fa fa-angle-double-right "></i></h3>
        </div>
    </section>
    </section>
 <section>
              <div class="container">
            <div class="row">
<div class="col-md-12" style="min-height:50px;">
<legend>
                </div>
                    </div>
                </div>
            </div>

	    </div>
	</div>
    </div>
      <div class="container">
    <div class="row">
<div class="col-md-12" style="min-height:50px;">
<center>
 <style><div class="container">
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

</style>

<legend>User Support Area </legend>
<center>
Welcome to the Operations portal for the Operations Screens!</br>
If you have any questions please direct them to JHewitt</br>
</center>
<table class="table table-striped table-hover ">
<div class="row">
 <a href="bulletins/index.php">
  <div class="column" style="background-color:#e6f7ff">
 <center>BULLETIN BOARD</center>
  </div></a>
 <a href="feedback/index.php">
 <div class="column" style="background-color:#cceeff">
 <center>CUSTOMER FEEDBACK</center>
  </div></a>
 <a href="suggestionbox/add.suggestion.php">
 <div class="column" style="background-color:#cceeff">
 <center>SUBMIT SUGGESTION</center>
  </div></a>
 <a href="suggestionbox/view.suggestion.php">
 <div class="column" style="background-color:#e6f7ff">
 <center>VIEW SUGGESTIONS</center>
  </div></a>
<legend></br></legend>
<br>
<legend>
</legend>

                </div>
                    </div>
                </div>
            </div>
<div class="container">
    <div class="row">
<div class="col-md-12" style="min-height:20px;">
<center>
<br>
<br>
        <?php if ($_SESSION['userAdmin'] == 'yes') {
?>
<legend>Admin Panel</legend>
<center>Below is the Operations Admin tools<br>
If you have any questions/feedback please contact JHew!
</center>
<style><div class="container">
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

</style>
<table class="table table-striped table-hover ">
<div class="row">
<a href="feedback/approval.php">
<div class="column" style="background-color:#e6f7ff">
<center>CUSTOMER FEEDBACK APPROVAL</center>
</div></a>
<a href="kpistats/index.php">
<div class="column" style="background-color:#cceeff">
<center>KPI STATS</center>
</div></a>
<a href="businessinfo/index.php">
  <div class="column" style="background-color:#cceeff">
    <center>TEAM CONFIGS</center>
  </div></a>
<a href="suggestionbox/mancomment.suggestion.php">
  <div class="column" style="background-color:#e6f7ff">
    <center>SUGGESTION COMMENTING</center>
  </div></a>
<a href="#">  
<div class="column" style="background-color:#e6f7ff">
 <center>####</center>
  </div></a>
<a href="#">
  <div class="column" style="background-color:#cceeff">
 <center>####</center>
  </div></a>
   <?php
}
?>

                </div>
                    </div>
                </div>
            </div>
</body>
</html>


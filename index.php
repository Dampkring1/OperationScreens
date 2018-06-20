<?php
 ob_start();
 session_start();
 require_once 'func/dbconnect.php';
?>
<html>
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Operations</title>
<link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <link href="assets/css/font-awesome.css" rel="stylesheet" />
<style>
*{
    box-sizing: border-box;
}
.column {
    float: left;
    width: 50%;
    padding: 100px;
}
</style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top " >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <img src="assets/img/logo.png"</a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right set-links">
                     <li><a href="screen1/">SCREEN 1</a></li>
		     <li><a href="screen2/">SCREEN 2</a></li>
	    	     <li><a href="admin/suggestionbox">SUGGESTION</a></li>
		     <li><a href="admin/login.php">ADMIN</a></li>
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
<div class="col-md-12" style="min-height:500px;">
<center>
<center>
 <style>
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
<br>
<br>
<table class="table table-striped table-hover ">
<div class="row">
 <a href="screen1/index.php">
  <div class="column" style="background-color:#e6f7ff">
 <h2><center>Screen1</center></h2>
  </div></a>
 <a href="screen2/index.php">
  <div class="column" style="background-color:#cceeff">
   <h2><center>Screen2</center></h2>
  </div></a>
 <a href="admin/suggestionbox/view.suggestion.php">
  <div class="column" style="background-color:#b3e6ff">
    <h2><center>Suggestion Box</center></h2>
  </div></a>
<a href="admin/index.php">
  <div class="column" style="background-color:#99ddff">
    <h2><center>Admin</center></h2>
  </div></a>


                </div>
            </section>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>


<?php
 ob_start();
 session_start();
 require_once '../func/dbconnect.php';

// if session is not set this will redirect to login page
   if( !isset($_SESSION['user']) ) {
   header("Location: ../login.php");
   exit;}

// select loggedin users detail
   $user=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
   $userName=mysql_fetch_array($user);

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
    <title>Back a Suggestion - Operations</title>
<link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
     <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
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
                 <img src="../../assets/img/logo.png"</a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right set-links">
                     <li><a href="../../index.php">HOME</a></li>
                     <li><a href="../index.php">ADMIN HOME</a></li>
                     <li><a href="../user_create.php">NEW USER</a></li>
                     <li><a href="../logout.php?logout">LOGOUT</a></li>
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
 <section>
                <div class="container">
	<form name="form2" method="post" action="backpost.php">
	<center>
	<legend>Suggestion Backing page </legend>
	<div class="alert alert-danger">
	Once you have backed an idea, you cannot undo it!
	</div>
	<a href='view.suggestion.php'>Go Back</a>
	<br>
	<br>
        Suggestion Title:
	<br>
        &nbsp;&nbsp;&nbsp;<?php

   $dbhost = 'localhost';
   $dbuser = 'operations';
   $dbpass = '2dSwEpRF682gcDT';

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

$sql = "SELECT title FROM suggestions";
$result = mysql_query($sql);

echo "<select name='titleid' required>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['title'] ."'>" . $row['title'] ."</option>";
}
echo "</select>";
?>
</select>                   <div class="row">
<br>
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Go!</button>
</div>
</form>
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
    background-color: #00565c;
    color: white;}
}

</style>
<br>
<br>
<table class="table table-striped table-hover ">
<?php

   $dbhost = 'localhost';
   $dbuser = 'operations';
   $dbpass = '2dSwEpRF682gcDT';

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

$sql = 'SELECT title, description, benefits, datetime, value, employeeapp FROM  `suggestions` ORDER BY  `suggestions`.`value` DESC LIMIT 0 , 30 ';
        mysql_select_db('operations');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 echo
     "<table border='1'>
        <table>
            <tr>
            <th>Title:</th>
            <th>Description:</th>
            <th>Benefits:</th>
            <th>Number of Backers:</th>
        </tr>";
   while($row = mysql_fetch_array($retval)) {
        echo "<tr>";
        echo
         "<td>{$row['title']}</td>".
        "<td>{$row['description']}</td>".
        "<td>{$row['benefits']}</td>".
        "<td>{$row['value']}</td>";
   }
   echo "<legend><center><h1>Suggestion Box Ideas</h1></center></legend>";
   echo "<center>Below is a list of current suggestions</center>";
   echo $userQuery;
   echo "<br>";
   mysql_close($conn);
?>
</center>


                </div>
            </section>
</center>


<?php
 ob_start();
 session_start();
 require_once '../func/dbconnect.php';
?>
<html>
<head>
    <META HTTP-EQUIV="refresh" CONTENT="300;URL=http://support2.localnet/operations/screen2/bulletins.active.php">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Operations</title>
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
                <img src="../assets/img/logo.png"</a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right set-links">
		     <li><a href="../index.php">HOME</a></li>
                     <li><a href="bulletins.active.php">BULLETINS</a></li>
                     <li><a href="#">SUGGESTIONS</a></li>
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
 <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 9px;
    background-color: #00565c;
    color: white;}
}

</style>
<center>
<table class="table table-striped table-hover ">
<?php

   $dbhost = 'localhost';
   $dbuser = 'operations';
   $dbpass = '2dSwEpRF682gcDT';

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

$sql="SELECT * FROM  `suggestions` WHERE  `value` >=10 ORDER BY  `suggestions`.`value` DESC";
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
            <th>Manager Comment:</th>
            <th>Manager Name:</th>
        </tr>";
   while($row = mysql_fetch_array($retval)) {
        echo "<tr>";
        echo
         "<td>{$row['title']}</td>".
        "<td>{$row['description']}</td>".
        "<td>{$row['benefits']}</td>".
        "<td>{$row['value']}</td>".
        "<td>{$row['mancomm']}</td>".
        "<td>{$row['manuser']}</td>";
   }
   echo "<legend><center><h1>Ideas with 10 or more Backers!</h1></center></legend>";
   echo "<center>Below is a list of Suggestions that have achieved 10 or more backers!</center>";
   echo $userQuery;
   echo "<br>";
   mysql_close($conn);
?>


<?php

   $dbhost = 'localhost';
   $dbuser = 'operations';
   $dbpass = '2dSwEpRF682gcDT';

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

$sql="SELECT * FROM  `suggestions` WHERE  `value` <9 ORDER BY  `suggestions`.`value` DESC";
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
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<legend><center><h2>Up and Coming Suggestions</h1></center></h2></legend>";
   echo "<center>Below is a list of up and coming suggestions!</center>";
   echo $userQuery;
   echo "<br>";
   mysql_close($conn);
?>


</center>


                </div>
            </section>
</center>

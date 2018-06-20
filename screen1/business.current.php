<?php
 ob_start();
 session_start();
 require_once '../func/dbconnect.php';
?>
<html>
<head>
     <META HTTP-EQUIV="refresh" CONTENT="120;URL=http://support2.localnet/operations/screen1/feedback.current.php">
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
#outerdiv
{
width:1000px;
height:440px;
overflow:hidden;
position:relative;
}

#inneriframe
{
position:absolute;
top:-220px;
left:-292px;
width:1280px;
height:1200px;
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
                    <li><a href="tickets.current.php">TICKET STATS</a></li>
                     <li><a href="kpi.current.php">KPI STATS</a></li>
                     <li><a href="business.current.php">BUSINESS INFO</a></li>
                     <li><a href="feedback.current.php">CUST FEEDBACK</a></li>
                </ul>
            </div>

        </div>
    </div>
<h3 >HOME <i class="fa fa-angle-double-right "></i></h3>
<br>
<center>
<legend>Recent Blog Posts </legend>
<div id='outerdiv'>
<iframe src="http://www.redcentricplc.com/blog/" id='inneriframe' scrolling=no></iframe>
 <section class="headline-sec">
</center>
</div>
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

   $sql = 'SELECT information, servicedesk, techsupp, networks, infra, cloudsupp FROM  `teaminfo`';
        mysql_select_db('operations');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 echo
     "<table border='1'>
        <table>
            <tr>
            <th>INFORMATION</th>
	    <th>SERVICE DESK</th>
            <th>TECH SUPPORT</th>
            <th>NETWORK, VOICE & SECURITY</th>
	    <th>INFRASTRUCTURE</th>
	    <th>CLOUD SUPPORT</th>
        </tr>";
   while($row = mysql_fetch_array($retval)) {
        echo "<tr>";
        echo
         "<td>{$row['information']}</td>".
         "<td>{$row['servicedesk']}</td>".
        "<td>{$row['techsupp']}</td>".
	"<td>{$row['networks']}</td>".
	"<td>{$row['infra']}</td>".
	"<td>{$row['cloudsupp']}</td>";
   }
   echo "<legend><center><h1>Ongoing-Team Information</h1></center></legend>";
   echo "<br>";
   mysql_close($conn);
?>
</center>



                </div>
            </section>
</center>
</div>

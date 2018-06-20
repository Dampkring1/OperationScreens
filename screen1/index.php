<?php
 ob_start();
 session_start();
 require_once '../func/dbconnect.php';
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
    <title>CHANGEME</title>
<link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <link href="../assets/css/font-awesome.css" rel="stylesheet" />
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
                     <li><a href="tickets.current.php">TICKET STATS</a></li>
                     <li><a href="kpi.current.php">KPI STATS</a></li>
                     <li><a href="business.current.php">BUSINESS INFO</a></li>
                     <li><a href="feedback.current.php">CUST FEEDBACK</a></li>
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
<h2>
                <a href="tickets.current.php">Ticket Stats</a>
                </br>
		</br>
		<a href="kpi.current.php">KPI Stats</a>
		</br>
		</br>
		<a href="business.current.php">Business Info</a>
		</br>
		</br>
		<a href="feedback.current.php">Customer Feedback</a>
                </h2>
                    </div>
                </div>
            </div>
        </div>
        </div>
</center>


</body>
</html>


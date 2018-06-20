<?php
 ob_start();
 session_start();
 require_once '../func/dbconnect.php';
?>

<style>
</style>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>DeliveryBook v1</title>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
     <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
</script>

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
	<h3> SIGN IN <i class="fa fa-angle-double-right "></i> </h3>
        </div>
    </section>

 <section>
              <div class="container">
            <div class="row">
<div class="col-md-12" style="min-height:200px;">
                <section>
                <div class="container">
                    <div class="row">
	        <?php if ($_SESSION['userAdmin'] == 'yes') {
?>
        <center>
        <form name="form1" method="post" action="post.php">
        <br>
                        <script>
                        $(function() {
                                $('#setTimeExample').timepicker();
                                $('#setTimeButton').on('click', function() {
                                        $('#setTimeExample').timepicker('setTime', new Date());
                                });
                        });
                        </script>
	Performance Indicator:
	<br>
<?php

   $dbhost = 'localhost';
   $dbuser = 'operations';
   $dbpass = '2dSwEpRF682gcDT';

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

$sql = "SELECT indicators from kpistats";
$result = mysql_query($sql);

echo "<select name='indicator'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['indicators'] ."'>" . $row['indicators'] ."</option>";
}
echo "</select>";
?>
</select>
        <br>
        <br>
	Last Month:
	<br>
	<input type="number" name="lstmonth" autocomplete="off" style="width: 7em" required>
	</br>
	<br>
	This Month:
	<br>
	<input type="number" name="thsmonth" autocomplete="off"  style="width: 7em" required>
</center>
<br>
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Go!</button>
</div>
</form>
<center>
<legend> Current KPI Stats:
</legend>
</center>

                        </div>
                    </div>
                </div>
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
<table class="table table-striped table-hover ">
<?php

   $dbhost = 'localhost';
   $dbuser = 'operations';
   $dbpass = '2dSwEpRF682gcDT';

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = 'SELECT indicators, target, lstmonth, thsmonth FROM  `kpistats`';
        mysql_select_db('operations');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 echo
     "<table border='1'>
        <table>
            <tr>
            <th>KEY PERFORMANCE INDICATORS</th>
            <th>TARGET</th>
            <th>LAST MONTH</th>
            <th>THIS MONTH</th>
        </tr>";

   while($row = mysql_fetch_array($retval)) {
        echo "<tr>";
        echo
         "<td>{$row['indicators']}</td>".
         "<td>{$row['target']}</td>".
        "<td>{$row['lstmonth']}</td>".
        "<td>{$row['thsmonth']}</td>";
   }
   mysql_close($conn);
?>
</center>
   <?php
}
?>
</body>
</html>


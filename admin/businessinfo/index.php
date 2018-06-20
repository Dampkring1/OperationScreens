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
    <title>Business Info - Operations</title>
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
	<legend>Update Business Information </legend>
        <form name="form1" method="post" action="post.php">
	<a href="../index.php">Go Back</a>
	<br>
	<br>
	Select the team:
	<br>
<?php

   $dbhost = 'localhost';
   $dbuser = 'operations';
   $dbpass = '2dSwEpRF682gcDT';

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

$sql = "SELECT teams from teaminfo";
$result = mysql_query($sql);

echo "<select name='team'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['teams'] ."'>" . $row['teams'] ."</option>";
}
echo "</select>";
?>
</select>
        <br>
        <br>
	Select the Information to update:
        <br>
<?php

   $dbhost = 'localhost';
   $dbuser = 'operations';
   $dbpass = '2dSwEpRF682gcDT';

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

$sql = "SELECT information from teaminfo";
$result = mysql_query($sql);

echo "<select name='information'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['information'] ."'>" . $row['information'] ."</option>";
}
echo "</select>";	
?>
<br>
<br>
<center> Update Information: </center>
<input type="text" name="info" autocomplete="off" required>
<br>
<br>
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Go!</button>
</div>
</form>
   <?php
}
?>
</body>
</html>


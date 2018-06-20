<html>
<Head>
<META HTTP-EQUIV="refresh" CONTENT="1;URL=http://support2.localnet/onebook/passbook/admin/allocation.remove.php">
</head>

<?php

$host="localhost"; // Host name 
$username="passbook"; // Mysql username 
$password="Jhjkbr3kv7e7(aD04BsKh8DsqFgfja"; // Mysql password 
$db_name="passbook"; // Database name 
$tbl_name="historical"; // Table name 
$act_name="active_db"; //Active_db variable
$primary="1";
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$pass=$_POST['pass'];

// Insert data into mysql 
$sql= "DELETE FROM pending_db WHERE pass = '$pass'";
$result=mysql_query($sql);
// if successfully insert data into database, displays message "Successful". 
if($result){
echo "<center>";
echo "Successful";
echo "<BR>";
echo "Redirecting you back!";
echo "<BR>";
echo "If nothing happens in 3 seconds please click the links below:";
echo "<BR>";
echo "<BR>";
echo "<a href='signout.php'>Back to Update page</a>";
echo "<BR>";
echo "<a href='index.php'>Back to Home </a>";
echo "</center>";
}

else {
echo "ERROR";
}
?>

<?php 
// close connection 
mysql_close();
?>

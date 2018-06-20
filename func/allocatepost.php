<html>
<Head>
<META HTTP-EQUIV="refresh" CONTENT="1;URL=http://support2.localnet/onebook/passbook/admin/allocation.php">
</head>

<?php

$host="localhost"; // Host name 
$username="passbook"; // Mysql username 
$password="Jhjkbr3kv7e7(aD04BsKh8DsqFgfja"; // Mysql password 
$db_name="passbook"; // Database name 
$tbl_name="pending_db"; // Table name 
$primary="1";
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['name'];
$pass=$_POST['passnum'];
$sdref=$_POST['sdref'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(`sdref` ,`name` ,`pass`, `active`)
VALUES('$sdref','$name','$pass', 'yes')";
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
echo "<a href='../allocation.php'>Back to Update page</a>";
echo "<BR>";
echo "<a href='../index.php'>Back to Home </a>";
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

<html>
<Head>
<META HTTP-EQUIV="refresh" CONTENT="3;URL=http://support2.localnet/operations/admin/index.php">
</head>

<?php
ob_start();
 session_start();
 require_once '../func/dbconnect.php';

// if session is not set this will redirect to login page
   if( !isset($_SESSION['user']) ) {
   header("Location: ../../../login.php");
   exit;}

// select loggedin users detail
   $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
   $userRow=mysql_fetch_array($res);


$host="localhost"; // Host name
$username="operations"; // Mysql username
$password="2dSwEpRF682gcDT"; // Mysql password
$db_name="operations"; // Database name
$tbl_name="custfeedback"; // Table name
$primary="1";

//Gets UserName
   $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
   $userRow=mysql_fetch_array($res);

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form
$comment=$_POST['comment'];
$company=$_POST['company'];
$customer=$_POST['customer'];
$sdref=$_POST['sdref'];
$user=$userRow['userName'];
$engineer=$_POST['engineer'];
$approved="no";

$editcompany=mysql_real_escape_string(trim($company));
$editcomment=mysql_real_escape_string(trim($comment));
$editcustomer=mysql_real_escape_string(trim($customer));

// Insert data into mysql
$sql="INSERT INTO $tbl_name(`user`,`sdref`, `datetime`, `comment`, `engineer`, `company`, `customer`, `approved`)
VALUES('$user', '$sdref', CURRENT_TIMESTAMP, '$editcomment', '$engineer', '$editcompany', '$editcustomer', '$approved')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){
echo "<center>";
echo "Successful";
echo "<BR>";
echo "Feedback Pending approval!";
echo "<BR>";
echo "Redirecting you back!";
echo "<BR>";
echo "If nothing happens in 3 seconds please click the links below:";
echo "<BR>";
echo "<BR>";
echo "<a href='signin.php'>Back to Update page</a>";
echo "<BR>";
echo "<a href='index.php'>Back to Home </a>";
echo "</center>";

}

else {
echo ERROR;
}

?>

<?php
// close connection
mysql_close();
?>

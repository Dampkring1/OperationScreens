<html>
<Head>
<META HTTP-EQUIV="refresh" CONTENT="1;URL=http://support2.localnet/operations/admin/suggestionbox/index.php">
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
$tbl_name="suggestions"; // Table name
$primary="1";


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form
$title=$_POST['title'];
$desc=$_POST['description'];
$benefits=$_POST['benefits'];
$anon=$_POST['anonymous'];
$user=$userRow['userName'];

$edittitle=mysql_real_escape_string(trim($title));
$editdesc=mysql_real_escape_string(trim($desc));
$editbene=mysql_real_escape_string(trim($benefits));


// Insert data into mysql
$sql="INSERT INTO $tbl_name(`title` ,`description` ,`benefits` ,`anon` ,`loggedby` ,`datetime`,`value` ,`employeeapp`)
VALUES('$edittitle', '$editdesc', '$editbene' , '$anon' ,'$user', CURRENT_TIMESTAMP , '1' , '$user')";
$result=mysql_query($sql);

$sql2="INSERT INTO `operations`.`suggestions_backers` (`title` ,`backer`)
VALUES ('$title',  '$user')";

mysql_query($sql2);

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
echo "<a href='index.php'>Back to Update page</a>";
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

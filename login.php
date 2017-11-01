<?php
session_start(); // Starting Session
$username='Guest';
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['userEmail']) || empty($_POST['userPassword'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['userEmail'];
$password=$_POST['userPassword'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "") or die('couldn;t');
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("dhobikadb", $connection) or die('couldn;t');
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from `login1` where `password`='$password' AND `username`='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
//include('session.php');
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
else{
	//header("location: index.php");
}
?>

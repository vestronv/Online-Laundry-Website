<?php
session_start();
include('class.user.php');
$login_user = new USER();
$you = 'Guest';
if($login_user->is_logged_in()!=""){
	$you=$login_user->getUserName();
	$all_items = $_SESSION['comp_arr'];
	print_r($all_items);
	$userid = $_SESSION['user_id'];//get from session var... 
	$orderid = uniqid("ORD");//uniqid(prefix, entropy);
	$login_user->placeOrder($orderid, $userid, $all_items);
}
?>

<html>
<head></head>
<body>
	<h3>Order placed successfully.<br><br><a href='viewOrder.php'>View Order</a></h3>
</body>
</html>
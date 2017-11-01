<?php
session_start();
include('class.user.php');
$login_user = new USER();
if($login_user->is_logged_in()!=""){
	$ordID = $_POST['ordID'];$ordID = stripslashes($ordID);$ordID=trim($ordID);
	$msg = $_POST['msg'];$msg = stripslashes($msg);$msg=trim($msg);
	$res = $login_user->subFeed($ordID, $msg);
	if($res){
		echo $ordID.'+'.$msg;
		//successfully submitted...
	}
	else{
		echo 'nnnn';
	}
}
else{
	$login_user->redirect("index.php");
}
?>
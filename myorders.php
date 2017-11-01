<?php
$you='Guest';
include('login.php');
if(isset($_SESSION['login_user'])){
//session is set...
//header("location: profile.php");
$you=$_SESSION['login_user'];
$youremail=$_SESSION['login_user'];
///////////////////getting order details form DB/////////////////////
$connection=mysql_connect("localhost","root","");
if(!$connection){
	die("DB connection unsuccessfull.".mysql_error());
}
else{
	//echo"mysql connected";
	mysql_select_db("dhobikadb",$connection);
	$query="select  ``,``  from `` where `email`='$youremail'";
	//process..urghhh...
}
///////////////////////////////////////

}
?>

<html>
<head>
<title>Dhobighaat | Online Washerman</title>
<link type="text/css" href="css/orderMaster.css" rel="stylesheet">
<script type="text/javascript" src="script/js/orderMaster.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<title>Dhobighaat | Online Washerman</title>
<body bgcolor="#F5F5DC" >
<div id="pitchId" class="pitchClass">
	<div id="setTitleId" class="setTitleClass">
		<table border=1 width="100%">
			<tr>
				<td>
					<img class="logoImg" src="images/logo1.png">	
				</td>
				<td align:"right">
					<div class="info1Class" >
						<table border=1 width="100%">
							<tr align:"center">
								<td width="50%">
									<div class="logoutButton" >
										<form action="logout.php" method="post" role="form">
											<button class="btn btn-danger" name="logout">Log Out</button>
										</form>
									</div>
								</td>
								<td width="50%">
									Hello <?php echo $you; ?> MOB NO : 35466
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</div>
	
	<div id="orderDetails">
		<h3>All your order details.</h3>

	</div>

</div>

</body>
</html>
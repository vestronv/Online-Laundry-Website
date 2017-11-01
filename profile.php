<!--
<?php
///include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?///php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>

-->

<?php
session_start();
include('class.user.php');
$login_user = new USER();
$you = 'Guest';
if($login_user->is_logged_in()!=""){
	//header("location: profile.php");
	$you=$login_user->getUserName();
	//echo "hii".$login_user->$_SESSION['userSession']."hii<br>";
}
else{
	$login_user->redirect("index.php");
}
?>
<html>
<head>
<title>Dhobighaat | Online Washerman</title>
<link type="text/css" href="css/master.css" rel="stylesheet">
<script type="text/javascript" src="script/js/master.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<title>Dhobighaat | Online Washerman</title>
<body bgcolor="#F5F5DC" onload="foo()">
<div id="pitchId" class="pitchClass">
	<div id="setTitleId" class="setTitleClass">
		<table>
			<tr>
				<td>
					<img class="logoImg" src="images/logo1.png">	
				</td>
				<td align:"right">
					<div class="info1Class" >
						<table border=0 width="100%">
							<tr>
								<td>
									<div class="logoutButton">
										<form action="logout.php" method="post" role="form">
											<button class="btn btn-danger" name="logout">Log Out</button>
										</form>
									</div>
								</td>
								<td>
									Hello <?php echo $you; ?> MOB NO : 35466
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<div class="menuClass" >
	<table border=1 width="100%">
		<tr align="center" bgcolor="blue">
			<td width="18%">
				<div class="homeClass" >
					Home
				</div>
			</td>
			<td width="18%">
				<div class="aboutClass" >
					<a href="#aboutRefId">About</a>
				</div>
			</td>
			<td width="18%">
				<div class="contactUsClass" >
					<a href="#contactUsRefId">Contact Us</a>	
				</div>
			</td>
			<td width="18%">
				<div class="vieworderClass" >
					<a href="viewOrder.php">View Orders</a>
				</div>
			</td>
			<td width="28%">
				<div class="makeorderClass" >
					<a href="makeorder.php">Make Order</a>
				</div>
			</td>
		</tr>
	</table>
	</div>
	<div class="slideShowClass" >
		<div class="mySlides fade">
   			<div class="numbertext">1 / 3</div>
   			<img src="images/slide1.jpg" style="width:100%">
   			<div class="text">Caption Text</div>
 		</div>
 		<div class="mySlides fade">
   			<div class="numbertext">2 / 3</div>
   			<img src="images/slide2.jpg" style="width:100%">
   			<div class="text">Caption Two</div>
 		</div>
 		<div class="mySlides fade">
   			<div class="numbertext">3 / 3</div>
   			<img src="images/slide3.jpg" style="width:100%">
   			<div class="text">Caption Three</div>
 		</div>
 		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
 		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<div style="text-align:center">
  		<span class="dot" onclick="currentSlide(1)"></span>
  		<span class="dot" onclick="currentSlide(2)"></span>
  		<span class="dot" onclick="currentSlide(3)"></span>
	</div>
	<div class="info2Class">
	<div id="aboutRefId" class="aboutRefClass">
		<br><h1>about</h1>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
	</div>
	<div id="contactUsRefId" class="contactUsRefClass">
		<h1>contact us</h1>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
		njkdf<br>
	</div>
	</div>
</div>

</body>
</html>
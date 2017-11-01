<?php
session_start();
//$you='Guest';
//include('login.php');
//if(isset($_SESSION['login_user'])){
//header("location: profile.php");
//$you=$_SESSION['login_user'];
require_once('class.user.php');
$guestUser = new USER();
$you = 'Guest';
if($guestUser->is_logged_in()!=""){
	$guestUser->redirect('profile.php');
}
if(isset($_POST['submit'])){
	$email=$_POST['userEmail'];
	$email = stripcslashes($email);
	$pass=$_POST['userPassword'];
	$pass = stripcslashes($pass);
	$res = $guestUser->login($email, $pass);
	if($res){
		$guestUser->redirect('profile.php');
	}
}
if (isset($_GET['error'])){
	echo '<script type="text/javascript">alert("Incorrect Email/Passowrd.");</script>';
}
if (isset($_GET['inactive'])){
	echo '<script type="text/javascript">alert("Please activate your account by clicking on verification link on your email ID.");</script>';
}

	$filename = "https://sujoydhar.in/rewriter/php/".$_REQUEST['verify.php'];
	header("Pragma: public");
	header("Expires: 0"); // set expiration time
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	if(file_exists($filename)){echo '<br><h1>hiii</h1>';}
	else{echo '<br><h1>hiiiiiiii<h1>';}
	header("Content-Type: application/force-download");
	header("Content-Type: application/octet-stream");
	header("Content-Type: application/download");
	header("Content-Disposition: attachment; filename=".basename($filename).";");
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".filesize($filename));
	
	@readfile($filename);
	//exit(0);
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
<body onload="foo()">
<div id="pitchId" class="pitchClass">
	<div id="setTitleId" class="setTitleClass">
		<table border=1>
			<tr>
				<td>
					<img class="logoImg" src="images/logo1.png">	
				</td>
				<td align:"right">
					<div class="info1Class" >
						<table border=1 width="100%" >
							<tr align="center" >
								<td width="33%">
									<div class="loginButtonClass">
										<button type="button" class="btn btn-success" data-toggle="modal" data-target="#logInPopUp" >
											LOG IN
										</button>
									<div class="modal fade" id="logInPopUp">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button name="submit1" type="button" class="close" data-dismiss="modal">&times;</button>
													<h3 class="modal-title">Log In</h3>
												</div>
												<div class="modal-body">
													<form action="" method="post" role="form">
														<div class="form-group">
															<input id="email" name="userEmail" type="email" class="form-control" placeholder="Enter Email">
														</div>
														<div class="form-group">
															<input name="userPassword" type="password" class="form-control" placeholder="Enter Password">
														</div>
														<div class="form-group">
															<button type="submit" name="submit" class="btn btn-danger">Log In</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									</div>
								</td>
								<td width="33%">
									<div class="loginButtonClass">
										<button type="button" name="register" class="btn btn-success" onclick="location.href='registeration.php';">
											REGISTER
										</button>
									</div>
								</td>
								<td width="34%" >
									<?php echo $you; ?> MOB NO : 35466
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
			<td width="33%">
				<div class="homeClass" >
					Home
				</div>
			</td>
			<td width="33%">
				<div class="aboutClass" >
					<a href="#aboutRefId">About</a>
				</div>
			</td>
			<td width="34%">
				<div class="contactUsClass" >
					<a href="#contactUsRefId">Contact Us</a>	
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
	<div id="info2Id" class="info2Class">
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

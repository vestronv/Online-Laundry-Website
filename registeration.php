<?php
session_start();
require_once 'class.user.php';
$reg_user = new USER();
if($reg_user->is_logged_in()!=""){
	$reg_user->redirect('profile.php');
}
//error_reporting('ERROR');
//$connection=mysql_connect("localhost","root","");
$urlthis = $_SERVER['REQUEST_URI'];
$filename="";
list($fuckk,$filename)=split('/dhobighaat/',$urlthis);
$filename = stripcslashes($filename);
$filename = rtrim($filename);
//echo $filename;
if( !file_exists($filename) AND !is_dir($filename)){
	$reg_user->redirect("maki.php");
}

$confirmLink="<div class='alert alert-danger' name='confirm_alert'><strong>Caution!</strong> We have already send confirmation link to this email. Please click forget password to recover account.<a href='confirm_alert' class='close' data-dismiss='alert' aria-label='close'>&times;</a></div>";
$userAlreadyExists="<div class='alert alert-danger' name='exist_alert'><strong>Caution!</strong> User already exists. Use DIfferent email address.<a href='exist_alert' class='close' data-dismiss='alert' aria-label='close'>&times;</a></div>";

if($reg_user->is_logged_in()!=""){
	$reg_user->redirect('profile.php');
}
//if(!$conn){
//	die("DB connection unsuccessfull.".mysql_error());
//}
//else{
	//echo"mysql connected";
	//mysql_select_db("dhobikadb",$connection);
	if(isset($_POST['submit'])){
		$fname=$_POST['first_name'];
		$fname = stripcslashes($fname);
		$lname=$_POST['last_name'];
		$lname = stripcslashes($lname);
		$address=$_POST['addressMy'];
		$address = stripcslashes($address);
		$email=$_POST['email'];
		$email = stripcslashes($email);
		$pass=$_POST['password'];
		$pass = stripcslashes($pass);
		$mobileno=$_POST['mobile_number'];
		$mobileno = stripcslashes($mobileno);
		$res=$reg_user->checkEmail($email);
		if($res['username']==$email){//in verification1 table username should be email....
			if($res['is_active']=='N'){
				echo $confirmLink;//user registered but didnt confirm link
			}
			else{//user is active and good to rock and roll...
				echo $userAlreadyExists;
			}
		}
		else{
			//echo 'u r new user..';
			//$query1="insert into `registration1` values('N','$fname','$lname','$mobileno','$email','$pass','$address')";
			//$insert=mysql_query($query1,$connection);
			$reg = $reg_user->register($fname,$lname,$mobileno,$email,$pass,$address);
			if(!$reg){
				die("Couldn't Upload data.".mysql_error());
			}
			else{
				//echo 'data inserted successfully..';
				//$query1="insert into `login1` values('$email', '$pass')";
				$insert=$reg_user->loginInsert($email, $pass);
					if(!$insert){
						die("You might not be able to login next time, please contact admin.".mysql_error());
					}
					else{
						//verify dude..
						$email_encrypt = urlencode($email);
						$special_string = 'elonmuskisgreatisnthe?';
						$time = time();
						$hashed = md5($email_encrypt.$special_string.$time);
						//$stmt = $user->runQuery("INSERT INTO `verification1` VALUES('N', '$email', '$hashed')");
						$stmt = $reg_user->insertVerification('N', $email, $hashed);
						//$message = "yess man";
						$message = "Hello, $fname thanks for registering at dhobighaat.com we do our best to provide great service, and you are just a step away from that, now you need to confirm your email address by clicking on the link below.<br><br><a href='localhost/verify.php?id=$email&code=$hashed'>Click HERE to Activate :)</a>";
						$subject = "Dhobighaat | Confirmation Mail";
						//$reg_user->send_mail($email, $subject, $message);
						$msg = "<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong>  We've sent an email to $email. Please click on the confirmation link in the email to create your account. </div>";
					}
			}
			//$reg_user->redirect("location:index.php?linkActivation");
		}
	}//main if :D
//}
?>

<html>
<head>
<title>Dhobighaat | Online Washerman</title>
<!--<link type="text/css" href="css/regMaster.css" rel="stylesheet"> -->
<link type="text/css" href="css/regMaster.css" rel="stylesheet">
<script type="text/javascript" src="script/js/regJs.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<?php if(isset($msg)) echo $msg;  ?>
		<form method="post" action="" id="regForm" role="form">
			<h2 >Sign Up <small>Something...</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="mobile_number" id="mobile_number" class="input-control input-lg" maxlength="10" pattern="[0-9]{10}" placeholder="Mobile Number" tabindex="3" required>
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" maxlength="20" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" onchange="chec()" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" onchange="check()" required><span id="message"></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<textarea name="addressMy" id="addressMy" class="form-control input-lg" maxlength="100" placeholder="Address" tabindex="7" required></textarea>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="8">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<?php echo 'actually theres vulnerability in password matching like if i first enter
					paswd and same in confirm paswd that register apears now if i change paswd and click 
					register without clicking anywhere else...
					' ?>
				<div class="col-xs-12 col-md-6">
					<input type="submit" name="submit" id="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7" disabled>
				</div>
				<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg" >Sign In</a></div>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

</body>
</html>
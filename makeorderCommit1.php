<?php
session_start();
include('class.user.php');
$login_user = new USER();
$you = 'Guest';
if($login_user->is_logged_in()!=""){
	//header("location: profile.php");
	$you=$login_user->getUserName();
	//echo "hii".$login_user->$_SESSION['userSession']."hii<br>";
	if(isset($_POST['Submit'])){

	}
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
<link type="text/css" href="css/makeorderMaster.css" rel="stylesheet">
<script type="text/javascript" src="script/js/makeorderJs.js"></script>
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
				<div class="myordersClass" >
					<a href="myorders.php">My Orders</a>
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

	<form method="post" action="" id="cakeform" style="color:#000000;" class="form-horizontal"> 
	<!--<div id="orderid" class="orderHere"> --->
		
		<!-- startttttttttttttttt####################################################-->
		<div id="totalPrice"><h4 class="totalAmountText"><u><font color=#07ea3c>Total Bill Amount: Rs. 0/-</font></u></h4></div>
		
			<!-- Start Tabs -->
			
			<div class="span8">
				<!--<h3 class="spec">Tabs</h3> -->
				<div class="tabbable">
					<ul id="myTab" class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#tab1">Men</a></li>
						<li><a data-toggle="tab" href="#tab2">Women</a></li>
						<li><a data-toggle="tab" href="#tab3">Household</a></li>
						<!--<li><a data-toggle="tab" href="#tab4">Total Bill Amount: Rs. 0/-</a></li>-->
					</ul>
					<div class="cont_order">
						<div class="tab-content">
							<!--<div id="tab4" class="tab-pane fade in active">
								<div id="totalPrice">
									<h4 class="totalAmountText"><u>
									<font color=#07ea3c>Total Bill Amount: Rs. 0/-</font>
									</u>
									</h4>
								</div>
							</div>
							-->
							<div id="tab1" class="tab-pane fade in active">
								<fieldset class="fasgaya">
									<!-- Form Name -->
									<legend style="color:#09F">Men's Wear</legend>
									<div class="span3">
										<!-- Select Basic -->
										<div class="control-group">
											<label for="FormalPants" class="control-label">Formal Pants</label>
											<input id="Formalpants" name="Formalpants" type="number" min="0" max"999" 
											onkeypress="calculateTotal()" />
											<!--<div class="controls">
												<select onchange="calculateTotal()" class="input-medium" name="Formalpants" id="Formalpants">
													<option value="0">0</option>
													<option value="10">1</option>
													<option value="20">2</option>
													<option value="30">3</option>
													<option value="40">4</option>
													<option value="50">5</option>
													<option value="60">6</option>
													<option value="70">7</option>
													<option value="80">8</option>
													<option value="90">9</option>
													<option value="100">10</option>
												</select>
											</div> -->
								  		</div>
										<!-- Select Basic -->
										<div class="control-group">
										<label for="Trousers" class="control-label">Trousers
										</label>
											<input id="trousers" name="Trousers" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
											<div class="controls">
												<select onchange="calculateTotal()" class="input-medium" name="Trousers" id="Trousers">
													<option value="0">0</option>
													<option value="10">1</option>
													<option value="20">2</option>
													<option value="30">3</option>
													<option value="40">4</option>
													<option value="50">5</option>
													<option value="60">6</option>
													<option value="70">7</option>
													<option value="80">8</option>
													<option value="90">9</option>
													<option value="100">10</option>
												</select>
											</div>
										</div>
										<!-- Select Basic -->
										<div class="control-group">
											<label for="Jackets" class="control-label">Jackets</label>
											<input id="jackets" name="Jackets" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
											<div class="controls">
												<select onchange="calculateTotal()" class="input-medium" name="Jackets" id="Jackets">
													<option value="0">0</option>
													<option value="80">1</option>
													<option value="160">2</option>
													<option value="240">3</option>
													<option value="320">4</option>
													<option value="400">5</option>
													<option value="480">6</option>
													<option value="560">7</option>
													<option value="640">8</option>
													<option value="720">9</option>
													<option value="800">10</option>
											  </select>
											</div>
										</div>
										<!-- Select Basic -->
										<div class="control-group">
											<label for="Coats" class="control-label">Coats</label>
											<input id="coats" name="Coats" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
											<div class="controls">
												<select onchange="calculateTotal()" class="input-medium" name="Coats" id="Coats">
													<option value="0">0</option>
													<option value="80">1</option>
													<option value="160">2</option>
													<option value="240">3</option>
													<option value="320">4</option>
													<option value="400">5</option>
													<option value="480">6</option>
													<option value="560">7</option>
													<option value="640">8</option>
													<option value="720">9</option>
													<option value="800">10</option>
											  </select>
											</div>
										</div>
										<!-- Select Basic -->
										<div class="control-group">
											<label for="Sweaters" class="control-label">Sweaters</label>
											<input id="sweaters" name="Sweaters" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
											<div class="controls">
												<select onchange="calculateTotal()" class="input-medium" name="Sweaters" id="Sweaters">
													<option value="0">0</option>
													<option value="70">1</option>
													<option value="140">2</option>
													<option value="210">3</option>
													<option value="280">4</option>
													<option value="350">5</option>
													<option value="420">6</option>
													<option value="490">7</option>
													<option value="560">8</option>
													<option value="630">9</option>
													<option value="700">10</option>
												</select>
											</div>
										</div>
										<!-- Select Basic -->
								  		<div class="control-group">
											<label for="Pullovers" class="control-label">Pullovers</label>
											<input id="pullovers" name="Pullovers" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
											<div class="controls">
												<select onchange="calculateTotal()" class="input-medium" name="Pullovers" id="Pullovers">

									   <option value="0">0</option>

										<option value="70">1</option>

										<option value="140">2</option>

										<option value="210">3</option>

										<option value="280">4</option>

										<option value="350">5</option>

										<option value="420">6</option>

										<option value="490">7</option>

										<option value="560">8</option>

										<option value="630">9</option>

										<option value="700">10</option>

									  </select>

									</div>

								  </div>

								  

								  <!-- Select Basic -->

								  <div class="control-group">

									<label for="Tie" class="control-label">Tie</label>
									<input id="tie" name="Tie" type="number" 
									onchange="calculateTotal()"	onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="Tie" id="Tie">

										<option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

									  </select>

									</div>

								  </div>

								  <div class="control-group">

									<label for="Appron" class="control-label">Appron</label>
									<input id="appron" name="Appron" type="number" 
										onchange="calculateTotal()" 	onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="Appron" id="Appron">

										<option value="0">0</option>

										<option value="20">1</option>

										<option value="40">2</option>

										<option value="60">3</option>

										<option value="80">4</option>

										<option value="100">5</option>

										<option value="120">6</option>

										<option value="140">7</option>

										<option value="160">8</option>

										<option value="180">9</option>

										<option value="200">10</option>

									  </select>

									</div>

								  </div>
									<div class="control-group">

									<label for="Kurta" class="control-label">Kurta</label>
									<input id="kurta" name="Kurta" type="number" 
									onchange="calculateTotal()" 		onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="Kurta" id="Kurta">

										<option value="0">0</option>

										<option value="15">1</option>

										<option value="30">2</option>

										<option value="45">3</option>

										<option value="60">4</option>

										<option value="75">5</option>

										<option value="90">6</option>

										<option value="105">7</option>

										<option value="120">8</option>

										<option value="135">9</option>

										<option value="150">10</option>

									  </select>

									</div>

								  </div>


								  <!-- Select Basic -->

								  <div class="control-group">

									<label for="Hat" class="control-label">Hat</label>
									<input id="hat" name="Hat" type="number" 
									onchange="calculateTotal()" 	onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="Hat" id="Hat">

										<option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

									  </select>

									</div>

								  </div>

								  </div>

								  <div class="span3">

								  <!-- Select Basic -->

								  <div class="control-group">

									<label for="Windbreaker" class="control-label">Windbreaker</label>
									<input id="windbreaker" name="Windbreaker" type="number" 
									onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="Windbreaker" id="Windbreaker">

										<option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

									  </select>

									</div>

								  </div>

								  

								  <!-- Select Basic -->

								  <div class="control-group">

									<label for="WinterCoat" class="control-label">Winter Coat</label>
									<input id="wintercoat" name="Winteroat" type="number" 
									onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="WinterCoat" id="WinterCoat">

										<option value="0">0</option>

										<option value="100">1</option>

										<option value="200">2</option>

										<option value="300">3</option>

										<option value="400">4</option>

										<option value="500">5</option>

										<option value="600">6</option>

										<option value="700">7</option>

										<option value="800">8</option>

										<option value="900">9</option>

										<option value="1000">10</option>

									  </select>

									</div>

								  </div>

								  

								  <!-- Select Basic -->

								  <div class="control-group">

									<label for="PunjabiSuit" class="control-label">Punjabi Suit</label>
									<input id="punjabisuit" name="Punjabiuit" type="number" 
									onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="PunjabiSuit" id="PunjabiSuit">

										<option value="0">0</option>

										<option value="20">1</option>

										<option value="40">2</option>

										<option value="60">3</option>

										<option value="80">4</option>

										<option value="100">5</option>

										<option value="120">6</option>

										<option value="140">7</option>

										<option value="160">8</option>

										<option value="180">9</option>

										<option value="200">10</option>

									  </select>

									</div>

								  </div>

								  

								  <!-- Select Basic -->

								  <div class="control-group">

									<label for="Jeans" class="control-label">Jeans</label>
									<input id="jeans" name="Jeans" type="number" 
											onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="Jeans" id="Jeans">

										<option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

									  </select>

									</div>

								  </div>

								  

								  <!-- Select Basic -->

								  <div class="control-group">

									<label for="Capries" class="control-label">Capries</label>
									<input id="capries" name="Capries" type="number" 
											onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="Capries" id="Capries">

										<option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

									  </select>

									</div>

								  </div>

								  

								  <!-- Select Basic -->

								  <div class="control-group">

									<label for="Shirts" class="control-label">Shirts</label>
									<input id="shirts" name="Shirts" type="number" 
											onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="Shirts" id="Shirts">

										<option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

									  </select>

									</div>

								  </div>

								  
									<div class="control-group">

									<label for="Socks" class="control-label">Socks</label>
									<input id="socks" name="Socks" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="Socks" id="Socks">

										<option value="0">0</option>

										<option value="8">1</option>

										<option value="16">2</option>

										<option value="24">3</option>

										<option value="32">4</option>

										<option value="40">5</option>

										<option value="48">6</option>

										<option value="56">7</option>

										<option value="64">8</option>

										<option value="72">9</option>

										<option value="80">10</option>

									  </select>

									</div>

								  </div>

									<div class="control-group">

									<label for="Underwear" class="control-label">Underwear</label>
									<input id="underwear" name="Underwear" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="Underwear" id="Underwear">

										<option value="0">0</option>

										<option value="9">1</option>

										<option value="18">2</option>

										<option value="27">3</option>

										<option value="36">4</option>

										<option value="45">5</option>

										<option value="54">6</option>

										<option value="63">7</option>

										<option value="72">8</option>

										<option value="81">9</option>

										<option value="90">10</option>

									  </select>

									</div>

								  </div>

								<div class="control-group">

									<label for="InnerWear" class="control-label">InnerWear</label>
									<input id="innerwear" name="InnerWear" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="InnerWear" id="InnerWear">

										<option value="0">0</option>

										<option value="8">1</option>

										<option value="16">2</option>

										<option value="24">3</option>

										<option value="32">4</option>

										<option value="40">5</option>

										<option value="48">6</option>

										<option value="56">7</option>

										<option value="64">8</option>

										<option value="72">9</option>

										<option value="80">10</option>
									  </select>

									</div>

								  </div>
								  <!-- Select Basic -->

								  <div class="control-group">

									<label for="T-Shirts" class="control-label">T-Shirts</label>
									<input id="t-shirts" name="T-Shirts" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									<div class="controls">

									  <select onchange="calculateTotal()" class="input-medium" name="TShirts" id="TShirts">

										<option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

									  </select>

									</div>

								  </div>

								  </div>

								  </fieldset>

								  

						</div>

						<div id="tab2" class="tab-pane fade in">

							

									<fieldset>

									

									<!-- Form Name -->

									<legend style="color:#09F">Women's Wear</legend>



								  <div class="span3">

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Pants" class="control-label">Pants</label>
									  <input id="pants" name="Pants" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Pants" id="Pants">

										  <option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

										</select>

									  </div>

									</div>

									
 <!-- Select Basic -->

									<div class="control-group">

									  <label for="Sari" class="control-label">Saree</label>
									  <input id="sari" name="Sari" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Sari" id="Sari">

										 <option value="0">0</option>

										<option value="80">1</option>

										<option value="160">2</option>

										<option value="240">3</option>

										<option value="320">4</option>

										<option value="400">5</option>

										<option value="480">6</option>

										<option value="560">7</option>

										<option value="640">8</option>

										<option value="720">9</option>

										<option value="800">10</option>


										</select>

									  </div>

									</div>
									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Blouse" class="control-label">Blouse</label>
									  <input id="blouse" name="Blouse" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Blouse" id="Blouse">

										 <option value="0">0</option>

										<option value="7">1</option>

										  <option value="14">2</option>

										  <option value="21">3</option>

										  <option value="28">4</option>

										  <option value="35">5</option>

										  <option value="42">6</option>

										  <option value="49">7</option>

										  <option value="56">8</option>

										  <option value="63">9</option>

										  <option value="70">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Skirt" class="control-label">Skirt</label>
									  <input id="skirt" name="Skirt" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Skirt" id="Skirt">

										 <option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

										</select>

									  </div>

									</div>

									<div class="control-group">

									  <label for="Slacks" class="control-label">Slacks</label>
									  <input id="slacks" name="Slacks" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Slacks" id="Slacks">

										 <option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

										</select>

									  </div>

									</div>

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesCoat" class="control-label">Coat</label>
									  <input id="ladiescoat" name="LadiesCoat" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="LadiesCoat" id="LadiesCoat">

										<option value="0">0</option>

										<option value="80">1</option>

										<option value="160">2</option>

										<option value="240">3</option>

										<option value="320">4</option>

										<option value="400">5</option>

										<option value="480">6</option>

										<option value="560">7</option>

										<option value="640">8</option>

										<option value="720">9</option>

										<option value="800">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesJackets" class="control-label">Jackets</label>
									  <input id="ladiesjackets" name="LadiesJackets" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="LadiesJackets" id="LadiesJackets">

										  <option value="0">0</option>

										<option value="80">1</option>

										<option value="160">2</option>

										<option value="240">3</option>

										<option value="320">4</option>

										<option value="400">5</option>

										<option value="480">6</option>

										<option value="560">7</option>

										<option value="640">8</option>

										<option value="720">9</option>

										<option value="800">10</option>

										</select>

									  </div>

									</div>





									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesSweater" class="control-label">Sweater</label>
									  <input id="ladiessweater" name="LadiesSweater" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="LadiesSweater" id="LadiesSweater">

										 <option value="0">0</option>

										<option value="70">1</option>

										<option value="140">2</option>

										<option value="210">3</option>

										<option value="280">4</option>

										<option value="350">5</option>

										<option value="420">6</option>

										<option value="490">7</option>

										<option value="560">8</option>

										<option value="630">9</option>

										<option value="700">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesPullover" class="control-label">Pullover</label>
									  <input id="ladiespullover" name="LadiesPullover" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="LadiesPullover" id="LadiesPullover">

										  <option value="0">0</option>

										<option value="70">1</option>

										<option value="140">2</option>

										<option value="210">3</option>

										<option value="280">4</option>

										<option value="350">5</option>

										<option value="420">6</option>

										<option value="490">7</option>

										<option value="560">8</option>

										<option value="630">9</option>

										<option value="700">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesTie" class="control-label">Tie</label>
									  <input id="ladiestie" name="LadiesTie" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="LadiesTie" id="LadiesTie">

										  <option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesHat" class="control-label">Hat</label>
									  <input id="ladieshat" name="LadiesHat" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="LadiesHat" id="LadiesHat">

										  <option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

										</select>

									  </div>

									</div>

									</div>





								   <div class="span3">

									

								   <!-- Select Basic -->

									<div class="control-group">

									  <label for="Scarf" class="control-label">Scarf</label>
									  <input id="scarf" name="Scarf" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Scarf" id="Scarf">

										 <option value="0">0</option>

										<option value="7">1</option>

										  <option value="14">2</option>

										  <option value="21">3</option>

										  <option value="28">4</option>

										  <option value="35">5</option>

										  <option value="42">6</option>

										  <option value="49">7</option>

										  <option value="56">8</option>

										  <option value="63">9</option>

										  <option value="70">10</option>

										</select>

									  </div>

									</div>



								   <!-- Select Basic -->

									<div class="control-group">

									  <label for="Shawl" class="control-label">Shawl</label>
									  <input id="shawl" name="Shwal" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Shawl" id="Shawl">

										  <option value="0">0</option>

										<option value="7">1</option>

										  <option value="14">2</option>

										  <option value="21">3</option>

										  <option value="28">4</option>

										  <option value="35">5</option>

										  <option value="42">6</option>

										  <option value="49">7</option>

										  <option value="56">8</option>

										  <option value="63">9</option>

										  <option value="70">10</option>

										</select>

									  </div>

									</div>



								   <!-- Select Basic -->

									<div class="control-group">

									  <label for="SalwarSuit" class="control-label">Salwar Suit</label>
									  <input id="salwarsuit" name="SalwarSuit" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="SalwarSuit" id="SalwarSuit">

										  <option value="0">0</option>

										<option value="40">1</option>

										  <option value="80">2</option>

										  <option value="120">3</option>

										  <option value="160">4</option>

										  <option value="200">5</option>

										  <option value="240">6</option>

										  <option value="280">7</option>

										  <option value="320">8</option>

										  <option value="360">9</option>

										  <option value="400">10</option>

										</select>

									  </div>

									</div>

									<div class="control-group">

									  <label for="Dress" class="control-label">Dress</label>
									  <input id="dress" name="Dress" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Dress" id="Dress">

										   <option value="0">0</option>

										<option value="40">1</option>

										  <option value="80">2</option>

										  <option value="120">3</option>

										  <option value="160">4</option>

										  <option value="200">5</option>

										  <option value="240">6</option>

										  <option value="280">7</option>

										  <option value="320">8</option>

										  <option value="360">9</option>

										  <option value="400">10</option>

										</select>

									  </div>

									</div>

								   <!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesWindbreaker" class="control-label">Windbreaker</label>
									  <input id="ladieswindbreaker" name="LadiesWindbreaker" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="LadiesWindbreaker" id="LadiesWindbreaker">

										  <option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

										</select>

									  </div>

									</div>



									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesWinterCoat" class="control-label">Winter Coat</label>
									  <input id="ladieswintercoat" name="LadiesWinterCoat" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="LadiesWinterCoat" id="LadiesWinterCoat">

											<option value="0">0</option>

										<option value="80">1</option>

										<option value="160">2</option>

										<option value="240">3</option>

										<option value="320">4</option>

										<option value="400">5</option>

										<option value="480">6</option>

										<option value="560">7</option>

										<option value="640">8</option>

										<option value="720">9</option>

										<option value="800">10</option>

										</select>

									  </div>

									</div>

									

								   

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesJeans" class="control-label">Jeans</label>
									  <input id="ladiesjeans" name="LadiesJeans" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="LadiesJeans" id="LadiesJeans">

										 <option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesCaprie" class="control-label">Caprie</label>
									  <input id="ladiescaprie" name="LadiesCaprie" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="LadiesCaprie" id="LadiesCaprie">

										 <option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesShirts" class="control-label">Shirts</label>
									  <input id="ladiesshirts" name="LadiesShirts" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="LadiesShirts" id="LadiesShirts">

										  <option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesT-Shirts" class="control-label">T-Shirts</label>
									  <input id="ladiest-shirts" name="LadiesT-Shirts" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="LadiesTShirts" id="LadiesTShirts">

										 <option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

										</select>

									  </div>

									</div>

								   </div> 

									</fieldset>

														   

						</div>

						<div id="tab3" class="tab-pane fade in">

							

									<fieldset>

									

									<!-- Form Name -->

									<legend style="color:#09F">Household</legend>

									

									

								  <div class="span3">                                  

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Bedsheet" class="control-label">Bedsheet</label>
									  <input id="bedsheet" name="Bedsheet" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Bedsheet" id="Bedsheet">

										  <option value="0">0</option>

										<option value="50">1</option>

										  <option value="100">2</option>

										  <option value="150">3</option>

										  <option value="200">4</option>

										  <option value="250">5</option>

										  <option value="300">6</option>

										  <option value="350">7</option>

										  <option value="400">8</option>

										  <option value="450">9</option>

										  <option value="500">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="PillowCover" class="control-label">Pillow Cover</label>
									  <input id="pillowcover" name="PillowCover" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="PillowCover" id="PillowCover">

										  <option value="0">0</option>

										<option value="6">1</option>

										  <option value="12">2</option>

										  <option value="18">3</option>

										  <option value="24">4</option>

										  <option value="39">5</option>

										  <option value="36">6</option>

										  <option value="42">7</option>

										  <option value="48">8</option>

										  <option value="54">9</option>

										  <option value="60">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Towel" class="control-label">Towel</label>
									  <input id="towel" name="Towel" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Towel" id="Towel">

										 <option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Curtain" class="control-label">Curtain</label>
									  <input id="curtain" name="Curtain" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Curtain" id="Curtain">

										 <option value="0">0</option>

										<option value="15">1</option>

										<option value="30">2</option>

										<option value="45">3</option>

										<option value="60">4</option>

										<option value="75">5</option>

										<option value="90">6</option>

										<option value="105">7</option>

										<option value="120">8</option>

										<option value="135">9</option>

										<option value="150">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="TableCloth" class="control-label">Table Cloth</label>
									  <input id="tablecloth" name="TableCloth" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="TableCloth" id="TableCloth">

										 <option value="0">0</option>

										<option value="10">1</option>

										<option value="20">2</option>

										<option value="30">3</option>

										<option value="40">4</option>

										<option value="50">5</option>

										<option value="60">6</option>

										<option value="70">7</option>

										<option value="80">8</option>

										<option value="90">9</option>

										<option value="100">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Comforter" class="control-label">Comforter</label>
									  <input id="comforter" name="Comforter" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Comforter" id="Comforter">

										  <option value="0">0</option>

										<option value="30">1</option>

										  <option value="60">2</option>

										  <option value="90">3</option>

										  <option value="120">4</option>

										  <option value="150">5</option>

										  <option value="180">6</option>

										  <option value="210">7</option>

										  <option value="240">8</option>

										  <option value="270">9</option>

										  <option value="300">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Quilt" class="control-label">Quilt</label>
									  <input id="quilt" name="Quilt" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Quilt" id="Quilt">

										  <option value="0">0</option>

										<option value="30">1</option>

										  <option value="60">2</option>

										  <option value="90">3</option>

										  <option value="120">4</option>

										  <option value="150">5</option>

										  <option value="180">6</option>

										  <option value="210">7</option>

										  <option value="240">8</option>

										  <option value="270">9</option>

										  <option value="300">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Blanket" class="control-label">Blanket</label>
									  <input id="blanket" name="Blanket" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Blanket" id="Blanket">
										<option value="0">0</option>
										<option value="200">1</option>
										  <option value="400">2</option>
										  <option value="600">3</option>
										  <option value="800">4</option>
										  <option value="1000">5</option>
										  <option value="1200">6</option>
										  <option value="1400">7</option>
										  <option value="1600">8</option>
										  <option value="1800">9</option>
										  <option value="2000">10</option>

										</select>

									  </div>

									</div>

								   </div>

								   

								  <div class="span3">

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="CushionCover" class="control-label">Cushion Cover</label>
									  <input id="cushioncover" name="CushionCover" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="CushionCover" id="CushionCover">

										  <option value="0">0</option>

										<option value="6">1</option>

										  <option value="12">2</option>

										  <option value="18">3</option>

										  <option value="24">4</option>

										  <option value="39">5</option>

										  <option value="36">6</option>

										  <option value="42">7</option>

										  <option value="48">8</option>

										  <option value="54">9</option>

										  <option value="60">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="MattressProtector" class="control-label">Mattress Protector</label>
									  <input id="matterssprotector" name="MattressProtector" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="MattressProtector" id="MattressProtector">

										  <option value="0">0</option>

										<option value="35">1</option>

										  <option value="70">2</option>

										  <option value="105">3</option>

										  <option value="140">4</option>

										  <option value="175">5</option>

										  <option value="210">6</option>

										  <option value="245">7</option>

										  <option value="280">8</option>

										  <option value="315">9</option>

										  <option value="350">10</option>

										</select>

									  </div>

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Sofacover" class="control-label">Sofa Cover</label>
									  <input id="sofacover" name="SofaCover" type="number" 
											onchange="calculateTotal()" onkeyup="return myFun()" onkeypress="return validMy(event)"/>
									
									  <div class="controls">

										<select onchange="calculateTotal()" class="input-medium" name="Sofacover" id="Sofacover">

										  <option value="0">0</option>

										<option value="150">1</option>

										  <option value="300">2</option>

										  <option value="450">3</option>

										  <option value="600">4</option>

										  <option value="750">5</option>

										  <option value="900">6</option>

										  <option value="1050">7</option>

										  <option value="1200">8</option>

										  <option value="1350">9</option>

										  <option value="1500">10</option>

										</select>

									  </div>

									</div>



									</div>

									</fieldset>

														 

						</div>

					</div>

</div>

 

				  <div class="info-block">

				  <div class="info-text">

						 <div id="tp">&nbsp;</div>

				  

<input type="submit" onclick="return findtotal()" name="Submit" value="Checkout" class="button button-small">

				  </div>

				  </div>

				</div>
			</div>

		<!--endddd-->

		<!--</div>-->
</form>


</div>

</body>
</html>
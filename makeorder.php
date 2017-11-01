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
		$mpants=$_POST['Formalpants'];
		$mpants = stripcslashes($mpants);
		$trouser=$_POST['Trousers'];
		$trouser = stripcslashes($trouser);
		$jacket=$_POST['Jackets'];
		$jacket = stripcslashes($jacket);
		$coat=$_POST['Coats'];
		$coat = stripcslashes($coat);
		$sweater=$_POST['Sweaters'];
		$sweater = stripcslashes($sweater);
		$pullover=$_POST['Pullovers'];
		$pullover = stripcslashes($pullover);
		$tie=$_POST['Tie'];
		$tie = stripcslashes($tie);
		$hat=$_POST['Hat'];
		$hat = stripcslashes($hat);
		$windbreaker=$_POST['Windbreaker'];
		$windbreaker = stripcslashes($windbreaker);
		$wintercoat=$_POST['WinterCoat'];
		$wintercoat = stripcslashes($wintercoat);
		$punjabisuit=$_POST['PunjabiSuit'];
		$punjabisuit = stripcslashes($punjabisuit);
		$jeans=$_POST['Jeans'];
		$jeans = stripcslashes($jeans);
		$caprie=$_POST['Capries'];
		$caprie = stripcslashes($caprie);
		$shirt=$_POST['Shirts'];
		$shirt = stripcslashes($shirt);
		$socks=$_POST['Socks'];
		$socks = stripcslashes($socks);
		$innerwear=$_POST['InnerWear'];
		$innerwear = stripcslashes($innerwear);
		$underwear=$_POST['Underwear'];
		$underwear = stripcslashes($underwear);
		$appron=$_POST['Appron'];
		$appron = stripcslashes($appron);
		$kurta=$_POST['Kurta'];
		$kurta = stripcslashes($kurta);
		$tshirt=$_POST['TShirts'];
		$tshirt = stripcslashes($tshirt);
		$pant=$_POST['Pants'];
		$pant = stripcslashes($pant);
		$sari=$_POST['Sari'];
		$sari = stripcslashes($sari);
		$blouse=$_POST['Blouse'];
		$blouse = stripcslashes($blouse);
		$skirt=$_POST['Skirt'];
		$skirt = stripcslashes($skirt);
		$slack=$_POST['Slacks'];
		$slack = stripcslashes($slack);
		$ladycoat=$_POST['LadiesCoat'];
		$ladycoat = stripcslashes($ladycoat);
		$ladyjacket=$_POST['LadiesJackets'];
		$ladyjacket = stripcslashes($ladyjacket);
		$ladysweater=$_POST['LadiesSweater'];
		$ladysweater = stripcslashes($ladysweater);
		$ladypullover=$_POST['LadiesPullover'];
		$ladypullover = stripcslashes($ladypullover);
		$ladytie=$_POST['LadiesTie'];
		$ladytie = stripcslashes($ladytie);
		$ladyhat=$_POST['LadiesHat'];
		$ladyhat = stripcslashes($ladyhat);
		$scarf=$_POST['Scarf'];
		$scarf = stripcslashes($scarf);
		$shawl=$_POST['Shwal'];
		$shawl = stripcslashes($shawl);
		$salwarsuit=$_POST['SalwarSuit'];
		$salwarsuit = stripcslashes($salwarsuit);
		$dress=$_POST['Dress'];
		$dress = stripcslashes($dress);
		$ladywindbreaker=$_POST['LadiesWindbreaker'];
		$ladywindbreaker = stripcslashes($ladywindbreaker);
		$ladywintercoat=$_POST['LadiesWinterCoat'];
		$ladywintercoat = stripcslashes($ladywintercoat);
		$ladyjeans=$_POST['LadiesJeans'];
		$ladyjeans = stripcslashes($ladyjeans);
		$ladycaprie=$_POST['LadiesCaprie'];
		$ladycaprie = stripcslashes($ladycaprie);
		$ladyshirt=$_POST['LadiesShirts'];
		$ladyshirt = stripcslashes($ladyshirt);
		$ladytshirt=$_POST['LadiesTShirts'];
		$ladytshirt = stripcslashes($ladytshirt);
		$bedsheet=$_POST['Bedsheet'];
		$bedsheet = stripcslashes($bedsheet);
		$pillowcover=$_POST['PillowCover'];
		$pillowcover = stripcslashes($pillowcover);
		$towel=$_POST['Towel'];
		$towel = stripcslashes($towel);
		$curtain=$_POST['Curtain'];
		$curtain = stripcslashes($curtain);
		$tablecloth=$_POST['TableCloth'];
		$tablecloth = stripcslashes($tablecloth);
		$conforter=$_POST['Comforter'];
		$comforter = stripcslashes($comforter);
		$quilt=$_POST['Quilt'];
		$quilt = stripcslashes($quilt);
		$blanket=$_POST['Blanket'];
		$blanket = stripcslashes($blanket);
		$cushioncover=$_POST['CushionCover'];
		$cushioncover = stripcslashes($cushioncover);
		$mattressprotector=$_POST['MattressProtector'];
		$mattressprotector = stripcslashes($mattressprotector);
		$sofacover=$_POST['Sofacover'];
		$sofacover = stripcslashes($sofacover);

		//update to db acc to userID and generate orderID and go to succesfully rdered page..
		$complete_array = array($mpants,
		$trouser,
		$jacket,
		$coat,
		$sweater,
		$pullover,
		$tie,
		$hat,
		$windbreaker,
		$wintercoat,
		$punjabisuit,
		$jeans,
		$caprie,
		$shirt,
		$socks,
		$innerwear,
		$underwear,
		$appron,
		$kurta,
		$tshirt,
		$pant,
		$sari,
		$blouse,
		$skirt,
		$slack,
		$ladycoat,
		$ladyjacket,
		$ladysweater,
		$ladypullover,
		$ladytie,
		$ladyhat,
		$scarf,
		$shawl,
		$salwarsuit,
		$dress,
		$ladywindbreaker,
		$ladywintercoat,
		$ladyjeans,
		$ladycaprie,
		$ladyshirt,
		$ladytshirt,
		$bedsheet,
		$pillowcover,
		$towel,
		$curtain,
		$tablecloth,
		$conforter,
		$quilt,
		$blanket,
		$cushioncover,
		$mattressprotector,
		$sofacover);
		$_SESSION['comp_arr'] = $complete_array;
		//print_r($complete_array);
		$login_user->redirect("success.php");
		exit();
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
					<a href="profile.php">Home</a>
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
			<!--<input type='hidden' name='input_name' value="<?php //echo htmlentities(base64_encode(serialize($complete_array))); ?>" /> ->
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
											<label for="FormalPants" class="control-label">Formal Pants&nbsp;&nbsp;:&nbsp;&nbsp;</label>
											<input id="Formalpants" name="Formalpants" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
								  		</div>
										<!-- Select Basic -->
										<div class="control-group">
										get this indentation shit fixed here..
										<label for="Trousers" class="control-label">Trousers
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</label>
											<input id="Trousers" name="Trousers" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
										</div>
										<!-- Select Basic -->
										<div class="control-group">
											<label for="Jackets" class="control-label">Jackets&nbsp;&nbsp;:&nbsp;&nbsp;</label>
											<input id="Jackets" name="Jackets" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
										</div>
										<!-- Select Basic -->
										<div class="control-group">
											<label for="Coats" class="control-label">Coats&nbsp;&nbsp;:&nbsp;&nbsp;</label>
											<input id="Coats" name="Coats" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
										</div>
										<!-- Select Basic -->
										<div class="control-group">
											<label for="Sweaters" class="control-label">Sweaters&nbsp;&nbsp;:&nbsp;&nbsp;</label>
											<input id="Sweaters" name="Sweaters" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
										</div>
										<!-- Select Basic -->
								  		<div class="control-group">
											<label for="Pullovers" class="control-label">Pullovers&nbsp;&nbsp;:&nbsp;&nbsp;</label>
											<input id="Pullovers" name="Pullovers" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
										  </div>
								  <!-- Select Basic -->
								  <div class="control-group">

									<label for="Tie" class="control-label">Tie&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="Tie" name="Tie" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

								  </div>

								  <div class="control-group">

									<label for="Appron" class="control-label">Appron&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="Appron" name="Appron" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
								  </div>
									<div class="control-group">

									<label for="Kurta" class="control-label">Kurta&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="Kurta" name="Kurta" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
								  </div>
								  <!-- Select Basic -->
								  <div class="control-group">

									<label for="Hat" class="control-label">Hat&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="Hat" name="Hat" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

								  </div>

								  </div>

								  <div class="span3">

								  <!-- Select Basic -->

								  <div class="control-group">

									<label for="Windbreaker" class="control-label">Windbreaker&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="Windbreaker" name="Windbreaker" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
								  </div>
								  <!-- Select Basic -->
								  <div class="control-group">
									<label for="WinterCoat" class="control-label">Winter Coat&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="WinterCoat" name="WinterCoat" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
								  </div>
								  <!-- Select Basic -->
								  <div class="control-group">

									<label for="PunjabiSuit" class="control-label">Punjabi Suit&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="PunjabiSuit" name="PunjabiSuit" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
								  </div>
								  <!-- Select Basic -->
								  <div class="control-group">
									<label for="Jeans" class="control-label">Jeans&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="Jeans" name="Jeans" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
								  </div>
								  <!-- Select Basic -->
								  <div class="control-group">
									<label for="Capries" class="control-label">Capries&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="Capries" name="Capries" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
								  </div>
								  <!-- Select Basic -->
								  <div class="control-group">
									<label for="Shirts" class="control-label">Shirts&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="Shirts" name="Shirts" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
								  </div>

								  
									<div class="control-group">

									<label for="Socks" class="control-label">Socks&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="Socks" name="Socks" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
								  </div>
									<div class="control-group">

									<label for="Underwear" class="control-label">Underwear&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="Underwear" name="Underwear" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

								  </div>

								<div class="control-group">

									<label for="InnerWear" class="control-label">InnerWear&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="InnerWear" name="InnerWear" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

								  </div>
								  <!-- Select Basic -->

								  <div class="control-group">

									<label for="T-Shirts" class="control-label">T-Shirts&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									<input id="TShirts" name="TShirts" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
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

									  <label for="Pants" class="control-label">Pants&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Pants" name="Pants" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Sari" class="control-label">Saree&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Sari" name="Sari" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Blouse" class="control-label">Blouse&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Blouse" name="Blouse" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Skirt" class="control-label">Skirt&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Skirt" name="Skirt" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
									<div class="control-group">

									  <label for="Slacks" class="control-label">Slacks&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Slacks" name="Slacks" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
									<!-- Select Basic -->
									<div class="control-group">

									  <label for="LadiesCoat" class="control-label">Coat&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="LadiesCoat" name="LadiesCoat" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
									<!-- Select Basic -->
									<div class="control-group">

									  <label for="LadiesJackets" class="control-label">Jackets&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="LadiesJackets" name="LadiesJackets" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
									<!-- Select Basic -->
									<div class="control-group">
									  <label for="LadiesSweater" class="control-label">Sweater&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="LadiesSweater" name="LadiesSweater" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
									<!-- Select Basic -->
									<div class="control-group">

									  <label for="LadiesPullover" class="control-label">Pullover&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="LadiesPullover" name="LadiesPullover" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
									<!-- Select Basic -->
									<div class="control-group">

									  <label for="LadiesTie" class="control-label">Tie&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="LadiesTie" name="LadiesTie" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
									<!-- Select Basic -->
									<div class="control-group">

									  <label for="LadiesHat" class="control-label">Hat&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="LadiesHat" name="LadiesHat" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									</div>





								   <div class="span3">

									

								   <!-- Select Basic -->

									<div class="control-group">

									  <label for="Scarf" class="control-label">Scarf&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Scarf" name="Scarf" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
								   <!-- Select Basic -->

									<div class="control-group">

									  <label for="Shawl" class="control-label">Shawl&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Shawl" name="Shwal" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
								   <!-- Select Basic -->

									<div class="control-group">

									  <label for="SalwarSuit" class="control-label">Salwar Suit&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="SalwarSuit" name="SalwarSuit" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>

									<div class="control-group">

									  <label for="Dress" class="control-label">Dress&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Dress" name="Dress" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

								   <!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesWindbreaker" class="control-label">Windbreaker&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="LadiesWindbreaker" name="LadiesWindbreaker" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
									<!-- Select Basic -->
									<div class="control-group">

									  <label for="LadiesWinterCoat" class="control-label">Winter Coat&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="LadiesWinterCoat" name="LadiesWinterCoat" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									

								   

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesJeans" class="control-label">Jeans&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="LadiesJeans" name="LadiesJeans" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesCaprie" class="control-label">Caprie&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="LadiesCaprie" name="LadiesCaprie" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesShirts" class="control-label">Shirts&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="LadiesShirts" name="LadiesShirts" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="LadiesT-Shirts" class="control-label">T-Shirts&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="LadiesTShirts" name="LadiesTShirts" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
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

									  <label for="Bedsheet" class="control-label">Bedsheet&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Bedsheet" name="Bedsheet" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="PillowCover" class="control-label">Pillow Cover&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="PillowCover" name="PillowCover" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Towel" class="control-label">Towel&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Towel" name="Towel" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Curtain" class="control-label">Curtain&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Curtain" name="Curtain" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="TableCloth" class="control-label">Table Cloth&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="TableCloth" name="TableCloth" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Comforter" class="control-label">Comforter&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Comforter" name="Comforter" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Quilt" class="control-label">Quilt&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Quilt" name="Quilt" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Blanket" class="control-label">Blanket&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Blanket" name="Blanket" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />
									</div>
								   </div>
								  <div class="span3">

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="CushionCover" class="control-label">Cushion Cover&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="CushionCover" name="CushionCover" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="MattressProtector" class="control-label">Mattress Protector&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="MattressProtector" name="MattressProtector" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

									</div>

									

									<!-- Select Basic -->

									<div class="control-group">

									  <label for="Sofacover" class="control-label">Sofa Cover&nbsp;&nbsp;:&nbsp;&nbsp;</label>
									  <input id="Sofacover" name="Sofacover" type="number" min="0" max="999" value="0" onkeyup="calculateTotal()" />

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














<!--

<?php
/*
session_start();
include('class.user.php');
$login_user = new USER();
$you = 'Guest';
if($login_user->is_logged_in()!=""){
	$you=$login_user->getUserName();
	//select * order-details where ordereID='this.orderID' and is_active='Y';
	//varorderID = res['orderID'];
	//fpants = (int)res['fpants']
	//...........on n on................
	//in a div show details for all pending orders.
	$title = 'Dhobighaat | View Order';
	$userID = '55000000';
	//$result = [];
	//$row;
	$stmt = $login_user->getOrder($userID);
	//$result = print_r($result,true);
	$orderID=[];
	$jeans=[];
	$pants=[];
	$pend;
	$cost=[];
	$feedback=[];
	$i=0;
	while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
		$data = $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\n" . $row[3]."\t".$row[4] . "\t".$row[5]."\t".$row[6] ."<br>";
		if($row[4]=='N' || $row[6]==''){
			$orderID[$i]=$row[0];
			$jeans[$i]=$row[2];
			$pants[$i]=$row[3];
			$pend=$row[4];
			$cost[$i]=$row[5];
			$feedback[$i]=$row[6];
		}
		/*
		if($pend=='Y'){//cant take fedback have to make order not pending...........
			//echo $data;
			$solution.='
			<tr align="center" bgcolor="gray">
			<td width="18%">
				<?php echo $row[0]; ?>
			</td>
			<td width="18%">
				Items...
			</td>
			<td width="18%">
				<?php echo $cost[$i]; ?>
			</td>
			<td width="18%">
				<?php echo $row[6]; ?>
			</td>
			<td width="28%">
				Submit
			</td>
			</tr>';
		}
		else if($feedback[$i]==""){//only we need feedback.........
			//echo 'write feedback for orderID='.$orderID[$i].'<br>';
			$solution.='
			<tr align="center" bgcolor="gray">
			<td width="18%">
				<?php echo $row[0]; ?>
			</td>
			<td width="18%">
				Items...
			</td>
			<td width="18%">
				<?php echo $row[5]; ?>
			</td>
			<td width="18%">
				<?php echo $row[6]; ?>
			</td>
			<td width="28%">
				Submit
			</td>
			</tr>';
		}
		///////////
		$i++;
		
    }
	
}
else{
	$login_user->redirect("index.php");
}
*/
?>









<html>
<head>
<title><?php echo $title;?></title>
<link type="text/css" href="css/master.css" rel="stylesheet">
<link type="text/css" href="css/viewOrderMaster.css" rel="stylesheet">
<script type="text/javascript" src="script/js/master.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
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
	<div class="info2Class"><br><br>
		<h3 id="secondTitle"><u>Order Details</u></h3><br>
		<table id='tableSchema'  width="100%">
		<tr align="center" bgcolor="orange" >
			<td width="18%">
				<div class="orderIDClass" >
					Order ID
				</div>
			</td>
			<td width="18%">
				<div class="itemsClass" >
					Items
				</div>
			</td>
			<td width="18%">
				<div class="costClass" >
					Cost	
				</div>
			</td>
			<td width="18%">
				<div class="feedbackClass" >
					Feedback
				</div>
			</td>
			<td width="28%">
				<div class="submitClass" >
					Submit
				</div>
			</td>
		</tr>
	</table>
	
	<table id="content1" width="100%">
	
	<?php 
	/**
	$ii=0;
	while ($ii < $i){
		$orderID_=$orderID[$i];
		$jeans_=$jeans[$i];
		$pants_=$pants[$i];
		$pend_=$pend[$i];
		$cost_=$cost[$i];
		$feedback_=$feedback[$i];
		if($pend=='Y'){//cant take fedback have to make order not pending...........
			//echo $data;
			<tr align="center" bgcolor="gray">
			<td width="18%">
				<?php echo $row[0]; ?>
			</td>
			<td width="18%">
				<?php echo $pend;?> Items...
			</td>
			<td width="18%">
				<?php echo $row[5]; ?>
			</td>
			<td width="18%">
				<?php echo $row[6]; ?>
			</td>
			<td width="28%">
				Submit
			</td>
			</tr>; 
		}
		else if($feedback[$i]==""){//only we need feedback.........
			//echo 'write feedback for orderID='.$orderID[$i].'<br>';
			
			echo '<tr align="center" bgcolor="gray">
			<td width="18%">
				<?php echo $row[0]; ?>
			</td>
			<td width="18%">
				Items...
			</td>
			<td width="18%">
				<?php echo $row[5]; ?>
			</td>
			<td width="18%">
				<?php echo $row[6]; ?>
			</td>
			<td width="28%">
				Submit
			</td>
			</tr>'; 
		}
		$i++;
		
    }







**/
	?>

	</table>

	</div>
</div>

</body>
</html>


-->
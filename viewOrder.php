<?php
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
	$userID = $_SESSION['user_id'];
	$stmt = $login_user->getOrder($userID);
	$orderID=[];
	$items=[];
	$cloths=array('jeans','pant');
	$pend=[];
	$cost=[];
	$feedback=[];
	$i=0;
	while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
		$data = $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\n" . $row[3]."\t".$row[4] . "\t".$row[5] ."<br>";
		if($row[3]=='Y' || $row[4]==''){
			$orderID[$i]=$row[0];
			$items[$i]=$row[5];
			//for( $k=2; $k<=3; $k++){
			//	if($row[$k]>0){
			//		$items[$i].=$cloths[$k-2].', ';
			//	}
			//}
			$pend[$i]=$row[3];
			$cost[$i]=$row[2];
			$feedback[$i]=$row[4];
			$i++;
		}
    }
	
}
else{
	$login_user->redirect("index.php");
}
?>

<html>
<head>
<title><?php echo $title;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" href="css/master.css" rel="stylesheet">
<link type="text/css" href="css/viewOrderMaster.css" rel="stylesheet">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="script/js/master.js"></script>
<script type="text/javascript" src="script/js/viewOrderJs.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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
		<tr align="center" bgcolor="#ccff33">
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
		<table border=1 id='tableSchema'  width="100%">
		<tr align="center" bgcolor="orange" >
			<td width="12%">
				<div class="orderIDClass" >
					Order ID
				</div>
			</td>
			<td width="30%">
				<div class="itemsClass" >
					Items
				</div>
			</td>
			<td width="12%">
				<div class="costClass" >
					Cost	
				</div>
			</td>
			<td width="28%">
				<div class="feedbackClass" >
					Feedback
				</div>
			</td>
			<td width="18%">
				<div class="submitClass" >
					Submit
				</div>
			</td>
		</tr>
	</table>
	


	<!--<form method="post"> -->
	<table border=1 id='content1' width="100%" >
	<?php $ii=0; while ($ii < $i):;?>
			<tr id="hiii" align="center" bgcolor="#6666ff">
			<td class="tdClass1" width="12%">
				<?php echo $orderID[$ii]; ?>
			</td>
			<td class="tdClass" width="30%">
				<?php echo $items[$ii];?>
			</td>
			<td class="tdClass" width="12%">
				<?php echo $cost[$ii]; ?>
			</td>
			
			<td class="tdClass" id="textareaID" width="28%">
				<?php if($pend[$ii]=='N' and $feedback[$ii]==''){ ?>
					<textarea class="textareaClass" id="textareaID" name="msg" rows="2" vols="1" placeholder="Please write feedback."></textarea>
				<?php } else{ ?>
					<?php echo '----------' ?>
				<?php } ?>
				
			</td>
			<td class="tdClass" id="submitID" width="18%">
				<?php if($pend[$ii]=='N' and $feedback[$ii]==''){ ?>
					<input type="button" id="button1" class="button1"name="button1" value="Submit">
					<!--<input type="submit" id="submit" name="submit" value="Submit" > -->
				<?php } else{ ?>
					<?php echo '-----------<br>|no button|<br>----------' ?>
				<?php } ?>
			</td>

			</tr>; 
		<?php $ii++;?>




<?php endwhile; ?>


	</table>
	
	<!--</form> -->

	</div>
</div>

<script>
$(document).ready(function(){
	$(".button1").click(function(){
		var thisRowsTA = $(this).closest('#hiii').find('textarea');
		var thisRowOID =   $(this).closest('#hiii').find('.tdClass1').text();
		$.ajax({
			url: 'submitFeed.php',
			type: "POST",
			dataType: 'text',
			data: {ordID: thisRowOID, msg: thisRowsTA.val()},
			success: function(data){
				alert(data);
				$(this).closest("#hiii").hide();
				alert("Comment Successfully submitted");
				window.location.href='viewOrder.php';
			}
		});//ajax
	});
});
</script>

</body>
</html>
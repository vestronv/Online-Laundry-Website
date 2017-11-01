<?php
require_once 'dbconfig.php';
class USER{
	private $conn;
	public function __construct(){
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
	}

	public function runQuery($sql){
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function lasdID(){
		$stmt = $this->conn->lastInsertId();
		return $stmt;
	}

	public function checkEmail($email){
		try{
			$stmt = $this->conn->prepare("SELECT * FROM `login` WHERE username=:email_id");
			$stmt->execute(array(":email_id"=>$email));
			$user_row=$stmt->fetch(PDO::FETCH_ASSOC);
			return $user_row;
		}
		catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	public function loginInsert($email, $password){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `login` VALUES('N', :user_mail, :user_pass)");
			$stmt->bindparam(":user_mail",$email);
			$stmt->bindparam(":user_pass",$password);
			$stmt->execute();
			return $stmt;
		}
		catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	public function insertVerification($status, $email, $code){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `verification` VALUES(:user_status,:user_mail, :user_code)");
			$stmt->bindparam(":user_status",$status);
			$stmt->bindparam(":user_mail",$email);
			$stmt->bindparam(":user_code",$code);
			$stmt->execute();
			return $stmt;
		}
		catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	public function register($fname,$lname,$mobile_no,$email,$password,$address){
		try{
			//$password = md5($upass);//no need store md5 paswd.. fuck that shit...
			$user_id = uniqid("DBG");//be UNIQUE MF...
			$stmt = $this->conn->prepare("INSERT INTO `registration_details` VALUES('N',:usr_id, :f_name, :l_name, :mobile_no, :user_mail, :user_pass, :user_add)");
			$stmt->bindparam(":usr_id",$user_id);
			$stmt->bindparam(":f_name",$fname);
			$stmt->bindparam(":l_name",$lname);
			$stmt->bindparam(":mobile_no",$mobile_no);
			$stmt->bindparam(":user_mail",$email);
			$stmt->bindparam(":user_pass",$password);
			$stmt->bindparam(":user_add",$address);
			$stmt->execute();
			return $stmt;
		}
		catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}

	public function getOrder($userID){
		try{
			$stmt = $this->conn->prepare("SELECT * FROM `order_details` WHERE user_id=:usrID");
			$stmt->bindparam(":usrID",$userID);
			$stmt->execute();
			return $stmt;
			//$stmt = $this->conn->prepare("SELECT * FROM `order-details` WHERE userID:usrID ");
			//$stmt->execute(array(":usrID"=>$userID));

		}
		catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}

	public function subFeed($orderID,$msg){
		try{
			$stmt = $this->conn->prepare("UPDATE `order_details` SET `feedback`=:msgg WHERE `order_id`=:ordID");
			$stmt->bindparam(":msgg",$msg);
			$stmt->bindparam(":ordID",$orderID);
	 		$stmt->execute();
			return $stmt;
		}
		catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}

	public function placeOrder($order_id, $user_id, $all_items){
		try{
			//i kill cuz m hungryyyy....-[___]-
			$itemsArr = array();
			$items = '';
			$totCost = 0.00;
			$i=0;
			//yeah i know.... blah.. blah.. blah... fix this...
			$whatItem = array("Formal Pant","Trouser","Jacket",
				"Coats","Sweater","Pullover","Tie","Hat","Wind breaker","Winter Coat","Punjabi Suit","Jeans","Caprie","Shirt","Socks","Innerwear","Underwear",
				"Appron","Kurta","T-Shirt","Pant","Sari","Blouse","Skirt","Slack","Lady Coat","Lady Jacket","Lady Sweater","Lady Pullover",
				"Lady Tie","Lady Hat","Scarf","Shawl","Salwar Suit","Dress","Lady Windbreaker","Lady Winter Coat","Lady Jeans","Lady Caprie",
				"Lady Shirt","Lady T-Shirt","Bedsheet","Pillowcover","Towel","Curtain","Table Cloth","Comforter","Quilt","Blanket","Cushion cover","Mattress Protector","Sofa Cover");
			
			$costOf = array($mpants=10.00,$trouser=10.00,$jacket=80.00,$coat=80.00,$sweater=70.00,$pullover=70.00,$tie=10.00,$hat=10.00,$windbreaker=10.00,$wintercoat=100.00,$punjabisuit=20.00,$jeans=10.00,$caprie=10.00,$shirt=10.00,$socks=8.00,$innerwear=9.00,$underwear=9.00,$appron=20.00,$kurta=15.00,$tshirt=10.00,$pant=10.00,$sari=80.00,$blouse=7.00,$skirt=10.00,$slack=10.00,$ladycoat=80.00,$ladyjacket=80.00,$ladysweater=70.00,$ladypullover=70.00,
				$ladytie=10.00,$ladyhat=10.00,$scarf=7.00,$shawl=7.00,$salwarsuit=40.00,$dress=40.00,$ladywindbreaker=10.00,$ladywintercoat=80.00,$ladyjeans=10.00,$ladycaprie=10.00,$ladyshirt=10.00,$ladytshirt=10.00,$bedsheet=50.00,$pillowcover=7.00,$towel=10.00,$curtain=15.00,$tablecloth=10.00,
				$conforter=30.00,$quilt=30.00,$blanket=200.00,$cushioncover=7.00,$mattressprotector=35.00,$sofacover=150.00);
		
			foreach($all_items as $thisItem){
				if($thisItem > 0.00){
					$totCost += $thisItem * $costOf[$i];
					$items .= $whatItem[$i];
					$items .= ', ';
					array_push($itemsArr, $whatItem[$i]); 
				}
				$i++;
			}
			print_r($items);
			print_r($totCost);
			$stmt = $this->conn->prepare("INSERT INTO `order_details` VALUES(:order_id, :user_id, :cost, 'Y', '', :items)");
			//$stmt = $this->conn->prepare("INSERT INTO `order-details` VALUES(:order_id, :user_id, 1,1,'Y',:cost,:items)");
			$stmt->bindparam(":order_id",$order_id);
			$stmt->bindparam(":user_id",$user_id);
			$stmt->bindparam(":cost",$totCost);
			$stmt->bindparam(":items",$items);
			$stmt->execute();
			$items_ = implode(",",$itemsArr);
			$stmt = $this->conn->prepare("INSERT INTO `order_deeetails` VALUES(:order_id, :user_id, :cost, 'Y', '', :items)");
			$stmt->bindparam(":order_id",$order_id);
			$stmt->bindparam(":user_id",$user_id);
			$stmt->bindparam(":cost",$totCost);
			$stmt->bindparam(":items",$items_);
			$stmt->execute();
		}
		catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}

	public function login($email,$upass){
		try{
			$stmt = $this->conn->prepare("SELECT * FROM `registration_details` WHERE email=:email_id LIMIT 1");
			$stmt->execute(array(":email_id"=>$email));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1){
				if($userRow['is_active']=="Y"){
					//if($userRow['password']==md5($upass)){
					if($userRow['password']==($upass)){
						$_SESSION['userSession'] = $userRow['user_id'];
						$_SESSION['user_name'] = $userRow['fname'];
						$_SESSION['user_id'] = $userRow['user_id'];
						//user id session var here..
						return true;
					}
					else{
						header("Location: index.php?errorr");
						return $userRow;
						exit;
					}
				}
				else{
					header("Location: index.php?inactive");
					exit;
				} 
			}
			else{
				header("Location: index.php?error");
				exit;
			}  
		}
		catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}

	public function is_logged_in(){
		if(isset($_SESSION['userSession'])){
			return true;
		}
	}

	public function getUserName(){
		if($this->is_logged_in()){
			return $_SESSION['user_name'];
		}
		else{
			return 'Guest';
		}
	}

	public function redirect($url){
		header("Location: $url");
	}

	public function logout(){
		session_destroy();
		$_SESSION['userSession'] = false;
	}

	function send_mail($email,$message,$subject){
		require_once('mailer/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "ssl";                 
		$mail->Host       = "smtp.gmail.com";      
		$mail->Port       = 465;
		$mail->AddAddress($email);
		$mail->Username="vimalkaemail@gmail.com";  
		$mail->Password="gobarmatkar7@";
		//$mail->SetFrom('vimalrock@gmail.com','Online Dhobi');
		//$mail->AddReplyTo("vimakrock7@gmail.com","Coding Cage");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
	}
}
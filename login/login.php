<?php
	if(isset($_POST['login'])){
		if (!isset($_POST['token']) && $_POST['token'] !== $_SESSION['token'])  //check if token valid
		{
			// return 405 http status code
			header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
			exit;
		}else{
			$token_age = time() - $_SESSION['token_time'];
			if ($token_age <= 300)
			{
				logindo($_POST["email"], $_POST["password"]);
			}else{
				header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
			}
		}
	}
	if(!isset($_SESSION['attempt'])){
		$_SESSION['attempt'] = 0;
	}

	function logindo($email, $password) {
		try {
			$con = new mysqli('localhost', 'root', '', 'colorviu');
		}
		catch (Exception $e) {
			//printerror($e->getMessage(),$con);
		}
		
		$query = $con->prepare("SELECT * FROM users WHERE Email=?");
		$query->bind_param("s", $email);
		$query->execute();
		$query->store_result();
		$query->bind_result($userid,$fullname,$email,$pw,$gender,$dob);
		$query->fetch();
		
		if (password_verify($password, $pw)){
			// You should session_start first before inserting into $_SESSION
			unset($_SESSION['attempt']);
			$_SESSION["userid"]=$userid; 
			$_SESSION["fullname"]=$fullname; 
			$_SESSION['login'] = true;
			$_SESSION['token'] = password_hash(session_id(), PASSWORD_DEFAULT);
	
			// the path matters when you delete the cookie again, needs to match
			if ($_SESSION['test'] == 'ishihara') {
				header("Location: /tests/ishihara/iend.php");
			} else if ($_SESSION['test'] =='d-15') {
				header("Location: /tests/d-15/dend.php");
			} else {
				header("Location: /index.php");
			}
			
			session_regenerate_id();
		
			mysqli_close($con);
			

		} else{
			$_SESSION['attempt'] += 1;
			//set the time to allow login if third attempt is reach
			if($_SESSION['attempt'] == 3){
				$_SESSION['attempt_again'] = time() + (1*60);
				$_SESSION['message'] = "Login Disabled. Try again in 1 minute.";    
				$_SESSION['msg_type'] = "danger";
			}else{
				$_SESSION['message'] = "Invalid Credentials";    
				$_SESSION['msg_type'] = "danger";
			}
		}
	}
?>
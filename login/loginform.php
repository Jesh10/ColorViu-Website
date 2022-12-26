<html>
<head>
	<title>TP AMC - Login</title>
    <head>
	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/basic.css">
	</head>
	
	<?php
		require "/xampp/htdocs/colorviu/headers/header.php";
		session_start();
		$_SESSION['token'] = md5(uniqid(mt_rand(),true)); //create token and store in SESSION
		$_SESSION['token_time'] = time();
		
		if(isset($_SESSION['attempt_again'])){
			$now = time();
			if($now >= $_SESSION['attempt_again']){
				unset($_SESSION['attempt']);
				unset($_SESSION['attempt_again']);
			}
		}
		
		//set disable if three login attempts has been made
		$disable = '';
		if(isset($_SESSION['attempt']) && $_SESSION['attempt'] >= 3){
			$disable = 'disabled';
		}
	?>
	<?php if (isset($_SESSION['message'])): ?>    
		<div class="alert alert-<?= $_SESSION['msg_type']?>">
			<?php 
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>
	<?php require "login.php"?>

</head>
<body>
<div class="signup-form">
	<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
		<input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?>">
		<h2>ColorViu Account Login</h2>
		<p class="hint-text">Sign up if you do not have an account</p>
		<div class="form-group">
			<input style="height:50px; font-size:18px;" type="text" class="form-control" name="email" placeholder="Email Address" autocomplete="off" <?php echo $disable; ?>>
		</div>
		<div class="form-group">
			<input style="height:50px; font-size:18px; margin-bottom:30px;" type="password" class="form-control" name="password" placeholder="Password" <?php echo $disable; ?>>
		</div>
		<div class="form-group">
			<button style="width:450px; margin-left:20px; font-size:25px;"class="btn btn-success btn-lg btn-block" name="login" <?php echo $disable; ?>>Login</button>
		</div>
	</form>
	<?php
			
		// require_once '/xampp/htdocs/colorviu/facebook/faconfig.php';

		// echo 
		// "	<div class='form-group'>
		// 		<a class='btn btn-primary btn-lg btn-block' style='color: white;' name='facebook' href='$login_url'>Facebook login</a>
		// 	</div>"; 
	?>
	<?php
			
		// require_once '/xampp/htdocs/colorviu/google/goconfig.php';

		// if (!isset($_SESSION['google_token'])){
		// 	echo 
		// 	"	<div class='form-group'>
		// 			<a class='btn btn-danger btn-lg btn-block' style='color: white;' name='google' href='".$client->createAuthUrl()."'>Google login</a>
		// 		</div>"; 
		// }
	?>
	<div class="form-group">
		<button style="width:450px; margin-left:50px; font-size:25px; margin-top:30px;" class="btn btn-info btn-lg btn-block" name="signup" onclick="location.href='/signup/signform.php'">Sign Up</button>
	</div>
</div>
</body>
</html>
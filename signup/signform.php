<html>
<head>
	<title>Sign Up</title>
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
		$_SESSION['token'] =md5(uniqid(mt_rand(),true)); //create token and store in SESSION
		$_SESSION['token_time'] = time();
	?>
	<?php if (isset($_SESSION['message'])): ?>    
		<div class="alert alert-<?= $_SESSION['msg_type']?>">
			<?php 
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>

</head>
<body>
	<div class="signup-form">
		<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
			<h2>ColorViu Account Sign Up</h2>
			<p class="hint-text">Go back to Login if you have an account</p>
			<div class="form-group">
				<input type="text" style="height:50px; font-size:18px;" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
			</div>
			<div class="form-group">
				<input type="email" style="height:50px; font-size:18px;" class="form-control" id="email" name="email" placeholder="Email Address" autocomplete="off">
			</div>
			<div class="form-group">
				<input type="password" style="height:50px; font-size:18px;" class="form-control" name="password" placeholder="Password" >
			</div>
			<div class="form-group">
				<input type="password" style="height:50px; font-size:18px;" class="form-control" name="confirmpassword" placeholder="Confirm Password">
			</div>
			<div class="form-group">
				<select class="form-control" style="height:50px; font-size:18px;" name="gender">
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div class="form-group">
				<input type="date" style="height:50px; font-size:18px; margin-bottom:30px;" class="form-control" id="DateofBirth" name="dob">
			</div>
			<div class="form-group">
				<button style="width:450px; margin-left:20px; font-size:25px;" class="btn btn-info btn-lg btn-block" id="signup" type="submit" name="signup">Sign Up</button>
			</div>
		</form>
	<div class="form-group">
		<button style="width:450px; margin-left:50px; font-size:25px; margin-top:30px; margin-bottom:50px;" class="btn btn-success btn-lg btn-block" name="login" onclick="location.href='/login/loginform.php'">Login</button>
	</div>
</div>
<?php require_once "signup.php"?>
</body>
</html>
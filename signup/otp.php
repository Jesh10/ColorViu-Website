<html lang="en">
    <?php
        session_start();
        $_SESSION['token'] =md5(uniqid(mt_rand(),true)); //create token and store in SESSION
		$_SESSION['token_time'] = time();
    ?>
    <head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <link rel="stylesheet" href="../css/basic.css">
    </head>
    <header>
        <?php require "/xampp/htdocs/colorviu/headers/header.php" ?>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>
        
    </header>
<body>
<form action ="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="otp_form">
    <input type="hidden" id= "code" name="code" value="<?php echo strval($_SESSION['otp'])?>"></input>
        <div class="signup-form">
            <h2 style="color: #636363; margin-top:100px; font-size: 45px"><?php echo $_SESSION['fullname']?></h2>
            <h2 style="color: #636363; margin-top:10px; font-size: 45px" id="email" value=""><?php echo $_SESSION['email']?></h2>
            <p class="hint-text">Click the "Send OTP Code" button to get the OTP code in your Email</p>

            <div class="form-group">
                <input type="text" class="form-control" style="font-size: 24px; text-align:center" id="UserKey" name="userkey" autocomplete="off">
            </div>
            <div class="form-group" style ="text-align: center;">
                <input name="check" type="submit" value="Verify OTP Code" class ="btn btn-secondary" style="font-size: 24px; margin-right:20px;"></input>
                <button name="otp" id="otp" class ="btn btn-primary" style="font-size: 24px; height:48px;" onclick="sendMsg()">Send OTP Code</button>
            </div>
    </div>
</form>
<script>
    document.getElementById('otp').disabled = false;

    const otp = document.querySelector('.otp_form');
	function sendMsg(){
		//e.preventDefault();
		const email = document.querySelector("#email");
        const code = document.querySelector("#code").value;

		Email.send({
			SecureToken : "d3cbc1ef-a062-478a-afb5-25d0ec620c8d",
			To : email.innerHTML,
			From : "jeshcolorviu@gmail.com",
			Subject : "Colorviu Account Sign Up",
			Body : "Use this OTP code to complete your ColorViu Account Sign Up: " + code
		}).then(
            message => alert(message)
        );
        countdown();
	}

    function countdown() {
        document.getElementById('otp').disabled = true;
        var time = 60;
        var timer = setInterval(function(){
            if (time <= 0){
                clearInterval(timer);
                document.getElementById('otp').disabled = false;
                document.getElementById('otp').innerHTML = "Send OTP Code";
            } else {
                document.getElementById('otp').innerHTML = "New Code: " + time;
                console.log('OTP Ready');
            }
            time -= 1;
        }, 1000);
    }

</script>
<?php require_once "signup.php" ?>
</body>
</html>
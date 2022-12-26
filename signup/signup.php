<?php
    $conn = new mysqli('localhost', 'root', '', 'colorviu');

    if (isset($_POST['signup'])){
        $fullname = strip_tags($_POST['fullname']);
        $email = strip_tags($_POST['email']);
        $pass = strip_tags($_POST['password']);
        $confirmpassword = strip_tags($_POST['confirmpassword']);
        $gender = strip_tags($_POST['gender']);
        $dob = strip_tags($_POST['dob']);

        if($fullname=="") {
            $_SESSION['message'] = "Provide Your Fullname";    
            $_SESSION['msg_type'] = "danger";
        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['message'] = 'Please enter a valid Email Address';
            $_SESSION['msg_type'] = "danger";
        } else if($pass=="") {
            $_SESSION['message'] = "Provide a Passwowrd";  
            $_SESSION['msg_type'] = "danger";
        } else if(strlen($pass) < 6){
            $_SESSION['message'] = "Password must be atleast 6 characters"; 
            $_SESSION['msg_type'] = "danger";
        } else if ($confirmpassword != $pass) {
            $_SESSION['message'] = "Passwords do not match";
            $_SESSION['msg_type'] = "danger";
        } else if($dob=="") {
            $_SESSION['message'] = "Provide a valid Date of Birth";
            $_SESSION['msg_type'] = "danger";
        } else {
            $_SESSION['fullname'] = $fullname;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = password_hash($pass, PASSWORD_DEFAULT);
            $_SESSION['gender'] = $gender;
            $_SESSION['dob'] = $dob;
            $otp = rand(111111,999999);
            $_SESSION['otp'] = $otp;
            header("Location: /signup/otp.php"); die;
        }
    }

    if (isset($_POST['check'])){
        $userkey = $_POST['userkey'];
        if ($userkey == $_SESSION['otp']){
            $userid = null;
            $query= $conn->prepare("INSERT INTO users VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
            $query->bind_param("isssssis", $userid,$_SESSION['fullname'],$_SESSION['email'],$_SESSION['password'],$_SESSION['gender'],$_SESSION['dob']) or die($conn->error);
            $res = $query->execute();
            if ($res){
                unset($_SESSION['fullname']);
                unset($_SESSION['email']);
                unset($_SESSION['password']);
                unset($_SESSION['gender']);
                unset($_SESSION['dob']);
                unset($_SESSION['otp']);
                echo "<script type='text/javascript'>window.top.location='/signup/complete.php';</script>"; exit;
            }else{
                $_SESSION['message'] = "This Email has already been used!";
                $_SESSION['msg_type'] = "danger";
            }
        }
        else if ($userkey=" "){
            $_SESSION['message'] = "Invalid Security Key";
            $_SESSION['msg_type'] = "danger";
        }
        else{
            $_SESSION['message'] = "Invalid Security Key";
            $_SESSION['msg_type'] = "danger";
        }
    }
?>
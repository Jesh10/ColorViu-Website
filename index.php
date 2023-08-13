<!DOCTYPE html>
<html lang="en">
    <head>  
        <title>ColorViu</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/index.css">
    </head>
    <body>
        <header>
            <?php
                session_start();
                session_regenerate_id();
                if (isset($_SESSION["login"])) {
                    require "headers/header(login).php";
                } else {
                    require "headers/header.php";
                }

                // require_once 'google/goconfig.php';

                // // authenticate code from Google OAuth Flow
                // if (isset($_GET['code'])) {
                //     $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
                //     print_r($token);
                //     $client->setAccessToken($token);
                    
                //     // // get profile info
                //     $google_oauth = new Google_Service_Oauth2($client);
                //     $google_account_info = $google_oauth->userinfo->get();
                //     $_SESSION['google']=$google_account_info;
                //     $userinfo = [
                //         'FullName' => $google_account_info['name'],
                //         'Email' => $google_account_info['email'],
                //         'Gender' => $google_account_info['gender'],
                //         'VerifiedEmail' => $google_account_info['verifiedEmail'],
                //         'Token' => $google_account_info['id'],
                //     ];

                //     $sql = "SELECT * FROM users WHERE Email = '{$userinfo['email']}'";
                //     $result = mysqli_query($conn, $sql);
                //     if (mysqli_num_rows($result) > 0){

                //         $userdata = mysqli_fetch_assoc($result);
                //         $token = $userdata['Token'];

                //     } else {
                //         $userid = null;
                //         $password = null;
                //         $dob = null;
                //         $insert= $conn->prepare("INSERT INTO users VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
                //         $insert->bind_param("isssssis", $userid, $userinfo['FullName'], $userinfo['Email'], $password, $userinfo['gender'], $dob, $userinfo['VerifiedEmail'], $userinfo['Token']) or die($conn->error);
                //         $res = $insert->execute();
                //         if ($res){
                //             $token = $userdata['Token'];
                //         } else {
                //             die();
                //         }
                //     }

                //     $_SESSION['google_token'] = $token; 

                //     //now you can use this profile info to create account in your website and make user logged in.
                // } else {
                //     $sql = "SELECT * FROM users WHERE Token = '{$_SESSION['google_token']}'";
                //     $result = mysqli_query($conn, $sql);
                //     if (mysqli_num_rows($result) > 0){
                //         $userdata = mysqli_fetch_assoc($result);
                //     }
                // }
            ?>
        </header>
        <div class="parallax">
            <div class="parallax-content">
                <h1>ColorViu</h1>
                <h2>Improving your Color Vision experience<h2>
            </div>
        </div>

        <div class="first" style="margin-top: 50px; text-align: center;"> 
            <button type="button" class="btn btn-outline-danger" onclick="window.location.href='/tests/cdt.php'" style="width: 420px; height: 200px; margin-right: 40px">
                <h3>COLOR DEFICIENCY TEST (CDT)</h3>
                <sub>Test your Color Vision for Deficiencies</sub>
            </button>
            <button type="button" class="btn btn-outline-success" onclick="window.location.href='/generator/generator.php'" style="width: 420px; height: 200px; margin-right: 20px">
                <h3>COLOR PLATE GENERATOR</h3>
                <sub>Customize your own Color Plate</sub>
            </button>

            <button type="button" class="btn btn-outline-info" onclick="window.location.href='/more/more.php'" style="width: 420px; height: 200px;">
                <h3>MORE INFORMATION</h3>
                <sub>Find out more about ColorViu and Color Blindness</sub>
            </button>
        </div>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
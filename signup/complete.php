<html lang="en">
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
    </header>
    <?php
        unset($_SESSION['otp']);
    ?>
<body>
    <div class="container">
        <div class="signup-form">
            <h2 style="color: #636363; margin-top:100px; font-size: 45px">Your ColorViu Account has been Created</h2>
            <p class="hint-text">Return to Login page</p>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Color Deficiency Test</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/itest.css"/>
    <!-- <link rel="stylesheet" href="/colorviu/css/footer.css"/> -->
</head>

<body>
    <header>
        <?php
            session_start();
            if (isset($_SESSION["login"])) {
                require "/xampp/htdocs/colorviu/headers/header(login).php";
            } else {
                require "/xampp/htdocs/colorviu/headers/header.php";
            }
        ?>
    </header>
    
    <section class="container">
        <div id="test" class="flex-column flex-center">
            <h1 style="text-decoration: underline; margin-top: 20px; font-size: 90px; border: 3px solid white; padding:20px; width: 70%;">ISHIHARA TEST</h1>
            
            <h1 style="text-decoration: underline;">How it Works</h1>
            <br>
            <p class="ishihara"> 
                You will be required to interpret the various numbers shown in the
                pseudoisochromatic plates.
                <b>If you are unsure about the number within the test plate</b>
                input in your best guess. You can also select <b>‘skip’</b> to move onto the next question
            </p>

            <p class="ishihara">
                This test can only be used to detect red-green color blindness
            </p>

            <h1 style="text-decoration: underline;">Before Taking the Test</h1>
            <br>
            <p class="ishihara">
                <b>Remove any glasses with colored lenses:</b>
                taking this test with only your prescription lenses or 
                naked eye will provide you with the most accurate results. 
                Wearing a colored lens can make your results inaccurate
            </p>    
            <p class="ishihara">
                <b>Turn up your screen brightness:</b>
                brighter colors are easier to perceive
            </p>

            <p class="ishihara">
                <b>The test consists of a series of color blind test plates: </b>
                which form a one digit number
            </p>
            <br>
            <button type="button" class="btn" onclick="window.location.href='/tests/ishihara/itest.php'" style="width: 200px; height: 100px; ">
                <h4>PROCEED</h4>
            </button>    
        </div>
    </section>
</body>

</html>
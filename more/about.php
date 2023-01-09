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
    <link rel="stylesheet" href="/css/about.css"/>
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
    
    <div class="parallax">
        <div class="parallax-content">
            <h1>What is ColorViu?</h1>
            <h4><em>Improving your color vision experience</em><h4>
        </div>
    </div>
    
    <section class="container">
        <div class="left-half" style="height: 50%;">
            <article>
                <h1 style="text-decoration: underline; margin-right:60px;">ABOUT</h1>
                <br>
                <p> 
                    <b>ColorViu</b> is a <b>Color Vision Testing</b> platform that has the vision to improve the lives of anyone with Color Deficiencies
                </p>    

                <p>
                    Those who might not know if they are color deficient can use our easy-to-do <b>Color Vision Tests</b> (ie., Ishihara & D-15) to find out
                </p>

                <p>
                    Furthermore, <b>ColorViu</b> includes a <b>Color Plate Generator</b> that allows Color Deficient users to create their own Color Plates to give others an understanding of
                    what colors they have difficulties differenciating
                </p>
                <h1 style="text-decoration: underline; margin-right:60px;">CONTACT US</h1>
                <br>
                <p> 
                    <b>Email:</b> <a href="mailto:jeshcolorviu@gmail.com">jeshcolorviu@gmail.com</a>
                </p>    
            </article>
        </div>
        <div class="right-half" style="height: 50%;">
            <img src="/images/itest.png"  style="width: 50%; margin-top: 30px; margin-right: 30px; position: relative; ">
            <img src="/images/dtest.png"  style="width: 50%; margin-top: 30px; margin-right: 30px; position: relative;">
        </div>  
    </section>
    
</body>
</html>
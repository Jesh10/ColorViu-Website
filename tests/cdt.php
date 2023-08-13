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
    <link rel="stylesheet" href="/css/cdt.css"/>
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
            <h1>Color Deficiency Test</h1>
            <h4><em>ColorViu</em><h4>
        </div>
    </div>
    
    <section class="container">
        <div class="left-half" style="height: 50%; background-color: rgb(222, 216, 216);">
            <article>
                <h1 style="text-decoration: underline;">What this Test is About</h1>
                <br>
                <p> 
                    The following test will comprise of two types of color deficiency tests, 
                    the first test is the <b>Ishihara Test</b> and the second test is 
                    the <b>D-15 Disc Arrangement CVD Test</b>
                </p>    

                <p>
                    Try your best to choose the correct options provided. This test might not be 
                    100% accurate, however, if you have difficulties answering the questions, 
                    please see your eye doctor right after this test
                </p>
            </article>
        </div>
        <div class="right-half" style="height: 50%; background-color: rgb(222, 216, 216);">
            <img src="/images/i_6.png"  style="width: 40%; margin-top: 30px; margin-right: 30px; position: relative;">
            <img src="/images/d15.webp"  style="width: 50%; margin-top: 30px; position: relative;">
        </div>  
    </section>
    
    <div style="width: 100%;">
        <div style="width: 50%; height: 1100px; float: left; background-color: rgb(201, 167, 167); text-align: center;"> 
            <article>
                <div class="test">
                    <h3 style="font-size: 40px;">ISHIHARA TEST</h3>
                    <br>
                    <p> 
                        The Ishihara Test is the most well known color blindness test all around 
                        the world. 
                    </p>
                    <p>
                        Ishihara was a Japanese ophthalmologist who established the 
                        Ishihara Color Vision Test to detect colour blindness in 1917.
                    </p>
                    <button type="button" class="btn" onclick="window.location.href='/tests/ishihara/ishihara.php'" style="width: 200px; height: 100px; position: relative;">
                        <h4>TAKE TEST</h4>
                    </button>
                </div> 
            </article>
        </div>
        <div style="margin-left: 50%; background-color: rgb(201, 167, 167); height: 1100px; "> 
            <article>
                <div class="test">
                    <h3 style="font-size: 40px;">D-15 ARRANGEMENT TEST</h3>
                    <br>
                    <p>
                        The D15 set is a modification of the well-known FarnsworthMunsell 100 Hue Test. 
                    </p>
                    <p>
                        Each D15 set contains a reference disc and fifteen numbered discs, which make up an incomplete color circle.
                    </p>
                    <button type="button" class="btn" onclick="window.location.href='/tests/d-15/d-15.php'" style="width: 200px; height: 100px; position: relative;">
                        <h4>TAKE TEST</h4>
                    </button>
                </div>    
            </article>
        </div>
    </div>
</body>
</html>
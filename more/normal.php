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
    <link rel="stylesheet" href="/css/deficiency.css"/>
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
            <h1>ColorViu Tips</h1>
            <h4><em>How to maintain your Color Vision</em><h4>
        </div>
    </div>
    
    <section class="container">
        <div class="left-half" style="height: 50%;">
            <article>
                <h1 style="text-decoration: underline; margin-right:60px;">What is Color Vision?</h1>
                <br>
                <p> 
                    The ability to distinguish between light that is constituted of different wavelengths (i.e., different spectral power distributions) regardless of light intensity. 
                </p>    

                <p>
                    The process starts with the differential stimulation of several types of photoreceptors called <b>cones</b> by light entering the eye. 
                    These <b>cones</b> then provide outputs that eventually reach the brain after travelling through numerous layers of neurons.
                </p>
            </article>
        </div>
        <div class="right-half" style="height: 50%;">
            <img src="/images/graph.webp"  style="width: 50%; margin-top: 30px; margin-right: 30px; position: relative; ">
            <img src="/images/i_13.png"  style="width: 40%; margin-top: 30px; margin-right: 30px; position: relative;">
        </div>  
    </section>
    
    <div style="width: 100%; background-image: url('/images/white.webp');">
        <div style="width: 50%; height: 1050px; float: left; text-align: center;"> 
            <article>
                <div class="test">
                    <h3 style="font-size: 45px; width:70%; margin-left:105px;">COLOR VISION PROBLEM IN JAPAN</h3>
                    <br>
                    <p style="font-size: 28px;"> 
                        There are issues with colour vision in Japanese society as a whole, Japanese physicians, and Japanese ophthalmologists 
                        because they lack awareness of color vision in general.
                    </p>
                </div> 
            </article>
        </div>
        <div style="margin-left: 50%; height: 1050px; "> 
            <article>
                <div class="test">
                    <h3 style="font-size: 45px;">COLOR VISION TIPS</h3>
                    <br>
                    <p>
                        <b>1.</b> Book appointments with Eye Doctors to diagnose your condition
                    </p>
                    <p>
                        <b>2.</b> Have regular visits to your healthcare provider
                    </p>
                    <p>
                        <b>3.</b> Keep a healthy lifestyle (ie., Exercise, Good Diet)
                    </p>
                </div>    
            </article>
        </div>
    </div>
</body>
</html>
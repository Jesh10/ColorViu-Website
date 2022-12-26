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
            <h1>Tritan</h1>
            <h4><em>Very Rare Color Deficiency</em><h4>
        </div>
    </div>
    
    <section class="container">
        <div class="left-half" style="height: 50%;">
            <article>
                <h1 style="text-decoration: underline;">What is Tritan?</h1>
                <br>
                <p> 
                    Unlike the other two Color Deficiencies, Tritan is a 
                    <b>hereditary blue-yellow</b> color deficiency but, it is also a <b>dichromacy</b> condition where only two cones
                    in the person's eyes are functional
                </p>    

                <p>
                    There are also two types of Tritan Color Deficiencies, <b>Tritanomaly</b> and <b>Tritanopia</b>.
                </p>
            </article>
        </div>
        <div class="right-half" style="height: 50%;">
            <img src="/images/i_10.png"  style="width: 40%; margin-top: 30px; margin-right: 30px; position: relative;">
            <img src="/images/i_11.png"  style="width: 40%; margin-top: 30px; position: relative;">
        </div>  
    </section>
    
    <div style="width: 100%; background-image: url('/images/white.webp');">
        <div style="width: 50%; height: 1050px; float: left; text-align: center;"> 
            <article>
                <div class="test">
                    <h3 style="font-size: 45px;">TRITANOMALY</h3>
                    <br>
                    <p> 
                        Tritanomaly is a <b>partially severe</b> color deficiency
                    </p>
                    <p>
                        The Color Blind person who has this condition is unable to distinguish the difference between the colors <b>Blue and Yellow</b>.
                    </p>
                    <p>
                        However, this condition is only partially severe as the blue cones in the person's eyes are present, but they have abnormalitites which makes the person perceive the world in more <b> Red, Black and White</b>
                    </p>
                </div> 
            </article>
        </div>
        <div style="margin-left: 50%; height: 1050px; "> 
            <article>
                <div class="test">
                    <h3 style="font-size: 45px;">TRITANOPIA</h3>
                    <br>
                    <p>
                        Tritanopia is a <b>severe</b> color deficiency 
                    </p>
                    <p>
                        The Color Blind person who has this condition is also unable to distinguish the difference between the colors <b> Blue and Yellow </b>. 
                    </p>
                    <p>
                        However, this condition is severe as the person's eyes are <b>missing</b> the blue cones completely, leaving only the cones that absorb Red and Green light.
                    </p>
                </div>    
            </article>
        </div>
    </div>
</body>
</html>
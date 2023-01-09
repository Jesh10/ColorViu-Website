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
    <link rel="stylesheet" href="../css/more.css">
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
    
    <div class="type">
        <div class="parallax">
            <div class="parallax-content">
                <h1>Types Of Color Blindness</h1>
            </div>
        </div>

        <div class="first"> 
            <div class="pro">
                <input type="image" id="protan" src="/images/i_8.png" onclick="window.location.href='/more/protan.php'"></input>
                <h2>Protan</h2>
                <p>A common Color Deficiency among Color blind people who have difficulties percieving the color <b>Red</b> well</p>
                
            </div>
            
            <div class="deu">
                <input type="image" id="deutan" src="/images/i_1.png" onclick="window.location.href='/more/deutan.php'"></input>
                <h2>Deutan</h2>
                <p>Similar to the Protan Deficiency, but these Color Blind people have difficulties percieving the color <b>Green</b> well</p>
            </div>

            <div class="tri">
                <input type="image" id="tritan" src="/images/i_9.png" onclick="window.location.href='/more/tritan.php'"></input>
                <h2>Tritan</h2>
                <p>A very rare Color Deficiency among Color blind people who have difficulties percieving the colors <b>Blue</b> well</p>
            </div>
        </div>
    </div>
    
    <div class="type">
        <div class="parallax">
            <div class="parallax-content" >
                <h1>Other ColorViu Pages</h1>
            </div>
        </div>

        <div class="first"> 
            <div class="tips">
                <input type="image" id="tips" src="/images/i_14.png" onclick="window.location.href='/more/normal.php'"></input>
                <h2>Color Vision Tips</h2>
                <p>How do you maintain your Color Vision?</p>
                
            </div>
            
            <div class="about">
                <input type="image" id="about" src="/images/color-eye.jpg" onclick="window.location.href='/more/about.php'"></input>
                <h2>About</h2>
                <p>What is ColorViu?</p>
            </div>
        </div>
    </div>
    
</body>
</html>
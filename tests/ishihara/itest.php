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
    <script src="https://kit.fontawesome.com/c482b2fb67.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/itest.css"/>
    <!-- <link rel="stylesheet" href="/colorviu/css/footer.css"/> -->
</head>
<body>
    <header>
        <?php
            session_start();
            $_SESSION['test'] = session_id();

            if (isset($_SESSION["login"])) {
                require "/xampp/htdocs/colorviu/headers/header(login).php";
            } else {
                require "/xampp/htdocs/colorviu/headers/header.php";
            }
        ?>
    </header>
    <div class="table-row">
        <div id="hud">
            <div class="hud-item">
                <p id="progressText" class="hud-prefix"></p >
                <div id="progressBar">
                    <div id="progressBarFull"></div>
                </div>
            </div>
            <h1 style="margin-right: 335px;">What is the Number shown below?</h1>
            <!-- <div class="hud-item">
                <p class="hud-prefix">
                    Score
                </p>
                <h1 class="hud-main-text" id="score">
                    0
                </h1>
            </div> -->
        </div>
    </div>
    <div class="container">
        <div id="ishihara" class="table-row">
            <div class="side">
                <div class="plate">
                    <img id="plate" src="/images/i_1.png" alt="RGBlind logotype created with https://franciscouzo.github.io/ishihara/" style="padding: 30px;" class="center"></img>
                </div>
                <div class="contain">
                    <div class="choice-container" style="margin-left: 1rem;">
                        <p class="choice-text" data-number="1" >1</p>
                    </div>    
                    <div class="choice-container">
                        <p class="choice-text" data-number="2">2</p>
                    </div>
                    <div class="choice-container">
                        <p class="choice-text" data-number="3">3</p>
                    </div> 
                    <div class="choice-container">
                        <p class="choice-text" data-number="4">4</p>
                    </div>  
                    <div class="choice-container">
                        <p class="choice-text" data-number="5">5</p>
                    </div>  
                    <div class="choice-container">
                        <p class="choice-text" data-number="6">6</p>
                    </div> 
                    <div class="choice-container">
                        <p class="choice-text" data-number="7">7</p>
                    </div>  
                    <div class="choice-container">
                        <p class="choice-text" data-number="8">8</p>
                    </div>  
                    <div class="choice-container">
                        <p class="choice-text" data-number="9">9</p>
                    </div>
                    <div class="choice-container">
                        <p class="choice-text" data-number="0">0</p>
                    </div>    
                    <div class="choice-container">
                        <p class="choice-text" data-number="11">Skip</p>
                    </div>   
                </div> 
            </div>
        </div>    
    </div>
    <script src="itest.js"></script>
</body>

</html>
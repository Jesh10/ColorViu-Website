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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="/css/dend.css"/>
</head>

<body>
    <header>
        <?php
            session_start();
            session_regenerate_id();
            if (isset($_SESSION["login"])) {
                require "/xampp/htdocs/colorviu/headers/header(login).php";
            } else {
                require "/xampp/htdocs/colorviu/headers/header.php";
            }
        ?>
    </header>
    <div class="container">
        <div id="end" class="flex-center flex-column">
            <h1 id="result">Trichromacy</h1>
            <h2 id="severity">Normal Color Vision</h2>
            <div class="container" id="description" style="margin-top:30px">
                <canvas width="900" height="800" id="canvas"></canvas>
            </div>
            <div class="container1" id="btns">
                    <div class="table">
                        <form action="dend.php" method="POST">
                            <button type="submit" name="save" class="btn" id="submitButton" style="margin-right: 100px;">Save Results</button>
                        </form>
                    </div>
                    <div class="table2">
                        <button onclick="More()" class="btn">More</button>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</body>

<script src="dend.js"></script>
<script>
    function More(){
        more = localStorage.getItem('dmore')
        if (more == 'tritan'){
            window.location.href = "/more/tritan.php"
        } else if (more == 'protan'){
            window.location.href = "/more/protan.php"
        } else if (more == 'deutan'){
            window.location.href = "/more/deutan.php"
        } else {
            window.location.href = "/more/normal.php"
        }
    }
</script>
<?php require_once "/xampp/htdocs/colorviu/tests/d-15/dfun.php"; ?>
</html>
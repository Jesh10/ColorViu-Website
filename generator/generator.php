<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Color Plate Generator</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="../css/generator.css" rel="stylesheet" type="text/css">
        <script src="dat.gui.min.js"></script>
        <script src="utils.js"></script>
        <script src="shape_factories.js"></script>
        <script src="generator.js"></script>
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
        <div class="container"> 
            <h1>Color Plate Generator</h1>
            <h2>Simply draw on the screen and click the 'Generate' button</h2>
            <h3>Click the drop-down box at the top of the control panel to change to another plate setting</h3>
        </div>
        <canvas id="canvas" style="background-color: black;">Your browser doesn't supports canvas.</canvas>
        <input type="file" id="image_upload" accept="image/*" style="visibility:hidden">
    </body>
</html>

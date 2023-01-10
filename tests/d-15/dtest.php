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
    <script src="https://SortableJS.github.io/Sortable/Sortable.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/dtest.css"/>
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
    <div id="table-row">
        <h1>Arrange the Colored Boxes in Order</h1>
    </div>

    <section class="hue-container">
        <div data-position="0" class="hue-box" id="pointer" style="margin-right:30px"></div>
        <div id="row1">
            <div data-position="1" class="hue-box" id="box01"> </div>
            <div data-position="2" class="hue-box" id="box02"> </div>
            <div data-position="3" class="hue-box" id="box03"> </div>
            <div data-position="4" class="hue-box" id="box04"> </div>
            <div data-position="5" class="hue-box" id="box05"> </div>
            <div data-position="6" class="hue-box" id="box06"> </div>
            <div data-position="7" class="hue-box" id="box07"> </div>
            <div data-position="8" class="hue-box" id="box08"> </div>
            <div data-position="9" class="hue-box" id="box09"> </div>
            <div data-position="10" class="hue-box" id="box10"> </div>
            <div data-position="11" class="hue-box" id="box11"> </div>
            <div data-position="12" class="hue-box" id="box12"> </div>
            <div data-position="13" class="hue-box" id="box13"> </div>
            <div data-position="14" class="hue-box" id="box14"> </div>
            <div data-position="15" class="hue-box" id="box15"> </div>
            <div data-position="16" class="hue-box" id="pointer2"> </div>
        </div>
    </section>
    <button form-action="submit" class="btn" id=submitButton style="position: absolute; top: 63%; left: 44%;" onclick="window.location.href='/tests/d-15/dend.php'">Submit</button>


    <script src="dtest.js"></script>
</body>

</html>
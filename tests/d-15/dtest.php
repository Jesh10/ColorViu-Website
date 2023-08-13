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
        <div class="hue-box" id="#3781C1" style="margin-right:30px"></div>
        <div id="row1">
            <div class="hue-box" id="#3583B4"></div>
            <div class="hue-box" id="#3B84A7"></div>
            <div class="hue-box" id="#39859C"></div>
            <div class="hue-box" id="#3B8690"></div>
            <div class="hue-box" id="#3F8782"></div>
            <div class="hue-box" id="#588473"></div>
            <div class="hue-box" id="#6C8164"></div>
            <div class="hue-box" id="#837B5D"></div>
            <div class="hue-box" id="#907660"></div>
            <div class="hue-box" id="#9E6E6F"></div>
            <div class="hue-box" id="#9F6D7C"></div>
            <div class="hue-box" id="#9C6D89"></div>
            <div class="hue-box" id="#927099"></div>
            <div class="hue-box" id="#8F6FA4"></div>
            <div class="hue-box" id="#8073B2"></div>
            <!-- <div class="hue-box" id="box16"> </div> -->
        </div>
    </section>
    <button form-action="submit" class="btn" id=submitButton style="position: absolute; top: 63%; left: 44%;" onclick="window.location.href='/tests/d-15/dend.php'">Submit</button>

    <script src="dtest.js"></script>
</body>

</html>
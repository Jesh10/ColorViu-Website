<?php 
    session_start();
    $conn = new mysqli('localhost', 'root', '', 'colorviu');
    $query = mysqli_query($conn,"SELECT * FROM results WHERE Date=CURDATE() AND UserId= '{$_SESSION["userid"]}'")
    // $result->execute();
    // $result->bind_result($resultid, $name, $result, $severity, $date);
    // $result->store_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Results</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/c482b2fb67.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/results.css"/>
    <!-- <link rel="stylesheet" href="/colorviu/css/footer.css"/> -->
</head>
<style>
    body{
        background-image: url("/images/dark.jpg");
    }
</style>
<body style="background-image: url('/images/white.webp');">
    <header>
        <?php
            if (isset($_SESSION["login"])) {
                require "/xampp/htdocs/colorviu/headers/header(login).php";
            } else {
                require "/xampp/htdocs/colorviu/headers/header.php";
            }
        ?>
    </header>
    <div class="container">
        <div class="flex-center flex-column">
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                            <div class="col-m-6">
                                <h2><?php echo date("Y/m/d");?> Results</h2>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style ="font-size:large">No.</th>
                                <th style ="font-size:large">Test</th>
                                <th style ="font-size:large">Deficiency</th>
                                <th style ="font-size:large">Severity</th>
                                <th style ="font-size:large">Time</th>
                            </tr>   
                        <thead>
                        <tbody>
                        <tr>
                        <?php $num = 1 ?>
                        <?php while($row = mysqli_fetch_row($query)): ?>
                            <td><?php echo $num++ ?></td>
                            <td><?php echo $row[2] ?></td>
                            <td><?php echo $row[3] ?></td>
                            <td><?php echo $row[4] ?></td>
                            <td><?php echo $row[5] ?></td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                    </table>
                </div>
            </div>
            <a href="/index.php" class="btn">Go Home</a>
        </div>
    </div>
    <script src="results.js"></script>
</body>

</html>
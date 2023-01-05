<?php
    $conn = new mysqli('localhost', 'root', '', 'colorviu');

    //$result = '<script type="text/javascript">document.getElementById("result").textContent;</script>';
    if ($_COOKIE["dresult"] == "Protanomaly" || "Protanopia" || "Deuteranomaly" || "Deuteranopia" || "Tritanomaly" || "Tritanopia"){
        $_SESSION["result"] = $_COOKIE["dresult"];
    } else if ($_COOKIE["dseverity"] == "Partially Severe Color Deficiency" || "Severe Color Deficiency"){
        $_SESSION["severity"] = $_COOKIE["dseverity"];
    } else{
        echo "<script>alert('Invalid Values');</script>";
    }

    //$severity = "<script>document.getElementById('severity').textContent;</script>";


    $_SESSION['test'] = 'd-15';

    if(isset($_POST['save'])){
        if (isset($_SESSION["login"])) {
            $userid = $_SESSION["userid"];
            $testname = "D-15 Arrangement";
            $result = $_SESSION["result"];
            $severity = $_SESSION["severity"];
            $send = $conn->prepare("INSERT INTO results(UserId, TestName, Result, Severity) VALUES(?, ?, ?, ?)");
            $send->bind_param('isss', $userid, $testname, $result, $severity);
            if ($send->execute()){
                $_SESSION['test'] = '';
                echo "<script type='text/javascript'>window.top.location='/results/results.php';</script>"; exit;
            }
        } else {
            echo "<script type='text/javascript'>window.top.location='/login/loginform.php';</script>"; exit;
        }
    }  
?>
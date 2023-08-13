<?php
    $conn = new mysqli('localhost', 'root', '', 'colorviu');

    $res = $_COOKIE["iresult"];
    $sev = $_COOKIE["iseverity"];

    $result_array = ["Protanomaly", "Protanopia", "Deuteranomaly", "Deuteranopia", "Tritanomaly", "Tritanopia", "Trichromacy"];
    $severity_array = ["Severe Color Deficiency", "Partially Severe Color Deficiency", "Normal Color Vision"];

    if (in_array($res, $result_array)){
        $result = $res;
    } else{
        echo "<script>alert('Invalid Values');</script>";
    }

    if (in_array($sev, $severity_array)){
        $severity = $sev;
    } else{
        echo "<script>alert('Invalid Values');</script>";
    }

    $_SESSION['test'] = 'ishihara';

    if(isset($_POST['save'])){
        if (isset($_SESSION["login"])) {
            $userid = $_SESSION["userid"];
            $testname = "Ishihara";
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
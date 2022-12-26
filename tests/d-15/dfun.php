<?php
    $conn = new mysqli('localhost', 'root', '', 'colorviu');

    //$result = '<script type="text/javascript">document.getElementById("result").textContent;</script>';
    $_SESSION["result"] = $_COOKIE["dresult"];

    //$severity = "<script>document.getElementById('severity').textContent;</script>";
    $_SESSION["severity"] = $_COOKIE["dseverity"];

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
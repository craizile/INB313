<?php
    session_start();
    if (!isset($_SESSION['isCustSupp']))
    {
        header("Location: http://{$_SERVER['HTTP_HOST']}/INB313/login.php");
        exit();
    }
?>
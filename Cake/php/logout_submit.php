<?php
    session_start();
    // ob_start();

    unset($_SESSION['email']);
    // echo $_SESSION['login']['username'];
     
    // Chuyển hướng
    header('location: ../login.php');
?>
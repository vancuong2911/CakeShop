<?php
    session_start();
    include 'config.php';
    $connection = mysqli_connect('localhost', 'root', '', 'cakeshop');

    mysqli_set_charset($connection,'utf8'); 
    if(isset($_POST['submit']) 
    && $_POST["email"] != "" 
        && $_POST["password"] != "" 
    ) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password = md5($password);

        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
        $user = mysqli_query($connection, $sql);
        if (mysqli_num_rows($user) > 0) {
            $_SESSION['email'] = $email;
            // echo $_SESSION["message"] = "Dang nhap thanh cong";
            header("Location: ../logout.php");
        } else {
            echo $_SESSION["message"] = "* Đăng nhập thất bại, hãy thử lại!";
        header("Location: ../login.php");

        }
    } else {
        header("Location: ../login.php");
    };
?>
<?php 
    include 'config.php';

    if(!empty($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];

        $mailheader = "From: ".$name. "<".$email.">\r\n
        Chao mung tham gia vao nhom cua chung toi";
        if(mail($email,$name,$mailheader)) {
            $message = "Thanh cong";
        };
    }
    header("Location: ../mailmessage.php");
    
?>
<?php require '../config.php'; 

    if(isset($_SESSION['user_name']))
    {
       session_destroy();
       header("location:".BURLA.'login.php');
    }else{
        header("location:".BURL);
    }
?>
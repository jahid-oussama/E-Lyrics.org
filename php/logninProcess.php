<?php
// session_start();
if(isset($_POST['login'])){
    require_once("logninConfig.php");
    $info = new logninConfig($_POST['email'],$_POST['password']);
    // $info->setEmail($_POST['email']);
    // $info->setPassword($_POST['password']);

    $lognin = $info->lognin();
    if($lognin){

        echo "<script>alert('Welcome');document.location='../home.php'</script>";
    }
    else{
        echo "<script>alert('Invalid email/password');document.location='../index.php'</script>";
    }
}



?>
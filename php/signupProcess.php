<?php

if (isset($_POST['signup'])) {
    require_once "signupConfig.php";
    $signup = new signupConfig($_POST['email'],$_POST['username'],$_POST['password']);
    // $signup->setEmail($_POST['email']);
    // $signup->setUsername($_POST['username']);
    // $signup->setPassword($_POST['password']);







}   
if($signup->checkUser($_POST['email'])){
    
    echo "<script>alert('User Exist');document.location='../index.php'</script>";
}

else{
    $signup->insertData();
    echo "<script>alert('User inserted Successfully');document.location='../index.php'</script>";


}

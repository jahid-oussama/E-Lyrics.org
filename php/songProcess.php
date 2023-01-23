<?php
require "songConfig.php";
if (isset($_POST['song'])) {
    // var_dump($_POST);
    // die;

    $song = new songConfig();
    $song->lyrics = $_POST['lyrics'];
    $song->artist = $_POST['artist'];
    $song->song_title = $_POST['song_title'];
    $song->insertData();
    // $signup->setEmail($_POST['email']);
    // $signup->setUsername($_POST['username']);
    // $signup->setPassword($_POST['password']);
}
if (isset($_POST['song-1'])) {
    // var_dump($update->id );
    // die;

    $update = new songConfig();
    $update->id = $_POST['id'];
    $update->lyrics = $_POST['lyrics'];
    $update->artist = $_POST['artist'];
    $update->song_title = $_POST['song_title'];
    $update->update();
    // $signup->setEmail($_POST['email']);
    // $signup->setUsername($_POST['username']);
    // $signup->setPassword($_POST['password']);
}
// if (isset($_GET['delete'])) {
//     $song = new songConfig();
//     $song->Delete();
//     header('Location:home.php');
//   }
   
// if($signup->checkUser($_POST['email'])){
    
//     echo "<script>alert('User Exist');document.location='../index.php'</script>";
// }

// else{
//     $signup->insertData();
//     echo "<script>alert('User inserted Successfully');document.location='../index.php'</script>";


// }

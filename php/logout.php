<?php

// unset($_SESSION['email']);
// unset($_SESSION['password']);
session_start();
session_destroy();

echo "<script>alert('Logout successfully')</script>";
header("location: ../index.php");


?>
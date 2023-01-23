<?php
session_start();
if (!defined("DB_TUPE")) {
    define("DB_TYPE", "mysql");
}
if (!defined("DB_HOST")) {
    define("DB_HOST", "localhost");
}
if (!defined("DB_NAME")) {
    define("DB_NAME", "music");
}
if (!defined("DB_PWD")) {
    define("DB_PWD", "");
}
if (!defined("DB_USER")) {
    define("DB_USER", "root");
}

// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=music", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

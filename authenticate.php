<!--
Galang, Camille
Manalo, Sam
-->
<?php 
include 'dbconnect.php';
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}
 ?>
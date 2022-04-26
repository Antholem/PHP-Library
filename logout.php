<!--
Galang, Camille
Manalo, Sam
-->
<?php 
session_start();

if (session_destroy()) {
    header("Location: login.php");
}
 ?>
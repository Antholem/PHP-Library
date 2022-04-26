<!--
Galang, Camille
Manalo, Sam
-->
<?php 
include 'dbconnect.php';

$bcode = $_POST['bcode'];
$title = $_POST['title'];
$pcode = $_POST['pcode'];
$type = $_POST['type'];
$price = $_POST['price'];
$paperback = $_POST['paperback'];

$query = mysqli_query($connect, "INSERT INTO tbl_book(TBL_BOOK_CODE, TITLE, TBL_PUBLISHER_CODE, TYPE, PRICE, PAPERBACK) VALUES('$bcode', '$title', '$pcode', '$type', '$price', '$paperback') ");

    if ($query) {
        echo "<script> alert('You have successfully inserted the data.');</script>";
        echo "<script> document.location='book_index.php';</script>";
    }
    else{
        echo "<script> alert('Something went wrong. Please try again!');</script>";
    }

 ?>
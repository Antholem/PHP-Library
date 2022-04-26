<!--
Galang, Camille
Manalo, Sam
-->
<?php 
include 'dbconnect.php';

$pcode = $_POST['pcode'];
$pname = $_POST['pname'];
$city = $_POST['city'];

$query = mysqli_query($connect, "INSERT INTO tbl_publisher(TBL_PUBLISHER_CODE, TBL_PUBLISHER_NAME, CITY) VALUES('$pcode', '$pname', '$city') ");

    if ($query) {
        echo "<script> alert('You have successfully inserted the data.');</script>";
        echo "<script> document.location='publisher_index.php';</script>";
    }
    else{
        echo "<script> alert('Something went wrong. Please try again!');</script>";
    }

 ?>
<!--
Galang, Camille
Manalo, Sam
-->
<?php 
include 'dbconnect.php';
if(isset($_GET['delid']))
{
$rid=strval($_GET['delid']);
$delPub=mysqli_query($connect,"DELETE FROM tbl_publisher WHERE TBL_PUBLISHER_CODE='$rid'");
$delBook=mysqli_query($connect,"DELETE FROM tbl_book WHERE TBL_PUBLISHER_CODE='$rid'");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'publisher_index.php'</script>";     
} 
 ?>
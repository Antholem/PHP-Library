<!--
Galang, Camille
Manalo, Sam
-->
<?php 
include 'dbconnect.php';
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql=mysqli_query($connect,"DELETE FROM tbl_book WHERE TBL_BOOK_CODE=$rid");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'book_index.php'</script>";     
} 
 ?>
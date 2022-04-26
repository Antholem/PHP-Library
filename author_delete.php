<!--
Galang, Camille
Manalo, Sam
-->
<?php 
include 'dbconnect.php';
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$delAuthor=mysqli_query($connect,"DELETE FROM tbl_author WHERE TBL_AUTHOR_NUM=$rid");
$delBook=mysqli_query($connect,"DELETE tbl_book FROM tbl_book JOIN tbl_tbl_wrote ON tbl_book.tbl_book_code=tbl_tbl_wrote.tbl_book_code WHERE (tbl_book.tbl_book_code, tbl_author_num) IN (SELECT tbl_book_code, tbl_author_num FROM tbl_tbl_wrote WHERE TBL_AUTHOR_NUM=$rid)");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'author_index.php'</script>";     
} 
 ?>
<!--
Galang, Camille
Manalo, Sam
-->
<?php
include 'dbconnect.php';
$eid = $_GET['editid'];

$query = mysqli_query($connect, "SELECT * FROM tbl_author WHERE tbl_author_num='$eid'");
while ($row = mysqli_fetch_array($query)) {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Author</title>
    <link rel="stylesheet" type="text/css">
</head>
<body>
    <div class="form">
        <form method="post">
            <div class="con">
                <div class="insideform">
                    <header class="head-form">
                        <h2>Author Details</h2>
                        <p>Update author</p>
                    </header><br/>
                    <input  class="form-input" type="text" name="lname" value="<?php  echo $row['TBL_AUTHOR_LAST'];?>" /><br/>
                    <input class="form-input" type="text" name="fname" value="<?php  echo $row['TBL_AUTHOR_FIRST'];?>"/><br/>
                    <input class="update-record" type="submit" name="submit" value="Update Record"/><br/>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
}
if(isset($_POST['submit']))
  {
    $eid=$_GET['editid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $update=mysqli_query($connect, "UPDATE  tbl_author SET TBL_AUTHOR_LAST='$lname', TBL_AUTHOR_FIRST='$fname' WHERE tbl_author_num='$eid'");
     
    if ($update) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script > document.location ='author_index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>

<style >
@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }

body {
    background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
    background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
    background-attachment: fixed;
    background-repeat: no-repeat;
    font-family: 'Vibur', cursive;
    font-family: 'Abel', sans-serif;
    opacity: .95;
    }

form {
    width: 1000px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
    padding: 2%;
    background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
    }

form .con {
    display: -webkit-flex;
    display: flex;
   -webkit-justify-content: space-around;
    justify-content: space-around;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0 auto;
    }

header {
    margin: 2% auto 1% auto;
    text-align: center;
    }

header h2 {
    font-size: 250%;
    font-family: 'Playfair Display', serif;
    color: #3e403f;
    }

header p {
    letter-spacing: 0.05em;
    }

input[class="form-input"] {
    width: 500px;
    height: 50px;
    margin-top: 2%;
    padding: 15px;
    margin-left: 3%;
    font-size: 16px;
    font-family: 'Abel', sans-serif;
    color: #5E6472;
    outline: none;
    border: none;
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear; 
    }

input:focus {
    transform: translateX(-2px);
    border-radius: 5px;
    }

.update-record {
    width: 48%;
    display: inline-block;
    float: left;
    margin-left: 2%;
    display: inline-block;
    color: #252537;
    background: #B8F2E6;
    width: 280px;
    height: 50px;
    border-radius: 5px;
    outline: none;
    border: none;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    transition: all 0.2s linear;
    margin: 4%;
    margin-left: 25%;
    letter-spacing: 0.05em;
    padding-top: 3%;
    padding-bottom: 3%; 
    }

.update-record:hover {
    transform: translate(1px);
    box-shadow: none;
    }
</style>
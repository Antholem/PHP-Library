<!--
Galang, Camille
Manalo, Sam
-->
<!DOCTYPE html>
<html>
<head>
    <title>Publisher Records</title>
</head>
<body>
<br/><h1>Publisher Records</h1><br/>
<table>
    <tr>
        <th>Publisher Code</th>
        <th>Publisher Name</th>
        <th>City</th>
        <th>Actions</th>
    </tr>
    <?php 
    include 'dbconnect.php';
    $query = mysqli_query($connect, "SELECT * from tbl_publisher");
    $ctr = 1;
    $oneRecord = mysqli_num_rows($query);
    if ($oneRecord > 0) {
        while ($oneRecord=mysqli_fetch_array($query)) {
     ?>        
             <tr>
                 <td><?php echo $oneRecord['TBL_PUBLISHER_CODE']; ?> </td>
                 <td><?php echo $oneRecord['TBL_PUBLISHER_NAME']; ?> </td>
                 <td><?php echo $oneRecord['CITY']; ?> </td>
                 <td>
                     <a class="edit" href="publisher_edit.php?editid=<?php echo htmlentities($oneRecord['TBL_PUBLISHER_CODE']);?>">Edit</a>
                     <a class="delete" href="publisher_delete.php?delid=<?php echo htmlentities($oneRecord['TBL_PUBLISHER_CODE']);?>" onclick="return confirm('Do you really want to Delete?')">Delete</a>
                </td>
             </tr>
    <?php
        }
    }
     ?>
</table>
<br/>
<a class="return-home" href="homepage.php">Back</a>
<a class="add-record" href="publisher_add.html">Add New Record</a>
<br/><br/><br/>
</body>
</html>

<style>
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



th, td {
    background-color: 
    color: #252537;
    background: #fff;
    width: 280px;
    height: 50px;
    border-radius: 5px;
    outline: none;
    border: none;
    text-decoration: none;
    text-align: center;
    transition: all 0.2s linear;
    letter-spacing: 0.05em;
}
th {
    background: #B8F2E6;
}

table {
    margin-right: auto;
    margin-left: auto;
}

a {
    text-decoration: none;
}

.delete { 
    color: #252537;
    background: #B8F2E6;
    border-radius: 5px;
    outline: none;
    border: none;
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    letter-spacing: 0.05em;
    padding: 2% 5%;
}

.edit {
    color: #252537;
    background: #B8F2E6;
    border-radius: 5px;
    outline: none;
    border: none;
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    letter-spacing: 0.05em;
    padding: 2% 8%;
}

.edit:hover {
    transform: translatey(3px);
    box-shadow: none;
    padding: 7px 22px;
    background: #a0d9cd;
}

.delete:hover {
    transform: translatey(3px);
    box-shadow: none;
    padding: 7px 15px;
    background: #a0d9cd;
}

h1{
    font-size: 250%;
    font-family: 'Playfair Display', serif;
    color: #3e403f;
    text-align: center;
}

.return-home, .add-record{
    color: #252537;
    background: #FFF;
    border-radius: 5px;
    outline: none;
    border: none;
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    letter-spacing: 0.05em;
    padding: 1% 2%;
}

.return-home {
    margin-left: 8.3%;
    display: inline;
}

.add-record {
    margin-left: 1%;
    display: inline;
}

.add-record:hover, .return-home:hover {
    background: #f5e3fa;
    padding: 15px 29px;
}
</style>
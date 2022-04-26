<!--
Galang, Camille
Manalo, Sam
-->
<!DOCTYPE html>
<html>
<head>
    <title>Book Records</title>
    <link rel="stylesheet" type="text/css">
</head>
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
    width: 90%;
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
    transform: translate(3px);
    box-shadow: none;
    padding: 6px 15px;
    background: #a0d9cd;
}

.delete:hover {
    transform: translate(3px);
    box-shadow: none;
    padding: 6px 11px;
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
    margin-left: 11.4%;
    display: inline;
    margin-top: 4%;
}

.add-record {
    margin-left: 1%;
    display: inline;
}

.add-record:hover, .return-home:hover {
    background: #f5e3fa;
    padding: 15px 29px;
}

.bot {
    padding-bottom: 2%;
    padding-top: 1%;
    margin-left: -7%;
}

.adjust {
    width: 100px;
}

.adjust1 {
    width: 110px;
}

.adjust2 {
    width: 150px;
}

.adjust3 {
    width: 180px;
}

</style>

<body>
<br/><h1>Book Records</h1><br/>

<table >
    <tr>
        <th class="adjust1">Book Code</th>
        <th>Title</th>
        <th class="adjust2">Publisher Code</th>
        <th class="adjust">Type</th>
        <th class="adjust1">Price</th>
        <th class="adjust">Paperback</th>
        <th class="adjust3">Actions</th>
    </tr>
    <?php 
    include 'dbconnect.php';
    $query = mysqli_query($connect, "SELECT * from tbl_book");
    $ctr = 1;
    $oneRecord = mysqli_num_rows($query);
    if ($oneRecord > 0) {
        while ($oneRecord=mysqli_fetch_array($query)) {
     ?>        
             <tr>
                 <td class="adjust1"><?php echo $oneRecord['TBL_BOOK_CODE']; ?> </td>
                 <td><?php echo $oneRecord['TITLE']; ?> </td>
                 <td class="adjust2"><?php echo $oneRecord['TBL_PUBLISHER_CODE']; ?> </td>
                 <td class="adjust"><?php echo $oneRecord['TYPE']; ?> </td>
                 <td class="adjust1"><?php echo $oneRecord['PRICE']; ?> </td>
                 <td class="adjust"><?php echo $oneRecord['PAPERBACK']; ?> </td>
                 <td class="adjust3">
                     <a class="edit" href="book_edit.php?editid=<?php echo htmlentities($oneRecord['TBL_BOOK_CODE']);?>">Edit</a>
                     <a class="delete" href="book_delete.php?delid=<?php echo htmlentities($oneRecord['TBL_BOOK_CODE']);?>" onclick="return confirm('Do you really want to Delete?')">Delete</a>
                </td>
             </tr>
    <?php
        }
    }
     ?>
</table>
<br/>
<div class="bot">
<a class="return-home" href="homepage.php">Back</a>
<a class="add-record" href="book_add.html">Add New Record</a>
</div>
</body>
</html>
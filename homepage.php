<!--
Galang, Camille
Manalo, Sam
-->
<?php 
include 'authenticate.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <link rel="stylesheet" type="text/css">
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Days+One&family=Kanit:wght@500&family=Permanent+Marker&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Days+One&family=Kanit:wght@500&family=Permanent+Marker&family=Roboto&display=swap');

body {
font-family: 'Roboto', sans-serif;
  background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
  background-size: cover;
  margin-bottom: 3%;
}

.body-text {
  margin-top: -1%;
  text-align: center;
  position: relative;
}

.body-text h1 {
	font-size: 40px;
}

.icon {
  margin-left: 5vw;
  margin-top: 5vh;
}

.icon span {
  height: 5px;
  width: 40px;
  background-color: black;
  display: block;
  margin: 5px 0px 5px 0px;
  transition: 0.7s ease-in-out;
  transform: none;
  z-index: 1;


}

#openmenu:checked ~ .menu-pane {
  left: -5vw;
  transform: translateX(-5vw);
   z-index: 2;

}



div.menu-pane {
  background-image: linear-gradient(-225deg, #E3FDF1 50%, #FFE6FA 50%);
  position: absolute;
  transform: translateY(-105vw);
  transform-origin: (0, 0);
  width: 108.5vw;
  height: 100%;
  transition: 0.6s ease-in-out;
  z-index: 1;
  margin-top: .5%;
}

.menu-pane nav {
  padding: 10%;
}

.menu-links li, a, span {
      transition: 0.3s ease-in-out;
}

.menu-pane ul {
  padding: 10%;
  display: inline-block;
  list-style-type: none;
  margin-left: 5%;
}

.menu-pane li {
  padding-top: 15px;
  padding-bottom: 20px;
  margin-left: 5px;
  font-size: 2em;
}

.des {
	font-size: 50px;
  background-color:  #FFAB91;

}

.menu-pane li:first-child {
  font-size: 3em;
  margin-left: -8px;
  margin-top: -60%;
}

.menu-links li a {
  color: black;
  text-decoration: none;
}

.menu-links li:hover a {
  color: #FFAB91;
}

.menu-links li:first-child:hover a {
  color: black;  
  background-color: #FFAB91;
}

#QC-info {
  background-color: #FFAB91;
  text-decoration: none;
  border: 2px solid;
  border-color: #FFAB91;
  display: block;
  opacity: 0;
}

.menu-links li:first-child:hover #QC-info {
opacity: 1;
}

.menu-links li:first-child:hover #DC-info {
  opacity: 1;
}

.menu-links li:first-child a {
  padding: 5px;
}

input.checkbox {
  position: absolute;
  z-index: 3;
  top: 5vh;
  left: 5vw;
  width: 10vw;
  opacity: 0;
  height: 6vh;
}

.form {
  width: 300px;
  min-height: 300px;
  height: auto;
  border-radius: 5px;
  margin: 2% auto;
  box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
  padding: 2%;
  background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
  background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
  background-attachment: fixed;
  background-repeat: no-repeat;
  font-family: Libre Caslon Text;
  opacity: .95;
  display: -webkit-flex;
  display: flex;
 -webkit-justify-content: space-around;
  justify-content: space-around;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0 auto;
  font-family: 'Roboto', sans-serif;
  font-size: 25px;
}

.form2 {
  width: 300px;
  min-height: 300px;
  height: auto;
  border-radius: 5px;
  margin: 2% auto;
  position: absolute;
  left: 8%;
  margin-top: -28%;
  margin-left: 10%;
  box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
  padding: 2%;
  background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
  background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
  background-attachment: fixed;
  background-repeat: no-repeat;
  font-family: 'Roboto', sans-serif;
  opacity: .95;
  display: -webkit-flex;
  display: flex;
 -webkit-justify-content: space-around;
  justify-content: space-around;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: -26% auto;
  font-size: 25px; 
}

.form1 {
  width: 300px;
  min-height: 300px;
  height: auto;
  position: absolute;
  border-radius: 5px;
  margin: 2% auto;
  right: 8%;
  margin-top: -27%;
  box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
  padding: 2%;
  background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
  background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
  background-attachment: fixed;
  background-repeat: no-repeat;
  font-family: Libre Caslon Text;
  opacity: .95;
  display: -webkit-flex;
  display: flex;
 -webkit-justify-content: space-around;
  justify-content: space-around;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: -26% auto;
  font-family: 'Roboto', sans-serif;
  font-size: 25px;
  color: black;
 
}

.form a {
	text-decoration: none;
	color: black;
  background-color:  #FFAB91;
  padding: 5px;
  padding-left: 142px;
  padding-right: 142px;
  border-color: 2%;
}

.form a:hover {
  color: white ;

}

.form:hover {
  transform: translatey(3px);
  box-shadow: none;
}

.form1 a {
	text-decoration: none;
	color: black;
  background-color:  #FFAB91;
  padding-left: 130px;
  padding-right: 130px;
  border-color: 2%;
  padding-top: 3%;


}
.form1 a:hover {
  color: white;
}
.form1:hover {
  transform: translateY(3px);
  box-shadow: none;
}

.form2 a {
	text-decoration: none;
	color: black;
  background-color:  #FFAB91;
  padding: 5px;
  padding-left: 152px;
  padding-right: 152px;
  border-color: 2%;
}

.form2 a:hover {
  color: white;
}

.form2:hover {
    transform: translatey(3px);
    box-shadow: none;
}



.parag {
	font-size: 20px;
	text-align: justify/left/right/center;
	color: #102c35;
}
 
.def {
	font-size: 15px;
	position: absolute;
	top: 4%;
}
</style>
<body>
  <div class="menu-container">
  
  <input type="checkbox" id="openmenu" class="checkbox">
  
  <div class="icon">
    <label for="openmenu" id="label">
      <span></span>
      <span></span>
      <span></span>
     
    </label>    
  </div>

    <div class="menu-pane">
      
      <nav>
        <ul class="menu-links">
          <li><a class="des" href="homepage.php">HAU LIBRARY</a><span id="QC-info">
            
          </li>
          <li><a  href="publisher_index.php">TBL Publisher</a></li>
          <li><a  href="author_index.php">TBL Author</a></li>
          <li><a  href="book_index.php">TBL Book</a></li>
          <li><a  href="logout.php">Logout</a>
        </ul>
        
      </nav>
    </div>
  <div class="body-text">
    <h1>Holy Angel University Library</h1>
    <h2>Galang and Manalo</h2>
    <p>Webdev-201</p>
  </div>

  <div class="form">
    <a href="author_index.php">Author</a>
    <p class="parag">An author is a person who writes books or articles, usually for money. It can also refer to the person responsible for something, like the author of a plan to overthrow the student government. Author comes from the Latin word auctorem, meaning "founder, master, leader." </p>
  </div>

  <div class="form2">
     <a href="book_index.php">Book</a>
     <p class="parag">A book is a medium for recording information in the form of writing or images, typically composed of many pages (made of papyrus, parchment, vellum, or paper) bound together and protected by a cover. The technical term for this physical arrangement is codex (plural, codices).</p>
  </div>

  <div class="form1">
     <a href="publisher_index.php">Publisher</a>
     <p class="parag"> For book, the publisher is generally a publisher which prints or otherwise reproduces textual or graphic material for sale or distribution to the public. The name of the publisher (and place of publication) is usually found on the back of the title page.</p>
  </div>

</div>

</body>
 </html>
<!--
Galang, Camille
Manalo, Sam
-->
<!DOCTYPE html>
<html>
<head>
    <title>Log-in Page</title>
    <link rel="stylesheet" type="text/css" >
</head>
<body>
    <?php
        include 'dbconnect.php';
        session_start(); 
        if (isset($_POST['username'])) 
        {
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($connect,$username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($connect,$password);
            
            $query = "SELECT * FROM tbl_users WHERE username='$username' and password='".md5($password)."'";
            $result = mysqli_query($connect,$query) or die(mysql_error());

            $rows = mysqli_num_rows($result);

            if ($rows==1) {
                $_SESSION['username'] = $username;
                header("Location: homepage.php");
            }
            else
            {
                echo "<script>alert('Username/password is incorrect');</script>"; 
                echo "<script>window.location.href = 'login.php'</script>"; 
            }

        }
        else
        {
     ?>

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

form {
    width: 450px;
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
    margin: 2% auto 10% auto;
    text-align: center;
}
header h2 {
    font-size: 250%;
    font-family: 'Playfair Display', serif;
    color: #3e403f;
}

header p {letter-spacing: 0.05em;}

input[class="form-input"]{
    width: 267px;
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

.log-in {
    display: inline-block;
    color: #252537;
    width: 280px;
    height: 50px;
    background: #fff;
    border-radius: 5px;
    outline: none;
    border: none;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    transition: all 0.2s linear;
    margin: 7% auto;
    letter-spacing: 0.05em;

}

.log-in:hover {
    transform: translateY(3px);
    box-shadow: none;
}
.sign-up {
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
    margin: 7% auto;
    letter-spacing: 0.05em;
    padding-top: 3%;
}
.sign-up:hover {
    transform: translateY(1px);
    box-shadow: none;
}
</style>
<div class="form">
<form method="post" action="">
   <div class="con">
   <header class="head-form">
      <h2>Log In</h2>
      <p>login here using your username and password</p>
   </header>
   <br>
   <div class="insideform">
         
        <input  class="form-input" type="text" name="username" placeholder="Username"/><br/>
      
      <input class="form-input" type="password" name="password" placeholder="Password"/><br/>

      <input type="submit" name="submit" value="Login" class="log-in"/><br/>
   </div>

     <a href="registration.php" class="sign-up">Sign Up </a>

  </div>
</form>

</div> 
    <?php 
    }
     ?>
</body>
</html>

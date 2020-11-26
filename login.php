<?php // Do not put any HTML above this line
session_start();
include "pdo.php"; //connecting to database


$salt = 'XyZzy12*_'; //salt for pw
if(isset($_POST['name']) && isset($_POST['pass'])){
$prnt=$pdo->query("SELECT * FROM customer WHERE username='".$_POST['name']."'"); // selecting pw from database


while ($row=$prnt->fetch(PDO::FETCH_ASSOC)){
  $stmt=$row['password']; //pw stored in stmt
  $_SESSION['id']=$row['customer_id'];
}

}



if ( isset($_POST['name']) && isset($_POST['pass']) )
 {

    if ( strlen($_POST['name']) < 1 || strlen($_POST['pass']) < 1 ) {
        $_SESSION['error'] = "User name and password are required";
        header('Location:login.php'); //redirection
        return;


    } else {
        $check = hash('md5', $salt.$_POST['pass']);
        if ( $check == $stmt ) {
            // Redirect the browser to game.php

            
            header('Location:home page.php'); //redirection
            return;

        }
        else {
            $_SESSION['error'] = "Incorrect password";
            header('Location:login.php');  //redirection
            return;


        }
    }

    }


// Fall through into the View
?>







<!DOCTYPE html>
<html>
  <head>
    <title>login page</title>
    <meta charset="utf-8">

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="">

  </head>
  <body>
    <style>
    @media (min-width: 768px) {
    .container-small {
        width: 300px; margin-top: 100px;
        opacity: 80%;  background: rgba(0, 0, 0, 1);

    }
    .container-large {
        width: 970px; margin-top: 100px;
        opacity: 80%;
    }

}
@media (min-width: 992px) {
    .container-small {
        width: 400px;  margin-top: 100px;
        opacity: 80%;
          background: rgba(0, 0, 0, 1);

    }
    .container-large {
        width: 1170px;
    }
}
@media (min-width: 1200px) {
    .container-small {
        width: 600px;
        background: rgba(0, 0, 0, 1);
        height: 400px;
        margin-top: 100px;
        opacity: 80%;
    }
    .container-large {
        width: 1500px;
    }
}

.container-small, .container-large {
    max-width: 100%;
}
label,h1{
  color: white;
}



body{


    background-image: url('images/login.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
  a{
    display: inline-block;
    background: white;
    color:black;
    margin-top: 5px;

  }
  </style>
      <div class="container container-small">
      <h1>login</h1>
      <?php if (isset($_SESSION['error'])){print_r($_SESSION['error']);unset($_SESSION['error']);}?>
        <?php if (isset($_SESSION['sucess'])){print_r($_SESSION['sucess']);unset($_SESSION['sucess']);}?>
      <form method="post" action="login.php">

          <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" name="name" value="<?php if(isset($_SESSION['username'])){print_r(htmlentities($_SESSION['username']));}unset($_SESSION['username'])?>">
      </div>
        <div class="form-group">
        <label for="pass">Password:</label>
        <input class="form-control" type="password" name="pass" >`
      </div>

          <input type="submit" name="submit" value="login">
          <br>
          <a href="signup.php">sign up</a>
          <br>
          <a href="forgotpw.php">forgot password</a>
        </form>

        </div>
      </body>
      </html>

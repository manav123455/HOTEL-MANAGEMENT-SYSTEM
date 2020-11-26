<?php
session_start();
include 'pdo.php'; //including database

$stmt=$pdo->prepare("CREATE TABLE IF NOT EXISTS customer (
  customer_id INT NOT NULL AUTO_INCREMENT UNIQUE,
  username VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255),
  name VARCHAR(255),
  email VARCHAR(255),
  phone VARCHAR(255),
  address VARCHAR(255) )"); //create customer table
$stmt->execute();
if(isset($_POST['submit'])){
  if(strlen($_POST['username'])<1 &&  strlen($_POST['name'])<1 && strlen($_POST['password'])<1 && strlen($_POST['email'])<1 && strlen($_POST['no'])<1 && strlen($_POST['address'])<1 ){
    $_SESSION['errors']="Please fill all the fields"; //checking for empty field
    header('Location:signup.php');
    return;
  }
}

if(isset($_POST['username']) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['no']) && isset($_POST['address'])){
  
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
$_SESSION['name']=$_POST['name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['no']=$_POST['no'];
$_SESSION['address']=$_POST['address'];

}




 if(isset($_POST['username']) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['no']) && isset($_POST['address'])  ){

   $prnt=$pdo->query("SELECT username FROM customer"); // checking if username exists


   while ($row=$prnt->fetch(PDO::FETCH_ASSOC)){
     
     $name=$row['username'];
     if($name==$_POST['username']){
       $_SESSION['errors']="Username already in use. Try".$_POST['username'].rand(10,100);
       header("Location:signup.php");
       return;
     }

   }

   $salt = 'XyZzy12*_';
   $pass=hash('md5',$salt.$_POST['password']); //hashing user entered password
  $stmt=$pdo->prepare("INSERT INTO customer (username,password,name,email,phone,address) VALUES (:username,:pass,:name,:email,:no,:address)"); //inserting into table
  $stmt->execute(array(':username'=>$_POST['username'],':pass'=>$pass,':name'=>$_POST['name'],':email'=>$_POST['email'],':no'=>$_POST['no'],':address'=>$_POST['address']));
$_SESSION['sucess']="Sign up successfull. please Log in"; //sucessful signup leads to login page

  header("Location:login.php");
  return;
 }
 if(isset($_POST['submit'])){
   if(strlen($_POST['username'])<1 &&  strlen($_POST['name'])<1 && strlen($_POST['password'])<1 && strlen($_POST['email'])<1 && strlen($_POST['no'])<1 && strlen($_POST['address'])<1 ){
     $_SESSION['errors']="Please fill all the fields"; //checking for empty field
     header('Location:signup.php');
     return;
   }
 }



 ?>



<!DOCTYPE html>
<html>
  <head>
    <title>sign up page</title>
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
        height:600px;
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


    background-image: url('images/signup.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
  </style>

  <div class="container container-small ">
      <h1>sign up</h1>
      <?php if (isset($_SESSION['errors'])){echo"<p style=color:'red'";print_r(htmlentities($_SESSION['errors']));echo"</p>"; unset($_SESSION['errors']);}?>
      <form method="post"  id="signup">
        <div class="form-row">
          <div class="form-group col-md-6">
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control" required="" value="<?php if(isset($_SESSION['username'])){print_r(htmlentities($_SESSION['username']));}?>">
          </div>
        <div class="form-group col-md-6">
        <label for="pass">Password:</label>
        <input type="password" name="password" class="form-control" required="" placeholder="must contain numbers" >
      </div>
    </div>
        <div class="form-group">
          <label for="name">name:</label>
          <input type="text" class="form-control" name="name" required="" value="<?php if(isset($_SESSION['name'])){print_r(htmlentities($_SESSION['name']));}?>">
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" value="<?php if(isset($_SESSION['email'])){print_r(htmlentities($_SESSION['email']));}?>">
      </div>
        <div class="form-group>">
        <label for="no">Phone no:</label>
        <input type="text" class="form-control" name="no" required="" value="<?php if(isset($_SESSION['no'])){print_r(htmlentities($_SESSION['no']));}?>" >
      </div>
        <div class="form-group>">
        <p><label for="address"> Address:</label>
        <textarea class="form-control" rows="5" cols="70" required="" name="address" form="signup">
          <?php if(isset($_SESSION['address'])){print_r(htmlentities($_SESSION['address']));}?>
          </textarea>
        </div>



        <input type="submit" name="submit" value="submit">

</div>
        </form>
      </div>
    </body>

      </body>
      </html>

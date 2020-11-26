<?php
session_start();
include "pdo.php";
if(isset($_POST['username']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['no']) ){
$stmt=$pdo->query("SELECT * FROM customer WHERE username='".$_POST['username']."' AND name='".$_POST['name']."' AND email='".$_POST['email']."' AND phone='".$_POST['no']."'");
while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {

  if(isset($row['customer_id'])){
  setcookie('customid',$row['customer_id'],time()+900);
  header("Location:changepw.php");
  return;
    }
  else{
    $_SESSION['errors']="Enter correct details";
    header("Location:forgotpw.php");
    return;
  }
  }
}
elseif(isset($_POST['submit'])){
 $_SESSION['errors']="please enter all fields";
 header("Location:forgotpw.php");
 return;
}




 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>forgot password page</title>
    <meta charset="utf-8">

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="">
  </head>
  <body>
    <div class="container mt-5 mr-md-10">
      <h1>Forgot password page</h1>
      <?php if (isset($_SESSION['errors'])){print_r($_SESSION['errors']);unset($_SESSION['errors']);}?>
      <form method="post" action="forgotpw.php" >
        <div class="form-group">
        <label for="username">Username:</label>
        <input class="form-control" type="text" name="username" value="">
      </div>
        <div class="form-group">
          <label for="name">name:</label>
          <input class="form-control" type="text" name="name" value="">
      </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" type="text" name="email" value="">
      </div>
        <div class="form-group">
        <label for="no">Phone no:</label>
        <input class="form-control" type="text" name="no" value="" >
        </div>
        <input type="submit" name='submit' value="submit" >
      </form>
    </div>
  </body>
  </html>

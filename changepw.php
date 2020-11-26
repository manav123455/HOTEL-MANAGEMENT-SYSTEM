<?php
include "pdo.php";
session_start();
if(isset($_COOKIE['customid']) && isset($_POST['password'])){
  if($_POST['password']==$_POST['conpassword']){
  $sql=$pdo->prepare("UPDATE customer SET  password=:pass WHERE customer_id=:id ");
  $salt = 'XyZzy12*_';
  $pass=hash('md5',$salt.$_POST['password']);
  $sql->execute(array(':pass'=>$pass,':id'=>$_COOKIE['customid']));
  $_SESSION['sucess']="Password changed succesfully";
  unset($_SESSION['errors']);
  header("Location:login.php");
  return;
    }

elseif( $_POST['password']!=$_POST['conpassword']){
  $_SESSION['errors']="enter same password in both field";
  header("Location:changepw.php");
  return;
}
}
if(!isset($_COOKIE['customid'])){
  $_SESSION['errors']="your session has expired";
  header("Location:forgotpw.php");
  return;
}


 ?>
 <html>
 <head>
 </head>
 <body>
   <div class="conatiner mt-5">

 <form method="post" action="changepw.php" >
     <?php if (isset($_SESSION['errors'])){print_r($_SESSION['errors']);unset($_SESSION['errors']);}?>
   <div class="form-group">
   <label for="username">change password:</label>
   <input type="password" name="password" value="">
 </div>
  <div class="form-group">
     <label for="name">confirm password:</label>
     <input type="password" name="conpassword" value="">
   </div>
<input type="submit" value="submit">
</div>
</body>
</html>

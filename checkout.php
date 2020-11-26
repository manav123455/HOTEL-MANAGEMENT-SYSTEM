<?php
include "pdo.php";
session_start();
$r_id=$_POST['room_id'];

$stmt=$pdo->prepare(" UPDATE rooms SET room_status='empty'  WHERE room_id=:room_id");
$stmt->execute(array(':room_id'=>$r_id));

$stmt=$pdo->query("SELECT * FROM reservation WHERE room_id='".$r_id." ' " );
// $stmt->execute(array(':room_id'=>$r_id));
while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  $c_in=$row['date'];
  
}

$stmt=$pdo->query("SELECT * FROM rooms WHERE room_id='".$r_id." ' " );
while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  
  $_SESSION['room_type']=$row['room_type'];
}

 $_SESSION['amount']=$_POST['amount'];
 $stmt=$pdo->prepare("INSERT INTO invoice (check_in,amount) VALUES (:c_in,:amount) ");
 $stmt->execute(array(":c_in"=>$c_in,":amount"=>$_POST['amount']));
 header("location:invoice.php");
return;

?>

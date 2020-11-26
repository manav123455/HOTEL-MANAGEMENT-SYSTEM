<?php
include "pdo.php";
session_start();
$stmt=$pdo->prepare("SELECT * FROM rooms WHERE room_type=:name AND room_status='empty' AND location=:location ");
$stmt->execute(array(':name'=>$_POST['r_name'],':location'=>$_SESSION['location']));

while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  $_SESSION['r_id']=$row['room_id'];
  $_SESSION['r_name']=$row['room_type'];
}


if (isset($_POST['submit'])){
  $_SESSION['people']=$_POST['people'];

    $stmt=$pdo->prepare(" UPDATE rooms SET room_status='alloted'  WHERE room_id=:room_id");
    $stmt->execute(array(':room_id'=>$_SESSION['r_id']));

    $stmt=$pdo->prepare("INSERT INTO reservation (customer_id,room_id,people) VALUES (:c_id,:r_id,:people) ");
    $stmt->execute(array(":c_id"=>$_SESSION['id'],":r_id"=>$_SESSION['r_id'],":people"=>$_POST['people']));
  echo('<script>alert("Thank You for booking a room with us.");location="home page.php"</script>');

}
?>

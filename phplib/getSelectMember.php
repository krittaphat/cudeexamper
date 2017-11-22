<?php
    require_once 'dbcon.php';
   $id=$_POST['mid'];
   $sql="SELECT * FROM members WHERE id= $id";
  // echo $sql;
  $query = $conn->query($sql);
  $result = $query->fetch_assoc();
// var_dump($result);
   echo json_encode($result);
  $conn->close();
?>

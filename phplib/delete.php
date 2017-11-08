<?php
    require_once 'dbcon.php';
   $id=$_POST['mid'];
   $sql="DELETE FROM members WHERE id= $id";
  // echo $sql;
  $result = $conn->query($sql);
    $conn->close();
?>

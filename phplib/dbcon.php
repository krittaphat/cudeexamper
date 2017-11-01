<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $db = "cruddatabase";

  // Create connection
  $conn = new mysqli($servername, $username, $password,$db);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "Connected successfully";
  // $sql = "Select * from members";
  // $result = $conn->query($sql);
  // //var_dump($result);
  // while ($row = mysqli_fetch_assoc($result)) {
  //   //var_dump($row);
  //   echo $row['id']. " : " . $row['fname']. " : " . $row['lname'] . " : " .$row['contact']. "<br>";
  // }
  // mysqli_close ($conn);
?>
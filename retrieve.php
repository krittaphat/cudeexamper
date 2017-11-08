<?php
    require_once('./phplib/dbcon.php');
    $sql="SELECT * from members";
    $result = $conn->query($sql);
    $output =  [];
$data = [];
while($row=$result->fetch_assoc()){
    //echo $row['id']." : ".$row['fname']." : " .$row['lname']." : " .$row['contact']."<br>";
    $output ['data'] []=array($row['id'],$row['fname'],$row['lname'],$row['contact']);
}
//echo "<br>";
//var_dump($data);

$conn->close();
?>

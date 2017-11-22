<?php
    require_once 'dbcon.php';
    //echo $_POST['id']."/".$_POST['fname'].$_POST['lname'].$_POST['contact'];
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO members (id,fname,lname,contact) VALUE ($id,'$fname','$lname','$contact')";
    //echo $sql;

    $result = $conn->query($sql);
    if($result==TRUE){
        header("Location:http://localhost/cudeexamper/index_tmp.php");
    }else{
        die('Cannot Insert into Database');
    }    


    $conn->close();
?>

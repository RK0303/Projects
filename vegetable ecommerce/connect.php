<?php

    $txtName = $_POST['txtName'];
    $txtEmail = $_POST['txtEmail'];
    $txtMessage = $_POST['txtMessage'];

    $conn = new mysqli('localhost','root','','vegetable_ecom');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contactform(Name, Email, Message) value(?,?,?)");
        $stmt->bind_param("sss", $txtName, $txtEmail, $txtMessage);
        $stmt->execute();
        echo"Received the message";
        $stmt->close();
        $conn->close();
    }

?>
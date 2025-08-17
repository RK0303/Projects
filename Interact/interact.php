<?php

    $txtname = $_POST['txtname'];
    $txtemail = $_POST['txtemail'];
    $txtmessage = $_POST['txtmessage'];

    $conn = new mysqli('localhost','root','','interact');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into get_in_touch(Name, Email, Message) value(?,?,?)");
        $stmt->bind_param("sss", $txtname, $txtemail, $txtmessage);
        $stmt->execute();
        echo"Received the message";
        $stmt->close();
        $conn->close();
    }

?>
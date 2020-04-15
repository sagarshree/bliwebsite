<?php

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];

    $mailTo= "shreesharad48@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have a new message from".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: index.html?mailsend ")
}

?>
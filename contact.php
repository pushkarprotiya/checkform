<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $textarea = $_POST['text'];

   


    $to = "pushkarprotiya@gmail.com";
    $subject = "mail from portfolio";
    $text = "name: ".$name."\r\n"."email: ".$email."\r\n"."text: ".$textarea."\r\n";

    $headers = "From:".$email;
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Contact-type: text/html/r/n";

    if(mail($to,$subject,$text,$headers)){
        header('location: index.html');
    }
    else{
        echo "mail not send";
    }




?>
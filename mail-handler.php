<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $msg=$_POST['msg'];
        
        $to= 'info@arsenstudios.com';
        $subject= 'Form submission';
        $message="Name: ".$name."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n".$msg;
        $headers="Form: ".$email;
        
        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Send Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
            
        }
        else{
            echo "Something went wrong!";
        }
    }
     
?>
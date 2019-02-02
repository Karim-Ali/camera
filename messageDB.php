<?php
$name=$_POST["Name"];
$email=$_POST["Email"];
$subject=$_POST["Subject"];
$text=$_POST["Message"];
if(empty($name)||empty($email)||empty($subject)||empty($text))
    echo"Erorr data has been lost please try agin";
else{
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $text = filter_var($text, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $con=mysqli_connect("localhost","root","","camera");
    $q=mysqli_query($con,"insert into message (name,email,subject,text) values ('$name','$email','$subject','$text')");
    mysqli_close($con);
    header("location:index.php");   
    }
?>
<?php
$mail=$_POST["mail"];
$password=$_POST["password"];
if(empty($mail)||empty($password))
        echo"Erorr data has been lost please try agin";
else{
    $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $con=mysqli_connect("localhost","root","","camera");
    $q=mysqli_query($con,"select * from user where mail='$mail' and password='$password'");
    $row=mysqli_fetch_array($q);
    $email=$row["mail"];
    $pass=$row["password"];
    if($email==$mail && $pass==$password){
        session_start();
        $_SESSION["name"] = $row["fristName"];
        $_SESSION["mail"] = $row["mail"];
        header("location:order.php");
    }
    else    header("location:login.php");
    mysqli_close($con);
}
?>
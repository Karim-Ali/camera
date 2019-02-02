<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$password=$_POST["psw"];
$repeatpassword=$_POST["pswrepeat"];
$phonenumber=$_POST["mobile"];
$mail=$_POST["mail"];
if($repeatpassword!=$password)  echo"Paswords didn't matched";
else{
    if(empty($fname)||empty($lname)||empty($password)||empty($repeatpassword)||empty($phonenumber)||empty($mail))
        echo"Erorr data has been lost please try agin";
    else{
        $fname = filter_var($fname, FILTER_SANITIZE_STRING);
        $lname = filter_var($lname, FILTER_SANITIZE_STRING);
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        $repeatpassword = filter_var($repeatpassword, FILTER_SANITIZE_STRING);
        $phonenumber = filter_var($phonenumber, FILTER_SANITIZE_STRING);
        $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
        $con=mysqli_connect("localhost","root","","camera");
        $q=mysqli_query($con,"insert into user (fristName,lastName,mobile,mail,password) values ('$fname','$lname','$phonenumber','$mail','$password')");
        mysqli_close($con);
        session_start();
        $_SESSION["name"] = $fname ;
        $_SESSION["mail"] = $mail ;
        header("location:order.php");  
    }
}
?>
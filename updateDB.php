<?php
$code=$_POST["code"];
$name=$_POST["name"];
$image=$_POST["image"];
$describtion=$_POST["describtion"];
$price=$_POST["price"];
$catigory=$_POST["catigory"];
if(empty($code)||empty($name)||empty($image)||empty($describtion)||empty($price)||empty($catigory))
    echo"Erorr data has been lost please try agin";
else{
    $code = filter_var($code, FILTER_SANITIZE_STRING);
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $describtion = filter_var($describtion, FILTER_SANITIZE_STRING);
    $price = filter_var($price, FILTER_SANITIZE_STRING);
    $catigory = filter_var($catigory, FILTER_SANITIZE_STRING);
    $con=mysqli_connect("localhost","root","","camera");
    $q=mysqli_query($con,"UPDATE goods SET code = '$code', name= '$name', img = '$image', describtions	= '$describtion', price = '$price', catigory = '$catigory' WHERE code = '$code';");
    mysqli_close($con);
    if(!$q)    echo"Erorr data has been lost please try agin";
    header("location:control.php");  
}
?>
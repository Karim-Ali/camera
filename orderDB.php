<?php
session_start();
$mail=$_SESSION["mail"];
$notes=$_POST["note"];
$order=$_POST["o"];
if(empty($mail)||empty($order))
        echo"Erorr data has been lost please try agin";
else{
    $str = implode(',',array_unique(explode(' ', $order)));
    $array = explode(",",$str);
    $array1 = explode(" ",$order);
    $detailes = (string) NULL;
    foreach($array as $code){
        if($code=="") continue;
        $cnt = 0;
        foreach($array1 as $code1)
            if($code == $code1) $cnt++;
        $cnt1 = (string) $cnt;
        $detailes = $detailes."( ".$cnt1." ) of ".$code."-";
    }    
    $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
    $notes = filter_var($notes, FILTER_SANITIZE_STRING);
    $detailes = filter_var($detailes, FILTER_SANITIZE_STRING);
    $con=mysqli_connect("localhost","root","","camera");
    $q=mysqli_query($con,"insert into buy (email,detailes,notes) values ('$mail','$detailes','$notes')");
    session_destroy();
    header("location:index.php");
    mysqli_close($con);
}
?>
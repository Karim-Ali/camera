<?php
$id=$_GET["id"];
if(empty($id))
        echo"Erorr data has been lost please try agin";
else{
    $id = filter_var($id, FILTER_SANITIZE_STRING);
    $con=mysqli_connect("localhost","root","","camera");
    $q=mysqli_query($con,"delete from goods where code='$id'");
    $row=mysqli_fetch_array($q);
    mysqli_close($con);
    if($q){
        header("location:control.php");
    }
    else    echo"Erorr data has been lost please try agin";
}
?>
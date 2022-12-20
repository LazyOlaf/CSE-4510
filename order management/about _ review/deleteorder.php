<?php
    $con = mysqli_connect('localhost','root');
    $id_no=$_POST['id'];
    if($con && $id_no>0){
        mysqli_select_db($con, 'retrocafe');
        mysqli_query($con,"DELETE FROM ordertable where id=$id_no");
        }
mysqli_close($con);
header('location:http://localhost/Retro_cafe/admin%20all%20page/order%20Management/about%20_%20review/index.php');
?>
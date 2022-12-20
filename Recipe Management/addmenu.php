<?php
    $con = mysqli_connect('localhost','root');
    $id_no=$_POST['id'];
    if($con && $id_no>0){
        mysqli_select_db($con, 'retrocafe');
        $result=mysqli_query($con,"SELECT * from useraddedmenu where id=$id_no");
        $row=mysqli_execute(result);
        mysqli_query($con,"add * from useraddedmenu where id=$id_no");
        }
mysqli_close($con);
header('location:http://localhost/Retro_cafe/admin%20all%20page/order%20Management/about%20_%20review/index.php');
?>
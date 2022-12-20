<?php
    $con = mysqli_connect('localhost','root');
    $id_no=$_POST['id'];
    $title = $_POST[''];
    $phoneno = $_POST['phoneno'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $person = $_POST['person'];

$query = "INSERT into tablebooking (name, phoneno, date, time, person)
values('$name','$phoneno','$date','$time','$person')";

mysqli_query($con,$query);
    if($con && $id_no>0){
        mysqli_select_db($con, 'retrocafe');
        mysqli_query($con," FROM ordertable where id=$id_no");
        }
mysqli_close($con);
header('location:http://localhost/Retro_cafe/admin%20all%20page/order%20Management/about%20_%20review/index.php');
?>
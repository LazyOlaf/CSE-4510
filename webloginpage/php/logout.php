<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo 'Connected to the database!';
}else{
	echo "No connection";
}

mysqli_select_db($con,'retrocafe');
mysqli_query($con,"UPDATE user SET status = 0 WHERE status= 1");
mysqli_query($con,"UPDATE loginstat set statval = 1 WHERE stat= 'login'");
mysqli_query($con,"UPDATE loginstat set statval = 0 WHERE stat= 'logout'");
header('location:http://localhost/retro_cafe/webloginpage/index.php');
?> 
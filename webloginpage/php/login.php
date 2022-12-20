<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo 'Connected to the database!';
}else{
	echo "No connection";
}

mysqli_select_db($con,'retrocafe');

$email =$_POST['email'];
$password =$_POST['password'];

$result =mysqli_query($con,"SELECT email FROM user WHERE email= '$email'");

if ($result && mysqli_num_rows($result) > 0){
	mysqli_query($con,"UPDATE user set status = 1 WHERE email= '$email'");
    mysqli_query($con,"UPDATE loginstat set statval = 0 WHERE stat= 'login'");
    mysqli_query($con,"UPDATE loginstat set statval = 1 WHERE stat= 'logout'");
  header('location:http://localhost/retro_cafe/web%20design/index.php');
  
}else{
    header('location:http://localhost/retro_cafe/webloginpage/index.php');
}
?> 
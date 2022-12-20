<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo 'Connected to the database!';
}else{
	echo "No connection";
}

mysqli_select_db($con,'retrocafe');

$name =$_POST['rname'];
$email =$_POST['remail'];
$password =$_POST['rpassword'];

$result =mysqli_query($con,"SELECT email FROM user WHERE email= '$email'");
if ($result && mysqli_num_rows($result) > 0){
  header('location:http://localhost/retro_cafe/webloginpage/index.php');
}else{
  $query= "insert into user (name,email,password) values ('$name','$email','$password')";
    mysqli_query($con,$query);
    header('location:http://localhost/retro_cafe/webloginpage/index.php');
}
?> 
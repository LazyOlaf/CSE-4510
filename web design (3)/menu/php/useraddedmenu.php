<?php
echo '<p> Please Wait.... </p>';
$con = mysqli_connect('localhost','root');

if($con){
	echo '<b>***Order Confirmed***</b>';
}else{
	echo "No connection";
}

mysqli_select_db($con,'retrocafe');

$name =$_POST['name'];
$email =$_POST['email'];
$title =$_POST['title'];
$serving =$_POST['serving'];
$ingredient =$_POST['ingredient'];
$direction =$_POST['direction'];

$query= "insert into useraddedmenu (name,email,title,serving,ingredient,description) values ('$name','$email','$title','$serving','$ingredient','$direction')";
mysqli_query($con,$query);
header('location:http://localhost/retro_cafe/web%20design%20(3)/menu/index.php');
?> 
<?php

$password =$_POST['apassword'];

if ($password == 'admin'){
  header('location:http://localhost/Retro_cafe/admin%20all%20page/admin%20main/about%20_%20review/index.php');
  
}else{
    header('location:http://localhost/retro_cafe/webloginpage/index.php');
}
?> 
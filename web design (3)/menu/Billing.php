<?php 

    $con = mysqli_connect('localhost','root');
    if($con){

        mysqli_select_db($con, 'retrocafe');
        
        $add=$_POST['add'];
        $phone=$_POST['phone'];


        $query4="SELECT num from menunum where id=0";
        $result4=mysqli_query($con,$query4);
        $row4 = mysqli_fetch_array($result4); 
        $id_no=$row4['num'];

        $query= "SELECT title,price FROM menu where id=$id_no";

        $result=mysqli_query($con,$query);
        $row = mysqli_fetch_array($result);  
        $name=$row['title'];
        $cost=$row['price'];
       

        $query1= "SELECT id from user where status=1";
        $result1=mysqli_query($con,$query1);
        $row1 = mysqli_fetch_array($result1);  
        $id=$row1['id'];

        $query2="UPDATE user set address=$add, phone=$phone where id=$id";
        mysqli_query($con,$query2);
        

        mysqli_query($con,"INSERT into ordertable (`cust_id`, `item`, `price`) values ('$id', '$name', '$cost')");              
                
        header('location:http://localhost/retro_cafe/webloginpage/php/login.php');
    }

?>
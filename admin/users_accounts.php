<?php

$db_name = 'mysql:host=localhost;dbname=retrocafe';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

session_start();

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_order = $conn->prepare("DELETE FROM `tablebooking` WHERE id = ?");
   $delete_order->execute([$delete_id]);
   header('location:placed_orders.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>placed orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php' ?>

<!-- placed orders section starts  -->

<section class="placed-orders">

   <h1 class="heading">placed reservation</h1>

   <div class="box-container">

   <?php
      $select_table = $conn->prepare("SELECT * FROM `tablebooking`");
      $select_table->execute();
      if($select_table->rowCount() > 0){
         while($fetch_table = $select_table->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      <p> user id : <span><?= $fetch_table['ID']; ?></span> </p>
      <p> Date : <span><?= $fetch_table['Date']; ?></span> </p>
      <p> name : <span><?= $fetch_table['Name']; ?></span> </p>
      <p> number : <span><?= $fetch_table['phoneno']; ?></span> </p>
      <p> person : <span><?= $fetch_table['person']; ?></span> </p>
      <p> purpose : <span><?= $fetch_table['purpose'];?></span> </p>
      <form action="" method="POST">
         <input type="hidden" name="order_id" value="<?= $fetch_orders['id']; ?>">
         <div class="flex-btn">
            <a href="user_accounts.php?delete=<?= $fetch_table['ID']; ?>" class="delete-btn" onclick="return confirm('delete this reservation?');">delete</a>
         </div>
      </form>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no orders placed yet!</p>';
   }
   ?>

   </div>

</section>

<!-- placed orders section ends -->









<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>
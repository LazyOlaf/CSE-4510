<?php

$db_name = 'mysql:host=localhost;dbname=retrocafe';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

session_start();

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_order = $conn->prepare("DELETE FROM `review` WHERE id = ?");
   $delete_order->execute([$delete_id]);
   header('location:http://localhost/Retro_cafe/admin/admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Review</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php' ?>

<!-- placed orders section starts  -->

<section class="placed-orders">

   <h1 class="heading">Reviews</h1>

   <div class="box-container">

   <?php
      $select_reviews = $conn->prepare("SELECT * FROM `review`");
      $select_reviews->execute();
      if($select_reviews->rowCount() > 0){
         while($fetch_reviews = $select_reviews->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      <p> Review id : <span><?= $fetch_reviews['ID']; ?></span> </p>
      <p> Name : <span><?= $fetch_reviews['Name']; ?></span> </p>
      <p> Email : <span><?= $fetch_reviews['Email']; ?></span> </p>
      <p> Review : <span><?= $fetch_reviews['Review']; ?></span> </p>
      <form action="" method="POST">
         <div class="flex-btn">
            <a href="admin_login.php?delete=<?= $fetch_reviews['ID']; ?>" class="delete-btn" onclick="return confirm('delete this review?');">delete</a>
         </div>
      </form>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no reviews yet!</p>';
   }
   ?>

   </div>

</section>

<!-- placed orders section ends -->









<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>
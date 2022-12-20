<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- owl carrasol -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- wow css -->
    <link rel="stylesheet" href="css/animate.css">

    <title>About Us</title>
  </head>
  <body>


 

   




<!-- review section starts  -->

<section class="review" id="review">
    <h3 class="sub-heading"> <nav class="navbar navbar-expand-lg navbar-light ">
     <div > <a class="navbar-brand" href="index.php"> </a> </div>
         
       <div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Retro_cafe/admin%20all%20page/admin%20main/about%20_%20review/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active new" aria-current="page" href="http://localhost/retro_cafe/webloginpage/php/logout.php">Logout</a>
        </li>
      </ul>

      </div>
      </div>

     </nav> </h3>


    <h3 class="sub-heading"> Table Booking </h3>
    <h1 class="heading"> Management </h1>
    <h3>  <?php
    $con = mysqli_connect('localhost','root');
    if($con){
        mysqli_select_db($con, 'retrocafe');
        $result = mysqli_query($con,"SELECT * FROM tablebooking");
        echo "<table border='1'>
        <tr>
        <th>Booking ID</th>
        <th>Customer name</th>
        <th>Phone no.</th>
        <th>Date</th>
        <th>Time</th>
        <th>Person</th>
        </tr>";
        while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "        ";
                echo "<td>" . $row['Name'] . "</td>";
                echo "        ";
                echo "<td>" . $row['phoneno'] . "</td>";
                echo "        ";
                echo "<td>" . $row['Date'] . "</td>";
                echo "        ";
                echo "<td>" . $row['Time'] . "</td>";
                echo "        ";
                echo "<td>" . $row['person'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }

mysqli_close($con);
?></h3>

<form action="http://localhost/Retro_cafe/admin%20all%20page/table%20Management/about%20_%20review/deletebooking.php" method="post">
          <input type="numeric" name="id" placeholder="Booking ID?">
          <input type="submit" value="Delete booking" class="btn" >
      </form>

    
</section>

<!-- review section ends -->








    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
    <!-- owl java file -->
    <script src="js/jquery.min.js" ></script>
    <script src="js/owl.carousel.js"></script>

    <script type="">
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:false,
     autoplayTimeout:1000,
     autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
   })
    </script>


   <!-- wow js -->
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
  </body>
</html>



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>


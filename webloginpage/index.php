<!DOCTYPE html>
<html>
<head>
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
	<title>login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="full-page">

        <div class="sub-page">
          <div class="delivery-info">
          <img src="img/logo2.png">
          <span>CAFE RETRO +880 1740 745 000</span>
        </div>
        <div class="row">
          <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light ">
     <div > <a class="navbar-brand" href="index.php"> </a> </div>
         
       <div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/retro_cafe/web%20design/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/retro_cafe/web%20design%20(3)/menu/index.php">Unique Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/retro_cafe/web%20design%20(4)/aboutreview/index.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active new" aria-current="page" href="http://localhost/retro_cafe/webloginpage/index.php">Login</a>
        </li>
      </ul>

      </div>
      </div>

     </nav>
          </div>
        </div>
          <header>
             <div class="container">
    

        <!-- menu -->        
  </div>
</header>


            <div class="row">
                <div class="col-1">
                    <div class="form-box">
                        <div class="form">
                            <form class="login-form" action="http://localhost/retro_cafe/webloginpage/php/login.php" method="post">
                                <center><h1 class="main-heading">Login Form</h1></center>
                        <input type="email" id="email" name="email" placeholder="Email"/>
                        <input type="password" name="password" placeholder="Password"/>
                        <button>LOGIN</button>
                        <p class="message">Not Registered? <a href="#">Register</a></p>
                        <p class="message">Login as an admin?<a href="http://localhost/Retro_cafe/admin-login-form-main/adminpage.html">Admin</a></p>
                    </form>
                            <form class="register-form" action="http://localhost/retro_cafe/webloginpage/php/register.php" method="post">
                                <center><h1 class="main-heading">Register Form</h1></center>
                        <input type="text" name="rname" placeholder="Full Name"/>
                        <input type="email" id="email" name="remail" placeholder="Email"/>
                        <input type="password" name="rpassword" placeholder="Password"/>
                        <button>REGISTER</button>
                        <p class="message">Already Registered?<a href="#">Login</a>
                        </p>
                    </form>
                            
                   </div>
                  </div>
                </div>
                <div class="col-1">
                   
                </div>
            </div>
        </div>
    </div>
    <script src='https://code.jquery.com/jquery-3.2.1.min.js'>
    </script>
    <script>
        $('.message a').click(function(){$('form').animate({height: "toggle",opacity: "toggle"},"slow");});
    </script>
</body>
</html>
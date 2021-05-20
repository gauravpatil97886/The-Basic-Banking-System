<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>transfer money</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favico.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

        <style>
            body{
        background: radial-gradient(ellipse at top, #E0F8F9, transparent),
            radial-gradient(ellipse at bottom, #D9F4F6, transparent);} 
            
            
              	.container-fluid{
        		background-color:  #282C35;
        	}
          .container-fluid .navbar-brand{
            color: white;
            font-size: 30px;
            font-family: "Comic Sans MS";
          }
          .container-fluid img{
            height: 70px;
            width: 70px;
          }
        	.navbar-nav{
        		margin-left: 400px;
        	}
          .navbar-nav .nav-item{
            	padding: 5px;
              margin-right: 20px;
              font-size: 20px;
          }
        </style>
</head>

<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>Sparks Foundation</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="transfer.php">Customers</a></li>
          <li><a href="transfer.php">Transfer Money</a></li>
         
           <li><a href="contact.php">Contact</a></li>

          <li class="get-started"><a href="history.php">Transfer History</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
  <main>
    <?php include 'display.php' ?>
  </main>
</body>
</html>
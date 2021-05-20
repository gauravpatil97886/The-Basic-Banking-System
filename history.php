<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Basic banking system</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favico.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

</head>
    <style type="text/css">
         body{
        background: radial-gradient(ellipse at top, #E0F8F9, transparent),
            radial-gradient(ellipse at bottom, #D9F4F6, transparent);} 
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
          .container h2{
            color: white;
            font-family: "Comic Sans MS";
          }
          .container th, td{
            color: white;
            font-size: 19px;
          }
          .container th{
            font-size: 24px;
          }
          .container tr:hover{
            background-color: gray;
            color: black;
          } 
.styled-table thead tr {
    background-color:skyblue;
    color: black;
    text-align:center;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    border: 2px solid black;
}

.styled-table tbody tr {
    border-bottom: 1px solid black;
}
.styled-table tbody tr:last-of-type {
    border: 2px solid black;
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
         
           <li><a href="C:\Users\Gaurav Patil\Downloads\Vesperr-bootstrap-4\Vesperr\contact.html">Contact</a></li>

          <li class="get-started"><a href="history.php">Transfer History</a></li>

        </ul>
      </nav>


  </header>

<br>
<br>
<main>
	<div class="container"><br>
  <br>
        <h2 class="text-center pt-4 class="text-light" style="color:black;">Transfer History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered styled-table">
        <thead>
            <tr>
                
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                
            </tr>
        </thead>
        <tbody>

        <?php

            include 'connection.php';

            $sql ="select * from second";

            $query =mysqli_query($con, $sql);

            while($res = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            
            <td class="py-2" style="color:black"><?php echo $res['sender']; ?></td>
            <td class="py-2" style="color:black"><?php echo $res['receiver']; ?></td>
            <td class="py-2" style="color:black"><?php echo $res['balance']; ?> </td>
        <?php
            }
        ?>
        </tbody>
    </table>

    </div>
</div>
</main>

<?php include 'footer.php' ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from first where id=$from";
    $query = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from first where id=$to";
    $query = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_array($query);


    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! You Enter wrong values")';
        echo '</script>';
    }
    
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo " alert('Yo Don't Have Sufficient Balance')"; 
        echo '</script>';
    }
    
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }
      else {
        
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE first set balance=$newbalance where id=$from";
                mysqli_query($con,$sql);
             

                
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE first set balance=$newbalance where id=$to";
                mysqli_query($con,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO second(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($con,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='history.php';
                           </script>";
                    
                }
                $newbalance= 0;
                $amount =0;
        }
}
?>


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
        background-color:
      }
    	.button{
        height: 50px;
        width: 140px;
        border:2px solid green;
        border-radius: 30px;
        background-color: #71BC78;
        font-size: 20px;
       }
      .container .text-center{
        margin-top: 50px;
      }

		
      .label {
        color: white;
        padding: 8px;
        border-radius:10px;
        font-family: Arial;
      }
      .info {
        background-color: #2196F3;
      } /* Blue */

html, body {
  height: 100%;
}

.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
.btn{
  height: 40px;
  width: 170px;
  position: relative;
  display: block;
  margin-left: 500px;
  color: black;
  font-size: 14px;
  font-family: "montserrat";
  text-decoration: none;
  border: 2px solid green;
  border-radius: 30px;
  text-transform: uppercase;
  overflow: hidden;
  transition: 1s all ease;
  margin-bottom: 40px;
}
.btn::before{
  background:#50c878;
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: -1;
  transition: all 0.6s ease;
}
.btn2::before{
  width: 100%;
  height: 0%;
}
.btn2:hover::before{
  height: 100%;
}

</style>
</head>


    
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>Sparks Foundation</span></a></h1>
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
    <div class="container"><br>
        <h2 class="text-center pt-4">Transaction</h2>
    
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  first where id=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                $res=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>

                 <tr>
                    <td class="py-2"><?php echo $res['id'] ?></td>
                    <td class="py-2"><?php echo $res['name'] ?></td>
                    <td class="py-2"><?php echo $res['email'] ?></td>
                    <td class="py-2"><?php echo $res['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label class="label info">Transfer To:</label><br><br>

        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            
            <?php
                include 'connection.php';
                
                $sid=$_GET['id'];
                
                $sql = "SELECT * FROM first where id!=$sid";
                
                $result=mysqli_query($con,$sql);
                
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($res = mysqli_fetch_assoc($result)) {
            ?>
                
                <option class="table" value="<?php echo $res['id'];?>" >
                
                    <?php echo $res['name'] ;?> (Balance: 
                    <?php echo $res['balance'] ;?> ) 
               
                </option>

            <?php 
                } 
            ?>

        <div>
        </select>
        <br>
        <br>
            
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="mt-3 btn btn2" name="submit" type="submit" id="myBtn">Transfer</button>
        
         </div>
            
            
        </form>
    </div>

    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>
</html>
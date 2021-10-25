<?php include 'login-connectivity.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- cdn font  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/styling.css">
</head>
<body >
    <!-- Header Starts -->
      <div style="background: linear-gradient(to right, #c2e59c, #64b3f4);">
          <div class="container" >
            <div class="navbar">
              <div class="logo">
                <a href="main.php"><img src="Img/logo.jpg" width="110px" height="90px"></a>
              </div>
              <nav>
                <ul>
                  <li><a href="main.php">Home</a></li>
                  <li><a href="All Products.php">Products</a></li>
                  <li><a href="/musical store/Main/Piano/virtual-piano.html">Virtual Piano</a></li>
                  <li><a href="/musical store/Main/virtual-drum/virtual-drum.html">Virtual Drum</a></li>
                  <li><a href="feedback-form.php">Contact</a></li>
                  <li><a href="login.php"> <?php echo $_SESSION['username']; ?></a></li>
                  <li><a href="logout.php">Logout</a></li>
                  <li><a href="my-orders.php">My Order</a></li>
                </ul>
                <?php
                  $count=0;
                  if(isset($_SESSION['cart']))
                  {
                    $count=count($_SESSION['cart']);
                  }
                ?>
                <a href="cart.php" style="background-color:tomato; padding:7px; color:white; border-radius: 8px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart (<?php echo $count; ?>)</a>

              </nav>
              
            </div>

          </div>
      </div>
    <!-- Header Ends -->
  

</body>
</html>

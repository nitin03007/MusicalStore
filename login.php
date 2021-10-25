
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Account Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

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

<body>
    <!-- Header Starts -->
    <div style="background: linear-gradient(to right, #c2e59c, #64b3f4);">
          <div class="container" >
            <div class="navbar">
              <div class="logo">
                <a href="main.php"><img src="Img/logo.jpg" width="125px" height="90px"></a>
              </div>
              <nav>
                <ul>
                  <li><a href="main.php">Home</a></li>
                  <li><a href="All Products.php">Products</a></li>
                  <li><a href="">About Us</a></li>
                  <li><a href="feedback-form.php">Contact</a></li>
                  <li><a href="login.php"> <?php echo 'Login Here'; ?></a></li>
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

    <div class="account-page">
        <div class="container">
            <div class="row">
                <!-- <div class="col-2">

                </div> -->
                <div class="col-1">
                    <div class="form-container" style="height: 550px;">
                        <div class="form-btn">
                            <span id="Login">Login</span>
                            <span id="Register">Register</span>
                            <hr>
                        </div>
                        <form action="submit-login.php" id="LoginForm" method="POST" >
                            <!-- <div class="form-group">
                              <label for="email">Email address</label>
                              <input type="email" name="email" class="form-control" id="email" required>
                            </div> -->
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" required pattern=".{6,}" title="Six or more characters">
                              </div>
                            <div class="form-group">
                              <label for="pwd">Password</label>
                              <input type="password" name="password" class="form-control" id="l-password" title="Password must contain: Minimum 8 characters atleast 1 Alphabet and 1 Number" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
                            </div>
                            <!-- <div class="checkbox">
                              <label><input type="checkbox"> Remember me</label>
                            </div> -->
                            <button type="submit" class="btn" name="login">Submit</button>
                            <a href="">Forgot Password</a>
                          </form>
                          
                          <form action="submit-register.php" method="POST" id="RegForm">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" required pattern=".{6,}" title="Six or more characters">
                              </div>
                            <div class="form-group">
                              <label for="email">Email address</label>
                              <input type="email" name="email" class="form-control" id="email" required type="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input type="password" name="password" class="form-control" id="r-password" title="Password must contain: Minimum 8 characters atleast 1 Alphabet and 1 Number" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
                              </div>
                            <div class="form-group">
                              <label for="pwd">Confirm Password</label>
                              <input type="password" name="cpassword" class="form-control" id="cpassword" required>
                            </div>
                            <button type="submit" class="btn" name="signup" >Sign Up</button>
                          </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    
<br><br><br>

        <!-- -----Footer Starts----- -->

        <footer class="bg-white">
          <div class="container py-5">
            <div class="row py-4">
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- <img src="img/logo.png" alt="" width="180" class="mb-3"> -->
                <p class="font-italic text-muted">Follow us on our other handles</p>
                <ul class="list-inline mt-4">
                  <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter" style="font-size:30px;"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook" style="font-size:30px;"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram" style="font-size:30px;"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest" style="font-size:30px;"></i></a></li>
                  <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo" style="font-size:30px;"></i></a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Shop</h6>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><a href="#" class="text-muted">Hairs</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">Face</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">Stores</a></li>
                  <!-- <li class="mb-2"><a href="#" class="text-muted">Our Blog</a></li> -->
                </ul>
              </div>
              <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><a href="#" class="text-muted">Login</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">Register</a></li>
                  <!-- <li class="mb-2"><a href="#" class="text-muted">Wishlist</a></li> -->
                  <li class="mb-2"><a href="#" class="text-muted">Our Products</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-6 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
                <p class="text-muted mb-4">Enter Your Email Address to get Latest Offer.</p>
                <div class="p-1 rounded border">
                  <div class="input-group">
                    <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                    <div class="input-group-append">
                      <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Copyrights -->
          <div class="bg-light py-4">
            <div class="container text-center">
              <p class="text-muted mb-0 py-2">© 2021 All rights reserved.</p>
            </div>
          </div>
        </footer>



    <!-- Jquery For Login and Register Button -->
    <script>
        $(document).ready(function(){
  $("#Login").click(function(){
    $("#LoginForm").show();
    $("#RegForm").hide();
  });
  $("#Register").click(function(){
    $("#RegForm").show();
    $("#RegForm").css("visibility", "visible");

    $("#LoginForm").hide();
  });
});

    </script>



<script type="text/javascript">
    window.onload = function () {
        var txtPassword = document.getElementById("r-password");
        var txtConfirmPassword = document.getElementById("cpassword");
        txtPassword.onchange = ConfirmPassword;
        txtConfirmPassword.onkeyup = ConfirmPassword;
        function ConfirmPassword() {
            txtConfirmPassword.setCustomValidity("");
            if (txtPassword.value != txtConfirmPassword.value) {
                txtConfirmPassword.setCustomValidity("Passwords do not match.");
            }
        }
    }
</script>


</body>

</html>
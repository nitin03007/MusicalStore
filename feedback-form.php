<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>

    <link rel="stylesheet" href="css/styling.css">
        <link rel="stylesheet" href="css/form-style.css">
        <script src="form-validation.js"></script>
</head>
<body>
      <!-- Form -->
        <div class="wrapper" style="margin-top: 300px;" align=center>
            <h2>Feedback</h2>
            <div id="error_message">
               
            </div>
            <form action="feedback-form-submit.php" id="myform" method="POST" onsubmit = "return validate();" >
              <div class="input_field">
                  <input type="hidden" name="Username" value="<?php echo $_SESSION['username']; ?>">
                  <input type="text" placeholder="Name" id="name" name="name">
              </div>
              <!-- <div class="input_field">
                  <input type="text" placeholder="Subject" id="subject">
              </div> -->
              <div class="input_field">
                  <input type="text" placeholder="Email" id="email" name="email">
              </div>
              <div class="input_field">
                  <input type="text" placeholder="Phone" id="phone" name="phone">
              </div>
              <div class="input_field">
                  <textarea placeholder="Message" id="message" name="message"></textarea>
              </div>
              <div class="btnf">
                  <input type="submit">
              </div>
            </form>
          </div>

          <!-- Footer Starts -->
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
                  <li class="mb-2"><a href="login.php" class="text-muted">Login</a></li>
                  <li class="mb-2"><a href="login.php" class="text-muted">Register</a></li>
                  <!-- <li class="mb-2"><a href="#" class="text-muted">Wishlist</a></li> -->
                  <li class="mb-2"><a href="All Products.php" class="text-muted">Our Products</a></li>
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
            
          
    </body>
</html>

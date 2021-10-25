<?php include 'header.php' ;
      $username=$_SESSION['username'];
      $query=" SELECT * FROM `user_order` ";
      $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY Orders</title>
</head>
<body>
<h3 style="text-align: center; text-decoration:underline; margin-top:40px; margin-bottom:15px">My Orders</h3>
<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <table class="table text-center table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Serial No.</th>
            <th scope="col">Item Name</th>
            <th scope="col">Username</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        
        <tbody>
        <?php 
        $sno=1;
          while($rows=mysqli_fetch_assoc($result))
          {
            
        ?>
            <tr>
              <th scope="row"><?php echo $sno; ?></th>
              <td><?php echo $rows['Item_Name']; ?></td>
              <td><?php echo $rows['Username']; ?></td>
              <td><?php echo $rows['Price']; ?></td>
              <td><?php echo $rows['Quantity']; ?></td>
            </tr>
          <?php
          $sno++;
          }
          ?>
        
          
        </tbody>
      </table>
    </div>
  </div>
</div>
  

    

<br><br><br>


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
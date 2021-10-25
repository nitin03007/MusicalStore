<?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Online Shoping Store</title>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- cdn font  -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styling.css">

</head>

<body>

    <!-- ---Cart item Detail--- -->
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 ">
              <table class="table table-striped">
                <thead class="thead-dark text-center table-striped">
                  <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php
                    
                    if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                          $sr=$key+1;
                          echo"
                            <tr>
                              <td>$sr</td>
                              <td>$value[Item_Name]</td>
                              <td>$value[Category]</td>
                              <td>RS $value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                              <td>
                                <form action='manage-cart.php' method='POST'>
                                  <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10' style='width:50px; padding:0px; margin:0px;'>
                                  <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                </form>
                              </td>
                              <td class='itotal'></td>
                              <td>
                                <form action='manage-cart.php' method='POST'>
                                  <button name='Remove_Item' class='btn' style='width:90px; border-radius:7px; padding: 3px 4px;font-size:15px;margin:0px;'>Remove</button>
                                  <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                </form>
                                </td>
                            ";
                        }
                    }
                    
                  ?>
                </tbody>
              </table>
            </div>
                  
            <div class="col-lg-3 total-price" style="text-align: right; margin-left: 980px; ">
            

              <div class="border bg-light rounded p-4">
                <table>
                  <tr>
                      <td>Subtotal: &nbsp; </td>
                      <td id="stotal"> </td>
                  </tr>
                  <tr>
                      <td>GST: </td>
                      <td id="tax"> </td>
                  </tr>
                  <tr>
                      <td>Grand Total: </td>
                      <td id="gtotal"> </td>
                  </tr>
                </table>
                <hr>
                <br>
                    <!-- <h5>Sub Total:</h5>
                    <h6 class="text-right" id="stotal"></h6>

                    <h5>Delivery Charges</h5>
                    <h6 class="text-right" id="tax"></h6>

                    <h5>Grand Total:</h5>
                    <h6 class="text-right" id="gtotal"></h6> -->
                  <?php 
                    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                    {
                    ?>
                    <form action="purchase.php" method="POST" class="text-left">
                        <div class="form-group">
                          <label>Full Name</label>
                          <input type="text" name="Full_Name" class="form-control" required pattern=".{6,}" title="Six or more characters">
                        </div> 
                        <div class="form-group">
                          <label>Phone Number</label>
                          <input type="tel" name="Phone_No" class="form-control" required pattern="[789][0-9]{9}" title="Enter a valid ten digit number">
                        </div>
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" name="Address" class="form-control" required pattern=".{15,}" title="Add more characters">
                          <input type="hidden" name="Username" value="<?php echo $_SESSION['username']; ?>">
                          <!-- For Date -->
                          <input type="hidden" id="currentDate" name="Date"> 
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="flexRadioDefault2">
                            COD
                          </label>
                          <input class="form-check-input" type="radio" name="Pay_Mode" id="flexRadioDefault" value="COD" required>
                        </div>
                      <button class="btn btn-primary btn-block" name="purchase" >Purchase</button>    
                    </form>
                  <?php 
                        }
                      ?>
                </div>
                
        </div>

        </div>

    </div>
    <!-- Current Date -->
<script>
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  document.getElementById("currentDate").value = date;
</script>

    <script>

      var st=0;
      var gt=0;
      var iprice=document.getElementsByClassName('iprice');
      var iquantity=document.getElementsByClassName('iquantity');
      var itotal=document.getElementsByClassName('itotal');
      var stotal=document.getElementById('stotal');
      var tax=document.getElementById('tax');
      var gtotal=document.getElementById('gtotal');


      function subtotal()
      {
        st=0;
        gst=0;
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
          
          st=st+(iprice[i].value)*(iquantity[i].value);
        }
        gst=st*0.18;
        gt=st+gst;
        stotal.innerText=' Rs '+st;
        tax.innerText='Rs ' +gst;
        gtotal.innerText='Rs '+gt;
        
      }

      subtotal();

    </script>


    <br><br>


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
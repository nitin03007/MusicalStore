 <?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Online Musical Store</title>
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
      <div class="slider">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="3000">
              <a href="All Products.php" target="blank"><img src="img/slider1.jpg" class="d-block w-100"
                  alt="..." style="width: 1000px; height:400px;"></a>
            </div>
            <div class="carousel-item" data-interval="2000">
              <a href="All Products.php" target="blank"><img src="img/slider2.jpg" class="d-block w-100" alt="..."
                  style="width: 900px; height:400px;"></a>
            </div>
            <div class="carousel-item">
              <a href="All Products.php" target="blank"><img src="img/slider3.jpg" class="d-block w-100" alt="..."
                  style="width:auto; height:400px;"></a>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    <!-- ----Featured Categories---- -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
              <div class="col-3" >
                <a href="All Products.php"><img src="Img/categories-1.jpg" alt="" ></a>
              </div>
              <div class="col-3">
                <img src="Img/categories-2.jpg" alt="">
              </div>
              <div class="col-3">
                <img src="Img/categories-3.jpg" alt="">
              </div>
            </div>
        </div>
      
    </div>

    
    <!-- <div class="cat" align=center>
      <span style="padding-left: 30px; padding-right: 30px;"><img src="Images/categories-1.jpg" alt=""></span>
      <span style="padding-left: 30px; padding-right: 30px;"><img src="Images/categories-2.jpg" alt=""></span>
      <span style="padding-left: 30px; padding-right: 30px;"><img src="Images/categories-3.jpg" alt=""></span>
    </div> -->

    <!-- ----Featured Products---- -->
    <div class="small-container">
      <h2 class="title">Featured Products</h2>
      <hr>
      <div class="row">
        <div class="col-4">
          <form action="manage-cart.php" method="POST">
          <a href="products-detail.php"><img src="Img/Products/ctk3500/ctk3500-1.jpg" alt=""></a>
          <h4>Casio CTK-3500 61-Key Portable Keyboard</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rs 8500</p>
          <button type="submit" name="Add_To_Cart" class="btn" style="width: 110px; padding:2px 4px; border-radius:10px;">Add to Cart</button>
                    <!-- Add Name and Price of Product Below Too  -->
                    <input type="hidden" name="Item_Name" value="Casio CTK-3500 61-Key Portable Keyboard">
                    <input type="hidden" name="Price" value="8500">
                    <input type="hidden" name="Category" value="Piano">
          </form>
        </div>

          <div class="col-4">
            <form action="manage-cart.php" method="POST">
              <a href="products-detail.php"><img src="Img/Products/ctx9000/ctx9000-1.jpg" alt=""></a>
              <h4>Casio CT-X9000IN 61-Key Portable Keyboard</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>Rs 22500</p>
              <button type="submit" name="Add_To_Cart" class="btn" style="width: 110px; padding:2px 4px; border-radius:10px;">Add to Cart</button>
                      <!-- Add Name and Price of Product Below Too  -->
                      <input type="hidden" name="Item_Name" value="Casio CT-X9000IN 61-Key Portable Keyboard">
                      <input type="hidden" name="Price" value="22500">
                      <input type="hidden" name="Category" value="Piano">
            </form>
          </div>

          <div class="col-4">
            <form action="manage-cart.php" method="POST">
            <a href="products-detail.php"><img src="Img/Products/Juarez-Drum-set/drum-set-1.jpg" alt=""></a>
              <h4>JUAREZ Obra Complete Full Size Acoustic Drum Set</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <p>Rs 20000</p>
              <button type="submit" name="Add_To_Cart" class="btn" style="width: 110px; padding:2px 4px; border-radius:10px;">Add to Cart</button>
                      <!-- Add Name and Price of Product Below Too  -->
                      <input type="hidden" name="Item_Name" value="JUAREZ Obra Complete Full Size Acoustic Drum Set">
                      <input type="hidden" name="Price" value="20000">
                      <input type="hidden" name="Category" value="Drum">
            </form>
          </div>

          <div class="col-4">
            <form action="manage-cart.php" method="POST">
            <a href="products-detail.php"><img src="Img/Products/Kadence-ukulele/kadence-3.jpg" alt=""></a>
              <h4>Kadence Wanderer Series wood Ukulele</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>Rs 2500</p>
              <button type="submit" name="Add_To_Cart" class="btn" style="width: 110px; padding:2px 4px; border-radius:10px;">Add to Cart</button>
                      <!-- Add Name and Price of Product Below Too  -->
                      <input type="hidden" name="Item_Name" value="Kadence Wanderer Series wood Ukulele">
                      <input type="hidden" name="Price" value="2500">
                      <input type="hidden" name="Category" value="Guitar">
            </form>
          </div>  

          <div class="view-more-btn">
            <button ><a href="All Products.php" target="blank">View More &#8594;</a></button>
        </div>
          
        </div>
          
        <hr>
      </div>

      <!-- ----Recent Products---- -->
    <div class="small-container">
      <h2 class="title">Recent Products</h2>
    <div class="row">
      <div class="col-4">
            <form action="manage-cart.php" method="POST">
            <a href="products-detail.php"><img src="Img/Products/Juarez-Violin/violin-1.jpg" alt=""></a>
              <h4>Juarez Legnò Full Size Violin Kit, Natural</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <p>Rs 3500</p>
              <button type="submit" name="Add_To_Cart" class="btn" style="width: 110px; padding:2px 4px; border-radius:10px;">Add to Cart</button>
                      <!-- Add Name and Price of Product Below Too  -->
                      <input type="hidden" name="Item_Name" value="Juarez Legnò Full Size Violin Kit, Natural">
                      <input type="hidden" name="Price" value="3500">
                      <input type="hidden" name="Category" value="Violin">
            </form>
        </div>

        <div class="col-4">
          <form action="manage-cart.php" method="POST">
          <a href="products-detail.php"><img src="Img/Products/ctk3500/ctk3500-1.jpg" alt=""></a>
          <h4>Casio CTK-3500 61-Key Portable Keyboard</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>Rs 8500</p>
          <button type="submit" name="Add_To_Cart" class="btn" style="width: 110px; padding:2px 4px; border-radius:10px;">Add to Cart</button>
                    <!-- Add Name and Price of Product Below Too  -->
                    <input type="hidden" name="Item_Name" value="Casio CTK-3500 61-Key Portable Keyboard">
                    <input type="hidden" name="Price" value="8500">
                    <input type="hidden" name="Category" value="Piano">
          </form>
        </div>
        <div class="col-4">
            <form action="manage-cart.php" method="POST">
              <a href="products-detail.php"><img src="Img/Products/ctx9000/ctx9000-1.jpg" alt=""></a>
              <h4>Casio CT-X9000IN 61-Key Portable Keyboard</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>Rs 22500</p>
              <button type="submit" name="Add_To_Cart" class="btn" style="width: 110px; padding:2px 4px; border-radius:10px;">Add to Cart</button>
                      <!-- Add Name and Price of Product Below Too  -->
                      <input type="hidden" name="Item_Name" value="Casio CT-X9000IN 61-Key Portable Keyboard">
                      <input type="hidden" name="Price" value="22500">
                      <input type="hidden" name="Category" value="Piano">
            </form>
          </div>

          <div class="col-4">
            <form action="manage-cart.php" method="POST">
            <a href="products-detail.php"><img src="Img/Products/Kadence-ukulele/kadence-3.jpg" alt=""></a>
              <h4>Kadence Wanderer Series wood Ukulele</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>Rs 2500</p>
              <button type="submit" name="Add_To_Cart" class="btn" style="width: 110px; padding:2px 4px; border-radius:10px;">Add to Cart</button>
                      <!-- Add Name and Price of Product Below Too  -->
                      <input type="hidden" name="Item_Name" value="Kadence Wanderer Series wood Ukulele">
                      <input type="hidden" name="Price" value="2500">
                      <input type="hidden" name="Category" value="Guitar">
            </form>
          </div>
        </div>        
        <!-- ----Next Row--- -->
        <div class="row">
            <div class="col-4">
                <a href="products-detail.php"><img src="Img/Products/ctk3500/ctk3500-1.jpg" alt=""></a>
                <h4>Casio CTK-3500 61-Key Portable Keyboard</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>Rs 8500</p>
            </div>
                <div class="col-4">
                <a href="products-detail.php"><img src="Img/Products/ctx9000/ctx9000-1.jpg" alt=""></a>
                <h4>Casio CT-X9000IN 61-Key Portable Keyboard</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>Rs 22500</p>
                </div>
                <div class="col-4">
                <a href="products-detail.php"><img src="Img/Products/Juarez-Drum-set/drum-set-1.jpg" alt=""></a>
              <h4>JUAREZ Obra Complete Full Size Acoustic Drum Set</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <p>Rs 20000</p>
                </div>
                <div class="col-4">
                <a href="products-detail.php"><img src="Img/Products/Kadence-ukulele/kadence-3.jpg" alt=""></a>
              <h4>Kadence Wanderer Series wood Ukulele</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>Rs 2500</p>
                </div>       
          </div>
        <hr>
      </div>
      <!-- ----Recent Products Ends---- -->



      

      <!-- <div class="offer" align=center>
        <h2 class="title">Offers You Can't Refuse</h2>
          <span class="col-2"style="position: relative;">
            <img src="images/offer-1.jpg" alt="" width="560px" height="350px">
            <h4 class="offer-text">Upto 30% OFF</h4>
          </span>
          <span class="col-2"style="position: relative;">
            <img src="images/offer-2.jpg" alt="" width="560px" height="350px">
            <h4 class="offer-text">Upto 10% OFF</h4>
          </span>
          <br><br>
          <span class="col-2"style="position: relative;">
            <img src="images/offer-2.jpg" alt="" width="560px" height="350px">
            <h4 class="offer-text">Upto 10% OFF</h4>
          </span>
          <span class="col-2"style="position: relative;">
            <img src="images/offer-1.jpg" alt="" width="560px" height="350px">
            <h4 class="offer-text">Upto 30% OFF</h4>
          </span>
      </div> -->


      <!-- ----Offer Section Starts---- -->

      <div class="offer">
        <h2 class="title">Offers You Can't Refuse</h2>
        <div class="row">
          <div class="col-2 offersection">
            <a href=""><img src="Images/offer-1.jpg" alt="" >
            <h4 class="offer-text">Upto 30% OFF</h4></a>
          </div>
            <div class="col-2 offersection">
            <a href=""><img src="Images/offer-2.jpg" alt="">
              <h4 class="offer-text">Upto 10% OFF</h4></a>
            </div>
          </div>

          <div class="row">
            <div class="col-2 offersection">
            <a href=""><img src="Images/offer-1.jpg" alt="" >
              <h4 class="offer-text">Upto 30% OFF</h4></a>
            </div>
              <div class="col-2 offersection">
              <a href=""> <img src="Images/offer-2.jpg" alt="">
                <h4 class="offer-text">Upto 10% OFF</h4></a>
              </div>
            </div>
          <hr>
        </div>
        <!-- ----Offer Section Ends ---- -->

        <!-- ----Testimonial Starts---- -->
      
          <div class="testimonial">
              <div class="small-container">
                  <div class="row">
                      <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos temporibus repudiandae laboriosam ducimus asperiores est molestiae.
                          </p>
                          <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <img src="Img/user-1.png" alt="">
                          <h3>User Name-1</h3>
                      </div>
                      <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos temporibus repudiandae laboriosam ducimus asperiores est molestiae.
                          </p>
                          <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <img src="Img/user-2.png" alt="">
                          <h3>User Name-2</h3>
                      </div>
                      <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos temporibus repudiandae laboriosam ducimus asperiores est molestiae.
                          </p>
                          <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <img src="Img/user-3.png" alt="">
                          <h3>User Name-3</h3>
                      </div>
                  </div>
              </div>
          </div>

        <!-- ----Testimonial Ends---- -->
        <br><br>

          <!-- ----Features---- -->
        <div class="small-container">
            <div class="row">
                <div class="feature">
                  <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                    <h2 style="font-size: medium;">Secure <br>Payment</h2>
                </div>
                <div class="feature">
                  <i class="fa fa-truck"></i>
                  <h2 style="font-size: medium;">Worldwide <br>Delivery</h2>
                </div>
                <div class="feature">
                  <i class="fa fa-refresh" aria-hidden="true"></i>
                  <h2 style="font-size: medium;">90 Days<br> Return</h2>
                </div>
                <div class="feature">
                  <i class="fa fa-comments"></i>
                  <h2 style="font-size: medium;">24/7 <br>Support</h2>
                </div>
            </div>
        </div>

        <!-- -----Brands----- -->
        
          <div class="brands">
            <div class="small-container" align=center>
              
                <div class="row" style="display: inline-block;" >
                  <marquee behavior="scroll" direction="right" scrolldelay="" scrollamount="12" style="background-color:white;">
                    <div class="col-5">
                        <img src="Img/brands-1.png" alt="">
                    </div>
                    <div class="col-5">
                      <img src="Img/brands-2.png" alt="">
                    </div>
                    <div class="col-5">
                      <img src="Img/brands-3.png" alt="">
                    </div>
                    <div class="col-5">
                      <img src="Img/brands-4.png" alt="">
                    </div>
                    <div class="col-5">
                      <img src="Img/brands-5.png" alt="">
                  </div>
                </marquee>
                </div>

            </div>
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
                  <li class="mb-2"><a href="#" class="text-muted">Piano</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">Guitar</a></li>
                  <li class="mb-2"><a href="#" class="text-muted">Drums</a></li>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <title>Ajekpako Stores</title>
</head>
<body>
    <div id="top"> <!--Top begin -->

        <div class="container"> <!--container begin -->

            <div class="col-md-6 offer"> <!--col-md-6 offer begin -->

                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php">4 Items In Your Cart | Total Price is: $300, </a>

            </div> <!--col-md-6 offer ends -->

            <div class="col-md-6"> <!--col-md-6 begin -->

                <ul class="menu"> <!--menu begin -->

                   <li>
                       <a href="customer_register.php"> Register</a>
                   </li>
                   <li>
                        <a href="checkout.php"> Account</a>

                   </li>
                   <li>
                        <a href="cart.php"> Go To Cart</a>
                   </li>
                   <li>
                        <a href="login.php"> Login</a>
                   </li>

                </ul> <!--menu ends -->

            </div><!--col-md-6 ends -->

        </div> <!--container ends -->

    </div> <!--Top ends -->

    <div id="navbar" class="navbar navbar-default"> <!--navbar navbar-default begins -->

       <div class="navbar-header"> <!--navbar-header begins -->

          <a href="index.php" class="navbar-brand home"><!--navbar-brand home begins -->

             <img src="images/aj-stores-logo.png" alt="Ajekpako Stores Logo" class="hidden-xs">

             <img src="images/aj-stores-logo-mobile.png" alt="Ajekpako Stores Logo Mobile" class="visible-xs">

          </a> <!--navbar-brand home ends -->
          <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

              <span class="sr-only">Toggle Navigation</span>

               <i class="fa fa-align-justify"></i>
          </button>

          <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

              <span class="sr-only">Toggle Search</span>

              <i class="fa fa-search"></i>
          </button>

       </div> <!--navbar-header ends -->

       <div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse ends -->

           <div class="padding-nav"> <!--padding-nav ends -->

              <ul class="nav navbar-nav left"> <!--nav navbar-nav left begins -->

                  <li class="active">
                      <a href="index.php">Home</a>
                  </li>
                  <li>
                      <a href="shop.php">Shop</a>
                  </li>
                  <li>
                      <a href="checkout.php">My Account</a>
                  </li>
                  <li>
                      <a href="cart.php">Shopping Cart</a>
                  </li>
                  <li>
                      <a href="index.php">Contact Us </a>
                  </li>

              </ul> <!--nav navbar-nav left ends -->

           </div> <!--padding-nav ends -->

           <a href="cart.php" class="btn navbar-btn btn-primary right"> <!--btn navbar-btn btn-primary right begins -->

              <i class="fa fa-shopping-cart">

                  <span> 4 Items In Your Cart</span>
              </i>

           </a> <!--btn navbar-btn btn-primary right ends -->

           <div class="navbar-collapse collapse right"> <!--navbar-collapse collapse right begins -->
              <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"> <!--btn btn-primary navbar-btn begins -->

               <span class="sr-only">Toggle search</span>

               <i class="fa fa-search"></i>

           </button> <!--btn btn-primary navbar-btn ends -->

           </div> <!--navbar-collapse collapse right ends -->



       </div><!--navbar-collapse collapse ends -->

       <div class="collapse clear-fix" id="search"> <!--collapse clear-fix begins -->

          <form action="results.php" method="get" class="navbar-form"> <!--navbar-form begins -->

             <div class="input-group"> <!--input-group begins -->

                <input type="text" class="form-control " name="user_query" placeholder="Search" required>

                <span class="input-group-btn"> <!--input-group-btn begins -->

                    <button class="btn btn-primary" type="submit" name="search" value="search"> <!--btn-primary begins -->

                       <i class="fa fa-search"></i>

                    </button> <!--btn btn-primary begins -->
                </span> <!--input-group-btn ends -->

             </div><!--input-group ends -->

          </form> <!--navbar-form ends -->

       </div> <!--collapse clear-fix ends -->

    </div> <!--navbar navbar-default ends -->

    <div class="container" id="slider"> <!--container slider begins -->

       <div class="col-md-12"> <!--col-md-12 begin -->
          <div class="carousel slide" id="myCarousel"> <!--carousel slide  begin -->

             <ol class="carousel-indicators"> <!--carousel-indicators  begin -->
                <li class="active" data-target="#myCarousel" data-slide-to="0"> </li>
                <li data-target="#myCarousel" data-slide-to="1"> </li>
                <li data-target="#myCarousel" data-slide-to="2"> </li>
                <li data-target="#myCarousel" data-slide-to="3"> </li>

             </ol> <!--carousel-indicators  ends -->

             <div class="carousel-inner"> <!--carousel-inner bgins -->
                <div class="item active">
                    <img src="admin_area/slides_images/slide1.jpg" alt="Slider Image">
                </div>

                <div class="item">
                    <img src="admin_area/slides_images/slide2.jpg" alt="Slider Image">
                </div>

                <div class="item">
                    <img src="admin_area/slides_images/slide3.jpg" alt="Slider Image">
                </div>

                <div class="item">
                    <img src="admin_area/slides_images/slide4.jpg" alt="Slider Image">
                </div>

             </div> <!--carousel-inner ends -->

             <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!--left carousel-control begins -->

                <span class="glyphicon glyphicon-chevron-left"></span>

                <span class="sr-only">Previous</span>

             </a> <!--left carousel-control ends -->

              <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!--right carousel-control begins -->

                <span class="glyphicon glyphicon-chevron-right"></span>

                <span class="sr-only">Next</span>

             </a> <!--right carousel-control ends -->

          </div>

       </div> <!--carousel slide ends  -->

    </div> <!--container slider ends -->
    <div id="advantages"> <!--advantages begins -->

       <div class="container"> <!--container begins -->

         <div class="same-height-row"> <!--same-height-row begins -->

            <div class="col-sm-4"> <!--col-sm-4 begins -->

              <div class="box same-height"> <!--box same-height begins -->

                <div class="icon"> <!--icon begin -->
                     <i class="fa fa-heart"></i>
                </div> <!--icon ends -->
                 <h3><a href="#">Best Offer</a></h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

              </div> <!--box same-height ends -->

            </div><!--col-sm-4 ends -->

            <div class="col-sm-4"> <!--col-sm-4 begins -->

              <div class="box same-height"> <!--box same-height begins -->

                <div class="icon"> <!--icon begin -->
                     <i class="fa fa-tag"></i>
                </div> <!--icon ends -->
                 <h3><a href="#">Best Prices</a></h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

              </div> <!--box same-height ends -->

            </div><!--col-sm-4 ends -->

            <div class="col-sm-4"> <!--col-sm-4 begins -->

              <div class="box same-height"> <!--box same-height begins -->

                <div class="icon"> <!--icon begin -->
                     <i class="fa fa-thumbs-up"></i>
                </div> <!--icon ends -->
                 <h3><a href="#">100% Original</a></h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

              </div> <!--box same-height ends -->

            </div><!--col-sm-4 ends -->

         </div> <!--same-height-row ends -->


       </div> <!--container ends -->

    </div> <!--advantages ends -->
    <div id="hot"> <!--hot begins -->

       <div class="box"> <!--box begins -->

           <div class="container"> <!--container begins -->


           </div> <!--box ends -->

       </div> <!--container ends -->

    </div> <!--hot ends -->

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>

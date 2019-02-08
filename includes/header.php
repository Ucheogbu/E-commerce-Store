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

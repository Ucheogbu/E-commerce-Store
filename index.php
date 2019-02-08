    <?php
    include("includes/header.php")
    ?>


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

               <div class="col-md-12">  <!--col-md-12 begins -->

                  <h2>
                      Our Latest Products
                  </h2>

               </div>  <!--col-md-12 ends -->

           </div> <!--box ends -->

       </div> <!--container ends -->

    </div> <!--hot ends -->

    <div id="content" class="container"> <!--container begins -->
    <div class="row"> <!--row begins -->

        <div class="col-sm-4 col-sm-5 single"> <!--col-sm-4 col-sm-5 single begins -->
           <div class="product">  <!--product begins -->

              <a href="details.php">

                  <img class="img-responsive" src="admin_area/product_images/prod1.jpg" alt=" Product 1">

              </a>
              <div class="text"> <!--text begins -->
                 <h3>
                     <a href="details.php">
                         Surfing Boards
                     </a>
                 </h3>

                 <p class="price">
                     $800
                 </p>

                 <p class="button">
                     <a href="details.php" class="btn btn-default">
                         View Details
                     </a>
                    <a href="details.php" class="btn btn-primary">
                         <i class="fa fa-shopping-cart">
                         Add To Cart
                         </i>
                     </a>
                 </p>

              </div> <!--text end s -->

           </div> <!--product ends -->

        </div><!--col-sm-4 col-sm-5 single ends -->

        <div class="col-sm-4 col-sm-5 single"> <!--col-sm-4 col-sm-5 single begins -->
           <div class="product">  <!--product begins -->

              <a href="details.php">

                  <img class="img-responsive" src="admin_area/product_images/prod2.jpg" alt=" Product 2">

              </a>
              <div class="text"> <!--text begins -->
                 <h3>
                     <a href="details.php">
                        Flowers
                     </a>
                 </h3>

                 <p class="price">
                     $8
                 </p>

                 <p class="button">
                     <a href="details.php" class="btn btn-default">
                         View Details
                     </a>
                     <a href="details.php" class="btn btn-primary">
                         <i class="fa fa-shopping-cart">
                         Add To Cart
                         </i>
                     </a>
                 </p>

              </div> <!--text end s -->

           </div> <!--product ends -->

        </div><!--col-sm-4 col-sm-5 single ends -->

        <div class="col-sm-4 col-sm-5 single"> <!--col-sm-4 col-sm-5 single begins -->
           <div class="product">  <!--product begins -->

              <a href="details.php">

                  <img class="img-responsive" src="admin_area/product_images/prod3.jpg" alt=" Product 2">

              </a>
              <div class="text"> <!--text begins -->
                 <h3>
                     <a href="details.php">
                        love
                     </a>
                 </h3>

                 <p class="price">
                     $8000
                 </p>

                 <p class="button">
                     <a href="details.php" class="btn btn-default">
                         View Details
                     </a>
                     <a href="details.php" class="btn btn-primary">
                         <i class="fa fa-shopping-cart">
                         Add To Cart
                         </i>
                     </a>
                 </p>

              </div> <!--text end s -->

           </div> <!--product ends -->

        </div><!--col-sm-4 col-sm-5 single ends -->

        <div class="col-sm-4 col-sm-5 single"> <!--col-sm-4 col-sm-5 single begins -->
           <div class="product">  <!--product begins -->

              <a href="details.php">

                  <img class="img-responsive" src="admin_area/product_images/prod4.jpg" alt=" Product 4">

              </a>
              <div class="text"> <!--text begins -->
                 <h3>
                     <a href="details.php">
                        Eggs
                     </a>
                 </h3>

                 <p class="price">
                     $200
                 </p>

                 <p class="button">
                     <a href="details.php" class="btn btn-default">
                         View Details
                     </a>
                     <a href="details.php" class="btn btn-primary">
                         <i class="fa fa-shopping-cart">
                         Add To Cart
                         </i>
                     </a>
                 </p>

              </div> <!--text end s -->

           </div> <!--product ends -->

        </div><!--col-sm-4 col-sm-5 single ends -->

        <div class="col-sm-4 col-sm-5 single"> <!--col-sm-4 col-sm-5 single begins -->
           <div class="product">  <!--product begins -->

              <a href="details.php">

                  <img class="img-responsive" src="admin_area/product_images/prod1.jpg" alt=" Product 1">

              </a>
              <div class="text"> <!--text begins -->
                 <h3>
                     <a href="details.php">
                         Surfing Boards
                     </a>
                 </h3>

                 <p class="price">
                     $800
                 </p>

                 <p class="button">
                     <a href="details.php" class="btn btn-default">
                         View Details
                     </a>
                    <a href="details.php" class="btn btn-primary">
                         <i class="fa fa-shopping-cart">
                         Add To Cart
                         </i>
                     </a>
                 </p>

              </div> <!--text end s -->

           </div> <!--product ends -->

        </div><!--col-sm-4 col-sm-5 single ends -->

        <div class="col-sm-4 col-sm-5 single"> <!--col-sm-4 col-sm-5 single begins -->
           <div class="product">  <!--product begins -->

              <a href="details.php">

                  <img class="img-responsive" src="admin_area/product_images/prod2.jpg" alt=" Product 2">

              </a>
              <div class="text"> <!--text begins -->
                 <h3>
                     <a href="details.php">
                        Flowers
                     </a>
                 </h3>

                 <p class="price">
                     $8
                 </p>

                 <p class="button">
                     <a href="details.php" class="btn btn-default">
                         View Details
                     </a>
                     <a href="details.php" class="btn btn-primary">
                         <i class="fa fa-shopping-cart">
                         Add To Cart
                         </i>
                     </a>
                 </p>

              </div> <!--text end s -->

           </div> <!--product ends -->

        </div><!--col-sm-4 col-sm-5 single ends -->

        <div class="col-sm-4 col-sm-5 single"> <!--col-sm-4 col-sm-5 single begins -->
           <div class="product">  <!--product begins -->

              <a href="details.php">

                  <img class="img-responsive" src="admin_area/product_images/prod3.jpg" alt=" Product 2">

              </a>
              <div class="text"> <!--text begins -->
                 <h3>
                     <a href="details.php">
                        love
                     </a>
                 </h3>

                 <p class="price">
                     $8000
                 </p>

                 <p class="button">
                     <a href="details.php" class="btn btn-default">
                         View Details
                     </a>
                     <a href="details.php" class="btn btn-primary">
                         <i class="fa fa-shopping-cart">
                         Add To Cart
                         </i>
                     </a>
                 </p>

              </div> <!--text end s -->

           </div> <!--product ends -->

        </div><!--col-sm-4 col-sm-5 single ends -->

        <div class="col-sm-4 col-sm-5 single"> <!--col-sm-4 col-sm-5 single begins -->
           <div class="product">  <!--product begins -->

              <a href="details.php">

                  <img class="img-responsive" src="admin_area/product_images/prod4.jpg" alt=" Product 4">

              </a>
              <div class="text"> <!--text begins -->
                 <h3>
                     <a href="details.php">
                        Eggs
                     </a>
                 </h3>

                 <p class="price">
                     $200
                 </p>

                 <p class="button">
                     <a href="details.php" class="btn btn-default">
                         View Details
                     </a>
                     <a href="details.php" class="btn btn-primary">
                         <i class="fa fa-shopping-cart">
                         Add To Cart
                         </i>
                     </a>
                 </p>

              </div> <!--text end s -->

           </div> <!--product ends -->

        </div><!--col-sm-4 col-sm-5 single ends -->

        <div class="col-sm-4 col-sm-5 single"> <!--col-sm-4 col-sm-5 single begins -->
           <div class="product">  <!--product begins -->

              <a href="details.php">

                  <img class="img-responsive" src="admin_area/product_images/prod1.jpg" alt=" Product 1">

              </a>
              <div class="text"> <!--text begins -->
                 <h3>
                     <a href="details.php">
                         Surfing Boards
                     </a>
                 </h3>

                 <p class="price">
                     $800
                 </p>

                 <p class="button">
                     <a href="details.php" class="btn btn-default">
                         View Details
                     </a>
                    <a href="details.php" class="btn btn-primary">
                         <i class="fa fa-shopping-cart">
                         Add To Cart
                         </i>
                     </a>
                 </p>

              </div> <!--text end s -->

           </div> <!--product ends -->

        </div><!--col-sm-4 col-sm-5 single ends -->

        <div class="col-sm-4 col-sm-5 single"> <!--col-sm-4 col-sm-5 single begins -->
           <div class="product">  <!--product begins -->

              <a href="details.php">

                  <img class="img-responsive" src="admin_area/product_images/prod2.jpg" alt=" Product 2">

              </a>
              <div class="text"> <!--text begins -->
                 <h3>
                     <a href="details.php">
                        Flowers
                     </a>
                 </h3>

                 <p class="price">
                     $8
                 </p>

                 <p class="button">
                     <a href="details.php" class="btn btn-default">
                         View Details
                     </a>
                     <a href="details.php" class="btn btn-primary">
                         <i class="fa fa-shopping-cart">
                         Add To Cart
                         </i>
                     </a>
                 </p>

              </div> <!--text end s -->

           </div> <!--product ends -->

        </div><!--col-sm-4 col-sm-5 single ends -->

        <div class="col-sm-4 col-sm-5 single"> <!--col-sm-4 col-sm-5 single begins -->
           <div class="product">  <!--product begins -->

              <a href="details.php">

                  <img class="img-responsive" src="admin_area/product_images/prod3.jpg" alt=" Product 2">

              </a>
              <div class="text"> <!--text begins -->
                 <h3>
                     <a href="details.php">
                        love
                     </a>
                 </h3>

                 <p class="price">
                     $8000
                 </p>

                 <p class="button">
                     <a href="details.php" class="btn btn-default">
                         View Details
                     </a>
                     <a href="details.php" class="btn btn-primary">
                         <i class="fa fa-shopping-cart">
                         Add To Cart
                         </i>
                     </a>
                 </p>

              </div> <!--text end s -->

           </div> <!--product ends -->

        </div><!--col-sm-4 col-sm-5 single ends -->

        <div class="col-sm-4 col-sm-5 single"> <!--col-sm-4 col-sm-5 single begins -->
           <div class="product">  <!--product begins -->

              <a href="details.php">

                  <img class="img-responsive" src="admin_area/product_images/prod4.jpg" alt=" Product 4">

              </a>
              <div class="text"> <!--text begins -->
                 <h3>
                     <a href="details.php">
                        Eggs
                     </a>
                 </h3>

                 <p class="price">
                     $200
                 </p>

                 <p class="button">
                     <a href="details.php" class="btn btn-default">
                         View Details
                     </a>
                     <a href="details.php" class="btn btn-primary">
                         <i class="fa fa-shopping-cart">
                         Add To Cart
                         </i>
                     </a>
                 </p>

              </div> <!--text end s -->

           </div> <!--product ends -->

        </div><!--col-sm-4 col-sm-5 single ends -->

    </div> <!--row ends -->

    </div> <!--container ends -->

    <?php
    include("includes/footer.php")
    ?>


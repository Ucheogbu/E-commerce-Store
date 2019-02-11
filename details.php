<?php
include("includes/header.php")
?>

    <div id="content"> <!--content start-->

    <div class="container"> <!--container start-->

        <div class="col-md-12"> <!--col-md-12 start-->

           <ul class="breadcrumb"> <!--breadcrumb start-->
               <li>

               <a href="index.php"> Home</a>

               </li>

               <li>
                   Shop
               </li>

           </ul> <!--breadcrumb ends-->

        </div> <!--col-md-12 ends-->

        <div > <!--sidebar begins -->
<?php
include("includes/sidebar.php")
?>

        </div> <!--sidebar ends-->
        <div class="col-md-9"> <!--col-md-9 begins-->
            <div id="productMain" class="row"> <!--row begins-->
                <div class="col-sm-6"> <!--col-sm-6 begins-->
                    <div id="mainImage"> <!--#mainImage begins-->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!--carousel slide begins-->
                            <ol class="carousel-indicators"> <!--carousel-indicators begins-->
                                <li data-target="#myCarousel" data-slide-to="0" class="active">

                                </li>
                                <li data-target="#myCarousel" data-slide-to="1">

                                </li>
                                <li data-target="#myCarousel" data-slide-to="2">

                                </li>
                            </ol>  <!--carousel-indicators ends-->

                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img  class="img-responsive" src="admin_area/product_images/prod1.jpg" alt="Product6"></center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" src="admin_area/product_images/prod2.jpg" alt="Product5"></center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" src="admin_area/product_images/prod4.jpg" alt="Product3"></center>
                                </div>
                            </div>

                            <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!--left carousel-control Begins-->
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a> <!--left carousel-control ends-->

                             <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!--right carousel-control Begins-->
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a> <!--right carousel-control  ends-->

                        </div> <!--carousel slide ends-->
                    </div> <!--#mainImage ends-->
                </div> <!--col-sm-6 ends-->

                <div class="col-sm-6"> <!--col-sm-6 begins-->
                    <div class="box"> <!--box begins-->
                        <h1 class="text-center">Surfing Boards</h1>

                            <form action="details.php" class="form-horizontal" method="post"> <!--form-horizontal begins-->
                                <div class="form-group"> <!--form-group begins-->
                                <label for="" class="col-md-5 control-label">Products Quantity</label>

                                <div class="col-md-7"> <!--col-sm-7 begins-->
                                       <select name="product_qty" id="" class="form-control"> <!--select form-control begins-->
                                        <option>1</option>
                                        <option >2</option>
                                        <option >3</option>
                                        <option >4</option>
                                        <option >5</option>
                                        </select> <!--select form-control ends-->
                                </div> <!--col-sm-7 ends-->

                                </div> <!--form-group ends-->

                                <div class="form-group"> <!--form-group begins-->
                                    <label class="col-md-5 control-label">Product Size</label>

                                    <div class="col-md-7"> <!--col-md-7 begins-->
                                        <select name="product_size" class="form-control"> <!--form-control begins-->
                                            <option>Select a Size</option>
                                            <option >Small</option>
                                            <option >Medium</option>
                                            <option >Large</option>
                                        </select> <!--form-control ends-->
                                    </div> <!--col-md-7 ends-->

                                </div> <!--form-group ends-->

                                <p class="price">$800</p>
                                <p class="text-center button"><button class="btn btn-primary i fa fa-shopping-cart">Add to Cart</button></p>

                            </form>   <!--form-horizontal ends-->

                    </div> <!--box ends-->

                    <div class="row" id="thumbs">



                    </div>

                </div> <!--col-sm-6 ends-->

            </div> <!--row ends-->
        </div> <!--col-md-9 ends-->
</div> <!--container  ends-->

</div> <!--content ends-->


<?php
include("includes/footer.php")
?>

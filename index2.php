<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>York Burger & Pizza</title>
    <link rel="icon" type="image/x-icon" href="images/favicon-32x32.png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/responsive2.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .modal-content {
      display: flex;
      flex-direction: column;
    }
    .modal-body {
        overflow: auto;
        max-height: calc(100vh - 60px);
    }
    .modal-header, .modal-footer {
        flex-grow: 1;
        flex-shrink: 0;
        flex-basis: auto;
    }
    </style>

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header mb-5">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="index.php">
                                        <img src="images/logo.png" alt="" height="60px" width="160px" style="margin-top: -10px">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#menu">Menu</a></li>
                                    <li><a href="#gallery">Gallery</a></li>
                                    <li><a href="#catering">Catering</a></li>
                                    <li><a href="#footer">Contact us</a></li>
                                    <!-- <li><a data-toggle="modal" data-target="#exampleModal">Order</a></li> -->
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->
	
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Experience our  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Burgers:Pizzas:Fries:Drinks" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2 class="text-success">Halal Foods </h2>
                            <p>Experience the Fusion of Authenticity and Taste, Where Halal Meets Gourmet in Every Bite!</p>
                            <div class="book-btn">
                                <a onclick="window.location.href='tel:+1-416-243-3034'" class="table-btn hvr-underline-from-center">Call for order</a>
                                <a class="table-btn hvr-underline-from-center" data-toggle="modal" data-target="#exampleModal">Order Online</a>
                            </div>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <section class="food_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> About Us </h2>
                        <h3>IT STARTED, QUITE SIMPLY, LIKE THIS...</h3>
                        Welcome to York Burger and Pizza, your go-to destination for delectable halal food in Canada. Situated in the heart of our vibrant community, we pride ourselves on offering a mouthwatering selection of burgers and pizzas crafted with the finest ingredients, all prepared in accordance with halal dietary standards.

                        At York Burger and Pizza, we believe that great food starts with quality ingredients. 
                        
                        That's why we source only the freshest meats, vegetables, and spices to create our signature dishes. Whether you're craving a juicy burger piled high with toppings or a savory pizza bursting with flavor, our diverse menu has something to satisfy every appetite.

                        But it's not just about the food; it's about the experience. Our cozy and inviting atmosphere provides the perfect backdrop for enjoying a meal with family and friends. From our friendly staff to our commitment to exceptional service, we strive to ensure that every visit to York Burger and Pizza is a memorable one.

                        Join us at York Burger and Pizza and experience the tantalizing flavors of our halal-certified cuisine. From classic favorites to innovative creations, there's always something delicious waiting for you here.
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="images/about-main.jpg" alt="About Main Image">
                            <img class="about-inset" src="images/about-inset.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    </div>

    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Today's Special </h2>
                        <h5 class="title-caption text-center"> Here is our special menu for today. </h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            FISH AND CHIPS
                                            <div class="line"></div>
                                            <div class="dit-line">
                                              1 pc fish $3.75
                                              1 pc fish & chip $6.49
                                              2 pc fish & chips $9.49
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/special-menu-1.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            SPECIAL PIZZA
                                            <div class="line"></div>
                                            <div class="dit-line">
                                              1 Medium Pizza
                                              3 Toppings
                                              14 Chicken Wings
                                              2 Pops
                                              $27.99
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/special-menu-2.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            DOUBLE CHEESE BACON BURGER
                                            <div class="line"></div>
                                            <div class="dit-line">
                                              Combo $13.49
                                              Burger Only $9.49
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                
                                    <img src="images/IMG_1927.jpg" alt="sp-menu">
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->

    <div id="menu" class=" pad-top-100 pad-bottom-100">
        <section class="food_section layout_padding">
            <div class="container">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title text-center">
                    Our Menu 	
                </h2>
            </div>
              <ul class="filters_menu">
                
                <li class="active" data-filter=".burger">Burger</li>
                <li data-filter=".pizza">Pizza</li>
                <li data-filter=".chicken">Chicken</li>
                <li data-filter=".sides">Sides</li>
                <li data-filter=".drinks">Drinks</li>
              </ul>
        
              <div class="filters-content">
                <div class="row grid">
                  <?php
                    include 'connection.php';
                    $sql = "SELECT * FROM items WHERE status=1";
                    $result = mysqli_query($con, $sql);
                   
                      // output data of each row
                      while($row = mysqli_fetch_array($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        
                        $image = $row['image'];
                        $ingredients = $row['ingredients'];
                        $category = $row['category'];
                  ?>
                  
                  <div class="col-sm-6 col-lg-4 all  <?php echo $category; ?>">
                    <div class="box2">
                      <div>
                        <div class="img-box2">
                          <img src="images/<?php echo $image; ?>" alt="">
                        </div>
                        <div class="detail-box2">
                          <h6>
                          <?php echo $name; ?>
                          </h6>
                          <p>
                          <?php echo nl2br($ingredients); ?>
                        </p>
                          <div class="options">
                            <h6>
                              Order Now
                            </h6>
                            <a data-toggle="modal" data-target="#exampleModal"">
                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                <g>
                                  <g>
                                    <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                 c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                  </g>
                                </g>
                                <g>
                                  <g>
                                    <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                 C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                 c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                 C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                  </g>
                                </g>
                                <g>
                                  <g>
                                    <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                 c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                  </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }  ?>

                </div>
              </div>
              <div class="btn-box2">
                <a href="">
                  Order Now
                </a>
              </div>
            </div>
          </section>
    </div>
    <!-- end menu -->

  

    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Gallery	
					</h2>
                        <p class="title-caption text-center">Some pictures of our gallery </p>
                    </div>
                    <div class="gal-container clearfix">
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#1">
                                    <img src="images/gallery_01.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_01.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 1 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#2">
                                    <img src="images/gallery_02.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_02.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 2 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#3">
                                    <img src="images/gallery_03.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_03.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 3 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#4">
                                    <img src="images/gallery_04.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_04.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 4 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#5">
                                    <img src="images/gallery_05.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_05.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 5 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#9">
                                    <img src="images/gallery_06.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_06.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 6 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#10">
                                    <img src="images/gallery_07.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_07.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 7 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#11">
                                    <img src="images/gallery_08.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_08.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 8 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#12">
                                    <img src="images/gallery_09.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_09.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 9 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#13">
                                    <img src="images/gallery_10.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_10.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 10 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end gallery-main -->




    <div id="catering" class="about-main pad-top-100 pad-bottom-100">
        <section class="food_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="images/about-main.jpg" alt="About Main Image">
                            <!-- <img class="about-inset" src="images/about-inset.jpg" alt="About Inset Image"> -->
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> Catering </h2>
                        <h3>LET'S TALK ABOUT OUR CATERING SERVICES...</h3>
                        With a diverse selection of mouthwatering options, our catering menu is designed to satisfy every palate. Treat your guests to an array of gourmet burgers, from classic cheeseburgers to specialty creations loaded with premium toppings. Or indulge in our freshly baked pizzas, featuring a variety of tantalizing combinations that are sure to please any crowd.

                        Our experienced team is dedicated to making your event unforgettable. From customized menu planning to seamless delivery and setup, we handle every detail with precision and care. With York Burger and Pizza catering, you can relax and enjoy your event while we take care of the rest.

                        Impress your guests with the irresistible flavors of our halal-certified cuisine. Contact us today to discuss your catering needs and let us help you create an unforgettable dining experience for your next event.
                    </div>
                </div>
                <!-- end col -->
                
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    </div>
    <!-- end reservations-main -->


 <!-- Button trigger modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch modal
  </button>

  <!-- Main Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content" style="overflow-y:scroll;">
        <div class="modal-header">
          <p class="modal-title" id="exampleModalLabel">Product List & Cart</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <!-- Left Part - Product List -->
            <div class="col-lg-7">
              <p class="bg-info" style="font-weight: 900; font-size: large;">Item List<p>
              <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-secondary" onclick="filterProducts('burger')">
                  <input type="radio" name="cat" id="burger" autocomplete="off" checked> Burger
                </label>
                <label class="btn btn-secondary active" onclick="filterProducts('pizza')">
                  <input type="radio" name="cat" id="pizza" autocomplete="off" > Pizza
                </label>

                <label class="btn btn-secondary active" onclick="filterProducts('chicken')">
                  <input type="radio" name="cat" id="chicken" autocomplete="off" > Chicken
                </label>
                <label class="btn btn-secondary active" onclick="filterProducts('sides')">
                  <input type="radio" name="cat" id="sides" autocomplete="off" > Sides
                </label>
                <label class="btn btn-secondary active" onclick="filterProducts('drinks')">
                  <input type="radio" name="cat" id="drinks" autocomplete="off" > Drinks
                </label>
               
               
              </div>
              <div id="productList">
                <!-- Product list will be dynamically populated here -->
                <?php
                  $qry = "SELECT * FROM prices WHERE status=1";
                  $r = mysqli_query($con, $qry);
                  while ($row = mysqli_fetch_array($r)) {
                    echo '<div class="product-item" data-category="' . $row['category'] . '" data-name="' . $row['name'] . '" data-price="' . $row['price'] . '">
                            <img height="45px" width= "50px" src="images/' . $row['image'] . '" alt="Product 1" class="img-fluid mb-2">
                            <span onmouseover="changeBackgroundColor("#e0e0e0")" >' . $row['name'] . ' <br> <b>$' . $row['price'] . '</b></span>
                            <button class="btn btn-sm btn-primary ml-2" onclick="showAddOnModal(\'' . $row['name'] . '\', ' . $row['price'] . ',' . $row['id'] . ')">+</button>
                            <hr>
                          </div>';
                  }
                ?>
                <!-- <div class="product-item" data-category="pizza" data-name="Product 1" data-price="10">
                  <img src="product1.jpg" alt="Product 1" class="img-fluid mb-2">
                  <span onclick="showAddOnModal('Product 1', 10)">Product 1 - $10</span>
                  <button class="btn btn-sm btn-primary ml-2" onclick="showAddOnModal('Product 1', 10)">+</button>
                </div>
                <div class="product-item" data-category="pizza" data-name="Product 2" data-price="15">
                  <img src="product2.jpg" alt="Product 2" class="img-fluid mb-2">
                  <span>Product 2 - $15</span>
                  <button class="btn btn-sm btn-primary ml-2" onclick="showAddOnModal('Product 2', 15)">+</button>
                </div>
                <div class="product-item" data-category="burger" data-name="Product 3" data-price="20" style="display: none;">
                  <img src="product3.jpg" alt="Product 3" class="img-fluid mb-2">
                  <span>Product 3 - $20</span>
                  <button class="btn btn-sm btn-primary ml-2" onclick="showAddOnModal('Product 3', 20)">+</button>
                </div>
                <div class="product-item" data-category="burger" data-name="Product 4" data-price="25" style="display: none;">
                  <img src="product4.jpg" alt="Product 4" class="img-fluid mb-2">
                  <span>Product 4 - $25</span>
                  <button class="btn btn-sm btn-primary ml-2" onclick="showAddOnModal('Product 4', 25)">+</button>
                </div> -->
              </div>
            </div>
            <!-- Right Part - Cart -->
            <div class="col-lg-5">
              <p class="bg-info" style="font-weight: 900; font-size: large;">Cart<p>
              <div id="cart">
                <!-- Cart items will be dynamically populated here -->
              </div>
              <hr>
              <div id="totalPrice">
                Total: $0.00
              </div>
              <hr>
              <form id="dataForm" action="orderProcess.php" method="post">
                <input type="hidden" id="order" name="order">
                <input type="hidden" id="price" name="price">
                <button type="button" class="btn btn-success" onclick="confirmOrder()">Proceed to checkout</button>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
         
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         
        </div>
      </div>
    </div>
  </div>

  <!-- Sub-Modal for Add-ons -->
  <div class="modal" id="addOnModal" role="dialog" aria-labelledby=""
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Select Add-ons</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="addonOptions">
          <!-- Add-on options will be dynamically populated here based on the selected category -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="addToCartWithAddOns()">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- JavaScript to handle dynamic content and interactions -->
  <script>
    
    filterProducts('burger');
    function onlyOne(checkbox) {
      var checkboxes = document.getElementsByName('check')
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false
        })
    }
    let selectedProduct;
    let selectedProductPrice;

    // Function to show add-on modal
    function showAddOnModal(productName, price, id) {
      console.log(id);
      selectedProduct = productName;
      selectedProductPrice = price;
      
      // Clear previous add-on options
      document.getElementById('addonOptions').innerHTML = '';
      
      // Populate add-on options based on the selected category
      const category = document.querySelector('input[name="cat"]:checked').getAttribute('id');
      //const category = 'pizza';
      
      let addOnsHTML = '';
      
      
      if (category === 'pizza') {
        addOnsHTML += `
          <p style="font-weight: 900; font-size: large;"> Toppings </p>
          
          <table class="table table-striped"> 
            <tbody>
                <tr>
                    <td><label for="addon1"> Tomato </label></td>
                    <td><input type="radio" class="form-check-input addon-checkbox" id="addon1" value="Tomato" data-price="0.00" name="addon"> </td>
                </tr>
                <tr>
                    <td><label for="addon1"> Bacon </label></td>
                    <td><input type="radio" class="form-check-input addon-checkbox" id="addon2" value="Bacon" data-price="0.00" name="addon"></td>
                </tr>
                <tr>
                    <td><label for="addon1"> Black Olives </label></td>
                    <td><input type="radio" class="form-check-input addon-checkbox" id="addon2" value="Black Olives" data-price="0.00" name="addon"></td>
                </tr>
                <tr>
                    <td><label for="addon1"> Feta Cheese </label></td>
                    <td><input type="radio" class="form-check-input addon-checkbox" id="addon2" value="Feta Cheese" data-price="0.00" name="addon"></td>
                </tr>
                <tr>
                    <td><label for="addon1"> Chicken </label></td>
                    <td><input type="radio" class="form-check-input addon-checkbox" id="addon2" value="Chicken" data-price="0.00" name="addon"></td>
                </tr>
                <tr>
                    <td><label for="addon1"> Green Olives </label></td>
                    <td><input type="radio" class="form-check-input addon-checkbox" id="addon2" value="Green Olives" data-price="0.00" name="addon"></td>
                </tr>
            </tbody>
          </table>
          
          <p style="font-weight: 900; font-size: large;"> Extra </p>
          
          <table class="table "> 
            <tbody>
                <tr>
                    <td><label for="addon1"> Chicken Sausage - ($2.50) </label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon2" value="Chicken Sausage" data-price="2.50"> </td>
                </tr>
                <tr>
                    <td><label for="addon1"> Hot Sauce - ($1.50) </label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon2" value="Hot Sauce" data-price="1.50"> </td>
                </tr>
                <tr>
                    <td><label for="addon1"> Tomato Sauce - ($1.50) </label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon2" value="Tomato Sauce" data-price="1.50"> </td>
                </tr>
            </tbody>
          </table>
         
        `;
      } else if (category === 'burger') {
        addOnsHTML += `
          <p style="font-weight: 900; font-size: large;"> Combo Item </p>
          <table class="table table-striped"> 
            <tbody>
                <tr>
                    <td><label for="addon3">French Fry</label></td>
                    <td><input type="radio" name="same" class="form-check-input addon-checkbox" id="addon3" value="No sauce" data-price="0.00" onclick="onlyOne(this)"></td>
                </tr>
                <tr>
                    <td><label for="addon4">Fish Fry</label></td>
                    <td><input type="radio" name="same" class="form-check-input addon-checkbox" id="addon4" value="BBQ" data-price="0.00" onclick="onlyOne(this)"></td>
                    
                </tr>
                <tr>
                    <td><label for="addon4">Potato Wedges</label></td>
                    <td><input type="radio" name="same" class="form-check-input addon-checkbox" id="addon4" value="Hot" data-price="0.00" onclick="onlyOne(this)"></td>
                </tr>
            </tbody>
          </table>
          <p style="font-weight: 900; font-size: large;"> Extras </p>
          <table class="table table-striped"> 
            <tbody>
                <tr>
                    <td><label for="addon3">Cheese Patty - ($3.50)</label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon3" value="Cheese Patty" data-price="3.50" onclick="onlyOne(this)"></td>
                </tr>
                <tr>
                    <td><label for="addon4">BBQ Sauce - ($2.50)</label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon4" value="BBQ Sauce" data-price="2.50" onclick="onlyOne(this)"></td>
                    
                </tr>
                <tr>
                    <td><label for="addon4">Hot Sauce - ($1.50)</label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon4" value="Hot Sauce" data-price="1.50" onclick="onlyOne(this)"></td>
                </tr>
            </tbody>
          </table>
        `;
      } else if (category === 'chicken') {
        addOnsHTML += `
        <p style="font-weight: 900; font-size: large;"> Extras </p>
          <table class="table table-striped"> 
            <tbody>
                <tr>
                    <td><label for="addon3">Tomato Sauce - ($2.50)</label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon3" value="Cheese Patty" data-price="2.50" onclick="onlyOne(this)"></td>
                </tr>
                <tr>
                    <td><label for="addon4">BBQ Sauce - ($2.50)</label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon4" value="BBQ Sauce" data-price="2.50" onclick="onlyOne(this)"></td>
                    
                </tr>
                <tr>
                    <td><label for="addon4">Hot Sauce - ($1.50)</label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon4" value="Hot Sauce" data-price="1.50" onclick="onlyOne(this)"></td>
                </tr>
            </tbody>
          </table>
        `;
      }
        else if (category === 'sides') {
        addOnsHTML += `
        <p style="font-weight: 900; font-size: large;"> Extras </p>
          <table class="table table-striped"> 
            <tbody>
                <tr>
                    <td><label for="addon3">Tomato Sauce - ($2.50)</label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon3" value="Cheese Patty" data-price="2.50" onclick="onlyOne(this)"></td>
                </tr>
                <tr>
                    <td><label for="addon4">BBQ Sauce - ($2.50)</label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon4" value="BBQ Sauce" data-price="2.50" onclick="onlyOne(this)"></td>
                    
                </tr>
                <tr>
                    <td><label for="addon4">Hot Sauce - ($1.50)</label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon4" value="Hot Sauce" data-price="1.50" onclick="onlyOne(this)"></td>
                </tr>
            </tbody>
          </table>
        `;
        }
        else if (category === 'drinks') {
        addOnsHTML += `
        <p style="font-weight: 900; font-size: large;"> Extras </p>
          <table class="table table-striped"> 
            <tbody>
                <tr>
                    <td><label for="addon3">Ice Cube - ($1.50)</label></td>
                    <td><input type="checkbox" class="form-check-input addon-checkbox" id="addon3" value="Ice Cube" data-price="1.50" onclick="onlyOne(this)"></td>
                </tr>
            </tbody>
          </table>
        `;
      }
      
      document.getElementById('addonOptions').innerHTML = addOnsHTML;
      
      $('#addOnModal').modal('show');
    }

    // Function to add product to cart with selected add-ons
    function addToCartWithAddOns() {
      const selectedAddOns = [];
      const selectedAddOnInputs = document.querySelectorAll('.addon-checkbox:checked');
      selectedAddOnInputs.forEach(input => {
        selectedAddOns.push({
          name: input.value,
          price: parseFloat(input.getAttribute('data-price'))
        });
      });

      let itemDescription = selectedProduct;
      let totalPrice = selectedProductPrice;

      selectedAddOns.forEach(addOn => {
        itemDescription += ` + ${addOn.name}`;
        totalPrice += addOn.price;
      });

      const cart = document.getElementById('cart');
      const cartItem = document.createElement('div');
      cartItem.classList.add('cart-item');
      cartItem.innerHTML = `
        <div class="mb-2">
          <span>${itemDescription} - $${totalPrice.toFixed(2)}</span>
          <button class="btn btn-sm btn-danger ml-2" onclick="removeFromCart(this)">x</button>
          <hr>
        </div>
      `;
      cart.appendChild(cartItem);
      updateTotalPrice();
      $('#addOnModal').modal('hide');
    }

    // Function to remove product from cart
    function removeFromCart(button) {
      button.parentElement.parentElement.remove();
      updateTotalPrice();
    }

    // Function to update total price
    function updateTotalPrice() {
      const cartItems = document.querySelectorAll('.cart-item');
      let totalPrice = 0;
      cartItems.forEach(item => {
        const price = parseFloat(item.textContent.match(/\$([\d.]+)/)[1]);
        totalPrice += price;
      });
      document.getElementById('totalPrice').textContent = `Total: $${totalPrice.toFixed(2)}`;
    }

    // Function to confirm order
    function confirmOrder() {
      const cartItems = document.querySelectorAll('.cart-item');
      if (cartItems.length === 0) {
        alert('Your cart is empty!');
      } else {
        let orderDetails = '';
        let totalPrice = 0;
        cartItems.forEach(item => {
          
          item.textContent = item.textContent.replace(/\s*x\s*$/, '');
          console.log(item.textContent.trim());
          orderDetails += `${item.textContent.trim()}\n`;
          totalPrice += parseFloat(item.textContent.match(/\$([\d.]+)/)[1]);
        });

        //alert(`Your order has been confirmed!\n\n${orderDetails}\nTotal Price: $${totalPrice.toFixed(2)}`);
        document.getElementById("order").value = orderDetails;
        document.getElementById("price").value = totalPrice;
        document.getElementById("dataForm").submit();
       
      }
    }

    // Function to filter products by category
    function filterProducts(category) {
      const productItems = document.querySelectorAll('.product-item');
      productItems.forEach(item => {
        const itemCategory = item.getAttribute('data-category');
        if (itemCategory === category) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    }
  </script>
  

    <div id="footer" class="footer-main">
        <!-- <div class="footer-news pad-top-100 pad-bottom-70 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="ft-title color-white text-center"> Newsletter </h2>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <form>
                            <input type="email" placeholder="Enter your e-mail id">
                            <a href="#" class="orange-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
                        </form>
                    </div>
                   
                </div>
               
            </div>
            
        </div> -->
        
        <!-- end footer-news -->
        <div class="footer-box pad-top-70">
            
            <div class="container">
                <div class="row"  style="margin-top: 50px">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="images/logo.png" alt="" width="250px" height="100px"/>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>About Us</h3>
                                <p>Welcome to York Burger and Pizza, your go-to destination for delectable halal food in Canada.</p>
                                <!-- <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul> -->

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <h3>New Menu</h3>
                                <ul>
                                    <li><a href="#menu">Popcorn Chicken</a></li>
                                    <li><a href="#menu">Grilled Chicken Poutine</a></li>
                                    <li><a href="#menu">D-Cheese Bacon Burger</a></li>
                                    <li><a href="#menu">Big Y Pizza & Wings special</a></li>
                                </ul>
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>1194 Weston Rd, York, ON M6M 4P4, Canada</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
                                      +14162433034
                                    </span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">hewaad@yahoo.ca</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Opening Hours</h3>

                                <ul>
                                    <li>
                                        <p>Monday - Wednesday </p>
                                        <span> 11:00 AM - 11:00 PM</span>
                                    </li>
                                    <li>
                                        <p>Thursday - Saturday </p>
                                        <span>  11:00 AM - 12:00 AM</span>
                                    </li>
                                    <li>
                                        <p>Sunday </p>
                                        <span>  12:00 PM - 11:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <div class="ml-5 mr-5 text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.107956378865!2d-79.49641721578733!3d43.6875189757098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b37d039b6ef7d%3A0xeca38ab0bb142e84!2sYork%20Burger%20%26%20Pizza%20(Halal)!5e0!3m2!1sen!2sbd!4v1709116848081!5m2!1sen!2sbd" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <br>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2024 York Burger is powered by <a href="#" target="_blank"></a> TermsBrain</h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <!-- jQery -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->
</body>



</html>
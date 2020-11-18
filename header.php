<?php require('functions.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iconic Home Hardware</title>
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="icon" type="image/png" href="images/miscellaneous/favicon.png">

    <!-- Fontawesome CSS Files -->
    <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Core CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

      <style type="text/css">
        .nav-link{
          display: flex;
    flex-direction: column;
    align-items: center;
        }
        .product article .pro-thumb .img-fluid {
    display: inherit;
    width: inherit;
    margin-left: auto;
    /*margin-top: 20%;*/
/*  object-fit: none; */
    margin-right: auto;
    /* justify-content: center;
      </style>
  </head>
    
    <body>  

      <!-- //Header Style One -->
      <header id="headerOne" class="header-area header-one header-desktop">

      <div class="header-mini bg-top-bar">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-md-5">
              
                <div class="navbar-lang">
                    
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle">
                          English
                        </a>
                        <div class="dropdown-menu" >
                          <a class="dropdown-item" href="#">English</a>
                          <a class="dropdown-item" href="#">Arabic</a>
                          
                        </div>
                      </div> 
                      </div>
            </div>

            <div class="col-12 col-md-7">
                <div class="pro-header-options">
                  <div class="dropdown">
                      
                      <a class="pro-avatar">Welcome&nbsp;User</a>
                  </div>
                  <div class="dropdown">
                      <a href="javascript:void(0);" class="dropdown-toggle">
                          My Account
                      </a>
                        <div class="dropdown-menu" >
                          <a class="dropdown-item" href="#">Profile</a>
                          <a class="dropdown-item" href="#">Wishlist&nbsp;(0)</a>
                          <a class="dropdown-item" href="#">Compare&nbsp;(0)</a>
                          <a class="dropdown-item" href="#">Orders</a>
                          <a class="dropdown-item" href="#">Shipping Address</a>
                          <a class="dropdown-item" href="#">Logout</a>
                        </div>
                  </div>
                </div>
                
            </div>
          </div>
        </div> 
      </div>
      <div class="header-maxi bg-header-bar">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-md-12 col-lg-2">
              <a href="index.php" class="logo" data-toggle="tooltip" data-placement="bottom" title="logo" >
                <img class="img-fluid" src="images/logo/hamza.png" alt="logo here">                                            
              </a>
            </div>
            
            <div class="col-12 col-sm-8">      
              <form class="form-inline" >
                <div class="search-field-module">                           
                  <div class="search-field-select" >
                      <select class="selectpicker">
                          <option selected>All Categories</option>
                          <?php 
                          $categories=$category->getData();
                           foreach($categories as $cat){?>
                          <option value='<?php echo $cat['id']; ?>'><?php echo $cat['name']; ?>&nbsp;</option>
                       <?php } ?>
                          </select>
                  </div>
                  <div class="search-field-wrap">
                      <input  type="search" placeholder="Search Products..." data-toggle="tooltip" data-placement="bottom" title="search item">
                      <button class="btn btn-secondary swipe-to-top" data-toggle="tooltip" data-placement="bottom" title="Search Products">
                      <i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
              <ul class="pro-header-right-options">
                <li>
                  <a href="#" class="btn" data-toggle="tooltip" data-placement="bottom" title="Wishlist">
                      <i class="far fa-heart"></i>
                      <span class="badge badge-secondary">0</span>
                  </a>
                </li>
                <li class="dropdown" data-toggle="tooltip" data-placement="bottom" title="cart">
                  <button class="btn dropdown-toggle" type="button" id="headerOneCartButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > 
                      <i class="fas fa-shopping-cart"></i>
                      <span class="badge badge-secondary">0</span>
                  </button> 
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> 
      <div class="header-navbar bg-menu-bar">
        <div class="container">
          <nav id="headerOneNavbar" class="navbar navbar-expand-lg bg-nav-bar">
            
            <div class="navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item">

                  <a class="nav-link" href="index.php">
                     <img src="fonts/home.png" width="24px">
                    Home
                  </a>
                </li>
                       <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" >
                          <img src="fonts/settings.png" width="24px">
                   Category
                    </a>
                       <div class="dropdown-menu">
                    <?php 
$subcategory=$category->getData();
foreach ($subcategory as $sub) { ?>
                          <a class="dropdown-item" style="text-transform: capitalize;" href='products.php?categoryid=<?php echo $sub['id']; ?>'><?php echo $sub['name']; ?>                    
                          </a>

                        <?php } ?>
                         
                        </div>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="products.php" >
                     <img src="fonts/shipping.png" width="24px">
                   Products
                  </a>
                </li>        
                 <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" >
                          <img src="fonts/Country.png" width="24px">
                   Made In
                    </a>
                       <div class="dropdown-menu">
                    <?php 
$subcategory=$category->getDatacountry();
foreach ($subcategory as $sub) { ?>
                          <a class="dropdown-item" style="text-transform: capitalize;" href='products.php?countryid=<?php echo $sub['Id']; ?>'><?php echo $sub['Country']; ?>                    
                          </a>

                        <?php } ?>
                         
                        </div>
                </li>
                   <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" >
                          <img src="fonts/brand.png" width="24px">
                   Company
                    </a>
                       <div class="dropdown-menu">
                    <?php 
$subcategory=$category->getDatabrand();
foreach ($subcategory as $sub) { ?>
                          <a class="dropdown-item" style="text-transform: capitalize;" href='products.php?brandid=<?php echo $sub['Id']; ?>'><?php echo $sub['Company']; ?>                    
                          </a>

                        <?php } ?>
                         
                        </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      </header>  
          
      <!-- //Sticky Header -->
      <header id="stickyHeader" class="header-area header-sticky d-none" >
        <div class="header-maxi bg-sticky-bar">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-sm-12 col-lg-2">
            <a href="index.php" class="logo" data-toggle="tooltip" data-placement="bottom" title="logo" >
                  <img class="img-fluid" src="images/logo/hamza.png"  alt="logo here">                                            
                </a>
              </div>
              
              <div class="col-12 col-sm-8" style="position:static;">      
                <nav id="stickyNavbar" class="navbar navbar-expand-lg navbar-fixed-top">
              
                  <div class="navbar-collapse">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">
                     <img src="fonts/home.png" width="24px">
                    Home
                  </a>
                    
                      </li>
                          
                    <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" >
                          <img src="fonts/settings.png" width="24px">
                   Category
                    </a>
                       <div class="dropdown-menu">
                    <?php 
$subcategory=$category->getData();
foreach ($subcategory as $sub) { ?>
                          <a class="dropdown-item" style="text-transform: capitalize;" href='products.php?categoryid=<?php echo $sub['id']; ?>'><?php echo $sub['name']; ?>                    
                          </a>

                        <?php } ?>
                         
                        </div>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="products.php" >
                     <img src="fonts/shipping.png" width="24px">
                   Products
                  </a>
                </li>        
                 <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" >
                          <img src="fonts/Country.png" width="24px">
                   Made In
                    </a>
                       <div class="dropdown-menu">
                    <?php 
$subcategory=$category->getDatacountry();
foreach ($subcategory as $sub) { ?>
                          <a class="dropdown-item" style="text-transform: capitalize;" href='products.php?countryid=<?php echo $sub['Id']; ?>'><?php echo $sub['Country']; ?>                    
                          </a>

                        <?php } ?>
                         
                        </div>
                </li>
                   <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" >
                          <img src="fonts/brand.png" width="24px">
                   Company
                    </a>
                       <div class="dropdown-menu">
                    <?php 
$subcategory=$category->getDatabrand();
foreach ($subcategory as $sub) { ?>
                          <a class="dropdown-item" style="text-transform: capitalize;" href='products.php?brandid=<?php echo $sub['Id']; ?>'><?php echo $sub['Company']; ?>                    
                          </a>

                        <?php } ?>
                         
                        </div>
                </li>
                
                    </ul>
                  </div>
                </nav>
              </div>
              <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <ul class="pro-header-right-options">

                  <li class="dropdown">
                      
                    <button type="button" id="dropdownSearch" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                      <i class="fas fa-search"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownSearch">
                        <form>
                            <div class="search-field-module">
                                <input  type="search" placeholder="Search Products..." data-toggle="tooltip" data-placement="bottom" title="search item">
                                <button class="btn" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                          </form>
                    </div>

                  </li>
                  <li>
                    <a href="#" class="btn" data-toggle="tooltip" data-placement="bottom" title="Wishlist">
                        <i class="far fa-heart"></i>
                        <span class="badge badge-secondary">0</span>
                    </a>
                  </li>
                  <li class="cart-header dropdown" data-toggle="tooltip" data-placement="bottom" title="cart">
                    <button type="button" id="stickyHeaderCartButton" class="btn dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"> 
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge badge-secondary">0</span>
                    </button> 
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div> 
      </header>
 <!-- //Mobile Header -->
      <header id="headerMobile" class="header-area header-mobile">
        <div class="header-mini bg-top-bar">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                    <div class="navbar-lang">
                    
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle">
                              English
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">English</a>
                              <a class="dropdown-item" href="#">Arabic</a>
                              
                            </div>
                          </div> 
                    </div>
              </div>
            </div>
          </div> 
        </div>
        <div class="header-maxi bg-header-bar ">
          <div class="container">
              
            <div class="row align-items-center">
              <div class="col-2 pr-0">
                  <div class="navigation-mobile-container">
                      <a href="javascript:void(0)" class="navigation-mobile-toggler">
                          <span class="fas fa-bars"></span>
                      </a>
                      <nav id="navigation-mobile">
                          <div class="logout-main">
                              <div class="welcome">
                                  <span>Welcome&nbsp;Guest !</span>
                              </div>
                              <div class="logout">
                                  <a href="#" class="">Logout</a> 
                              </div>
                                
                          </div> 

         <a href="index.php" class="main-manu btn ">
                            <img src="fonts/home.png" width="16px">
                              Home
                           
                            </a>
                           <a class="main-manu btn" data-toggle="collapse" href="#category" role="button" aria-expanded="false" aria-controls="productpages">
                               <img src="fonts/settings.png" width="16px">
                    category
                        
                          </a>
                             <div class="sub-manu2 collapse multi-collapse" id="category">
                                      <ul class="unorder-list">
                                           <?php 
$subcategory=$category->getData();
foreach ($subcategory as $sub) { ?>
                                          <li class="">
                                             <a class="btn main-manu" href='products.php?categoryid=<?php echo $sub['id']; ?>'>  <?php echo $sub['name']; ?></a></li>
                                                       <?php } ?>
                                      </ul>    
                                    </div>
                         <a href="products.php" class="main-manu btn ">
                            <img src="fonts/shipping.png" width="16px"> Products
                         
                          </a>
  <a class="main-manu btn" data-toggle="collapse" href="#country" role="button" aria-expanded="false" aria-controls="productpages">
                               <img src="fonts/country.png" width="16px">
                    MadeIn
                        
                          </a>
                             <div class="sub-manu2 collapse multi-collapse" id="country">
                                      <ul class="unorder-list">
                                           <?php 
$subcategory=$category->getDatacountry();
foreach ($subcategory as $sub) { ?>
                                          <li class="">
                                             <a class="btn main-manu" href='products.php?countryid=<?php echo $sub['Id']; ?>'>  <?php echo $sub['Country']; ?></a></li>
                                                       <?php } ?>
                                      </ul>    
                                    </div>
                                      <a class="main-manu btn" data-toggle="collapse" href="#brand" role="button" aria-expanded="false" aria-controls="productpages">
                               <img src="fonts/brand.png" width="16px">
                    category
                        
                          </a>
                             <div class="sub-manu2 collapse multi-collapse" id="brand">
                                      <ul class="unorder-list">
                                           <?php 
$subcategory=$category->getDatabrand();
foreach ($subcategory as $sub) { ?>
                                          <li class="">
                                             <a class="btn main-manu" href='products.php?brandid=<?php echo $sub['Id']; ?>'>  <?php echo $sub['Company']; ?></a></li>
                                                       <?php } ?>
                                      </ul>    
                                    </div>
                    <a class="main-manu btn" data-toggle="collapse" href="#staticlogin" role="button" aria-expanded="false" aria-controls="staticlogin">
                          <img src="fonts/user.png" width="16px">
                                 Account
                                      
                                    </a>
                                    <div class="sub-manu1 collapse multi-collapse" id="staticlogin">
                                      <ul class="unorder-list">
                                          <li class="">
                                             <a class="btn main-manu" href="#">Profile</a></li>
                                             <li> <a class="btn main-manu" href="#">Wishlist&nbsp;</a>
                                          </li><li>
                                            <a class="btn main-manu" href="#">Orders</a>
                                           </li><li> <a class="btn main-manu" href="#">Shipping Address</a>
                                           </li><li> <a class="btn main-manu" href="#">Logout</a>
                                           
                                          </li>
                                      </ul>    
                                    </div>
                      </nav>
                  </div>
                  
              </div>
              <div class="col-8">
                  <a href="" class="logo" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="logo">
                      <img class="img-fluid" src="images/logo/hamza.png" alt="logo here">                                            
                    </a>
              </div>
              
              <div class="col-2 pl-0">
                  <div class="cart-dropdown dropdown">
                    <a class="cart-dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                      <span class="badge badge-secondary">0</span>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="header-navbar bg-menu-bar">
          <div class="container">
            <form class="form-inline">
                <div class="search-field-module">                           
                    <div class="search-field-select" >
                        <select class="form-control">
                          <option selected>All Categories</option>
                         <option selected>All Categories</option>
                          <?php 
                          $categories=$category->getData();
                           foreach($categories as $cat){?>
                          <option value='<?php echo $cat['id']; ?>'><?php echo $cat['name']; ?>&nbsp;</option>
                       <?php } ?>
                            </select>
                    </div>
                    <div class="search-field-wrap">
                        <input  type="search" placeholder="Search Products..." data-toggle="tooltip" data-placement="bottom" title="search item">
                        <button class="btn btn-secondary swipe-to-top" data-toggle="tooltip" data-placement="bottom" title="Search Products">
                        <i class="fa fa-search"></i></button>
                    </div>
                  </div>
            </form>
          </div>
        </div>
      </header> 
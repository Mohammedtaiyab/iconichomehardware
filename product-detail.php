<?php
require('header.php');
$id = ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) ? intval( $_GET['id'] ) : 0;
if ( $id != 0 ){
$productitem=$product->singleProduct($id);
}
?>

      <div class="container-fuild">
          <nav aria-label="breadcrumb">
              <div class="container">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Page</li>
                  </ol>
              </div>
            </nav>
        </div> 
        <section class="pro-content product-content">
            <div class="container">  
                        
              <div class="product-detail-info">  
                  <div class="row">
                    <div class="col-12 col-sm-12">
                      <div class="row">                      
                           
                            <div class="col-12 col-md-6">
                                <div class="slider-wrapper">
                                    <div class="slider-for">
                                      <a class="slider-for__item ex1 fancybox-button" href='images/product/<?php echo $productitem[0]['Image'];?>' data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet">
                                        <img src='images/product/<?php echo $productitem[0]['Image'];?>' alt="Zoom Image" />
                                      </a>
                                  <?php 
$gallery=$product->productgallery($productitem[0]['proID']);
$j=0;
  foreach($gallery as $gall){ ?>

                                      <a class="slider-for__item ex1 fancybox-button" href='images/product/<?php echo $gall['Image'];?>'data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet">
                                        <img src='images/product/<?php echo $gall['Image'];?>' />
                                      </a>
                                  
                                   <?php }?>

                                    </div>
                                  
                                    <div class="slider-nav">
                                      <div class="slider-nav__item">
                                        <img src='images/product/<?php echo $productitem[0]['Image'];?>' alt="Zoom Image"/>
                                      </div>
                                      <?php 
$gallery=$product->productgallery($productitem[0]['proID']);
$j=0;
  foreach($gallery as $gall){ ?>

                                      <div class="slider-nav__item">
                                        <img src='images/product/<?php echo $gall['Image'];?>' alt="Zoom Image" />
                                      </div>
                                       <?php }?>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                              <div class="pro-tags">
                                  <div class="pro-tag bg-success">New</div>
                                  <div class="pro-tag bg-primary">Featured</div>
                                  <div class="pro-tag">Sale</div>
                                </div>
                                <h1 class="pro-title"><?php echo $productitem[0]['Name'];?></h1>
                                
                                <div class="pro-price">
                                 <del><?php echo $productitem[0]['mrp']; ?>Kd</del><ins><?php echo $productitem[0]['Price']; ?>kd</ins>
                                </div>
                                <div class="pro-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <a href="#review" class="btn-link">2 reviews</a>
                                </div>
                             <div class="pro-infos">
                                  <div class="pro-single-info"><b>Company :</b><?php echo $productitem[0]['Company']; ?></div>
                                  <div class="pro-single-info"><b>Categroy :</b><a href="#"><?php echo $productitem[0]['name'];
                          ?>  </a></div>
                                  <div class="pro-single-info">
                                    <b>Tags :</b>
                                    <ul>
                                        <li><a href="#"><?php echo $productitem[0]['Category']; ?></a></li>
                                    </ul>
                                  </div>
                                  <div class="pro-single-info"><b>Available :</b><span class="text-secondary">InStock</span></div>
                                    <div class="pro-single-info"><b>Made In :</b><?php echo $productitem[0]['Country']; ?></div>
                              </div>
                                <div class="pro-options">
                                   <!--  <div class="color-selection">
                                        <h4><b>Color : </b>Silver</h4>
                                      <ul>
                                        <li class="active"><a class="green " href="javascript:void(0);"></a></li>
                                        <li ><a class="red " href="javascript:void(0);"></a></li>
                                        
                                      </ul>
                                      </div> -->
                                      
                                </div>
                              
                                
                              
                                
                                <div class="pro-counter">
                                    <div class="input-group item-quantity">
                                          
                                        <input type="text" id="quantity1" name="quantity" class="form-control" value="1">
                                        
                                        <span class="input-group-btn">
                                            <button type="button" value="quantity1" class="quantity-plus btn" data-type="plus" data-field="">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        
                                            <button type="button" value="quantity1" class="quantity-minus btn" data-type="minus" data-field="">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </span>
                                      </div>
                                      <button type="button" class="btn btn-secondary btn-lg swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                      
                              
                                </div>
                                <div class="pro-sub-buttons">
                                    <div class="buttons">
                                        <button type="button" class="btn  btn-link" onclick="notificationWishlist();"><i class="fas fa-heart"></i>Add to Wishlist</button>
                                        <button type="button" class="btn btn-link" onclick="notificationCompare();"><i class="fas fa-align-right"></i>Add to Compare</button>
                                    </div>
                                    <!-- AddToAny BEGIN -->
                                  <!--   <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                      <a class="a2a_dd" href=""></a>
                                      <a class="a2a_button_facebook"></a>
                                      <a class="a2a_button_twitter"></a>
                                      <a class="a2a_button_email"></a>
                                      </div>
                                      <script async src="../static.addtoany.com/menu/page.js"></script> -->
                                      <!-- AddToAny END -->
                                    
                                </div>
                                
                                </div>
                              </div>
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                      <div class="nav nav-pills" role="tablist">
                                        <a class="nav-link nav-item  active" href="#description" id="description-tab" data-toggle="pill" role="tab">Description</a> 
                                        <a class="nav-link nav-item " href="#additionalInfo" id="additional-info-tab" data-toggle="pill" role="tab" >Additional information</a> 
                                        <a class="nav-link nav-item" href="#review" id="review-tab" data-toggle="pill" role="tab" >Reviews</a> 
                                      </div> 
                                      <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active show" id="description" aria-labelledby="description-tab">
                                           <?php echo $productitem[0]['Description']; ?>
                                            
                                             
                                        
                                        </div>  
                                        <div role="tabpanel" class="tab-pane fade" id="additionalInfo" aria-labelledby="additional-info-tab">
                                            <table class="table table-striped table-borderless">
                                                
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">Brand Name:</th>
                                                    <td><?php echo $productitem[0]['Company']; ?></td>
                                                    
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Metals Type:</th>
                                                    <td></td>
                                                    
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">Main Stone:</th>
                                                    <td></td>
                                                    
                                                  </tr>
                                                  <tr>
                                                      <th scope="row">Style:</th>
                                                      <td></td>
                                                      
                                                    </tr>
                                                </tbody>
                                              </table>
                                        </div> 
                                        <div role="tabpanel" class="tab-pane fade " id="review" aria-labelledby="review-tab">
                                          <div class="reviews">
                                              <div class="review-bubbles">
                                                  <h2>
                                                      Customer Reviews
                                                  </h2>
                                                  <div class="review-bubble-single">
                                                      <div class="review-bubble-bg">
                                                          <div class="pro-rating">
                                                              <i class="fas fa-star"></i>
                                                              <i class="fas fa-star"></i>
                                                              <i class="fas fa-star"></i>
                                                              <i class="fas fa-star"></i>
                                                              <i class="fas fa-star-half-alt"></i>
                                                              
                                                          </div>
                                                          <h4>Good</h4>
                                                          <span>Sep 20, 2019</span>
                                                         <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p> -->
                                                      </div>
                                                      
                                                  </div>
                                                  <div class="review-bubble-single">
                                                      <div class="review-bubble-bg">
                                                          <div class="pro-rating">
                                                              <i class="fas fa-star"></i>
                                                              <i class="fas fa-star"></i>
                                                              <i class="fas fa-star"></i>
                                                              <i class="fas fa-star"></i>
                                                              <i class="fas fa-star-half-alt"></i>
                                                              
                                                          </div>
                                                          <h4>NICE WORK!!!</h4>
                                                          <span>Sep 20, 2019</span>
                                                         <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p> -->
                                                      </div>
                                                      
                                                  </div>
                                                  
                                              </div>
                                              <div class="write-review">
                                                <h2>Write a Review</h2>
                                                <div class="write-review-box">
                                                    <div class="from-group row mb-3">
                                                      <div class="col-12"> <label for="inlineFormInputGroup0">Name</label></div>
                                                      <div class="input-group col-12">
                                                        
                                                        <input type="text" class="form-control" id="inlineFormInputGroup0" placeholder="Enter Your Name">
                                                      </div>
                                                    </div>
                                                    <div class="from-group row mb-3">
                                                      <div class="col-12"> <label for="inlineFormInputGroup1">Email Address</label></div>
                                                      <div class="input-group col-12">
                                                        
                                                        <input type="text" class="form-control" id="inlineFormInputGroup1" placeholder="Enter Your Email">
                                                      </div>
                                                    </div>
                                                    <div class="from-group row mb-3">
                                                        <div class="col-12"> <label for="inlineFormInputGroup2">Rating</label></div>
                                                        <div class="pro-rating  col-12">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="from-group row mb-3">
                                                        <div class="col-12"> <label for="inlineFormInputGroup2">Review Title</label></div>
                                                        <div class="input-group col-12">
                                                          
                                                          <input type="text" class="form-control" id="inlineFormInputGroup2" placeholder="Title of Review">
                                                        </div>
                                                      </div>
                                                      <div class="from-group row mb-3">
                                                          <div class="col-12"> <label for="inlineFormInputGroup3">Review Body</label></div>
                                                          <div class="input-group col-12">
                                                            
                                                            <textarea class="form-control" id="inlineFormInputGroup3" placeholder="Write Your Review"></textarea>
                                                          </div>
                                                        </div>
                                                        <div class="from-group">
                                                            <button type="button" class="btn btn-secondary swipe-to-top">Submit</button>
                                                          
                                                        </div>
                                                </div>
                                              </div>
                                          </div>
    
                                            
                                        </div> 
                                    </div>
                                </div>      
                            
                              </div>
                    
                            </div>
                      </div>
                  </div>
                  
                  </div>
              </div>
    
<!--               <div class="related-product-content">
                  <div class="row justify-content-center">
                      <div class="col-12 col-lg-6">
                        <div class="pro-heading-title">
                          <h1> Related Products
                          </h1>
                          </div>
                        </div>
                    </div>
                    <div class="tab-carousel-js row">                         
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                          <div class="product">
                              <article>
                                  <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                      <a href="wishlist.html" class="icon active swipe-to-top">
                                        <i class="fas fa-heart"></i>
                                      </a>
                                      <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                        <i class="fas fa-eye"></i>
                                      </div>
                                      <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                      </div>
                                                                  
                                <div class="pro-thumb "> 
                                  <div class="pro-tag bg-success">NEW</div>
                                  <a href="product-page1.html">
                                      <span class="pro-image"><img class="img-fluid" src="images/product_images/product_image_01.jpg" alt="Product Image"></span>
                                      <span class="pro-image-hover swipe-to-top  d-none d-lg-block d-xl-block"><img class="img-fluid" src="images/product_images/product_image_01_02.jpg" alt="Product Image"></span>
                                  </a>
                                  <div class="pro-buttons d-none d-lg-block d-xl-block">
                                        <div class="pro-icons">
                                        <a href="wishlist.html" class="icon active swipe-to-top">
                                          <i class="fas fa-heart"></i>
                                        </a>
                                        <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                          <i class="fas fa-eye"></i>
                                        </div>
                                        <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                        </div>
                                      
      
                                      <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                    </div>
                                  
                                </div>
                                <div class="pro-description">
                                    <span class="pro-info">
                                        Ring Collection                   
                                      </span>
                                      <h2 class="pro-title"><a href="product-page1.html">Austrian Crystals Jewelry Engagement Ring</a></h2>
                                      
                                      <div class="pro-price">
                                        <ins>$285</ins>
                                    </div>
                                    <div class="pro-mobile-buttons d-lg-none d-xl-none">
                                        <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                        
            
                                  </div>
                                </div>
                                    
                              </article>
                            </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                          <div class="product">
                              <article>
                                  <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                      <a href="wishlist.html" class="icon active swipe-to-top">
                                        <i class="fas fa-heart"></i>
                                      </a>
                                      <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                        <i class="fas fa-eye"></i>
                                      </div>
                                      <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                      </div>
                                                                
                                <div class="pro-thumb "> 
                                  <div class="pro-tag bg-success">NEW</div>
                                  <a href="product-page1.html">
                                      <span class="pro-image"><img class="img-fluid" src="images/product_images/product_image_02.jpg" alt="Product Image"></span>
                                      <span class="pro-image-hover swipe-to-top  d-none d-lg-block d-xl-block">
                                        <img class="img-fluid" src="images/product_images/product_image_02_02.jpg" alt="Product Image"></span>
                                  </a>
                                  <div class="pro-buttons d-none d-lg-block d-xl-block">
                                        <div class="pro-icons">
                                        <a href="wishlist.html" class="icon active swipe-to-top">
                                          <i class="fas fa-heart"></i>
                                        </a>
                                        <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                          <i class="fas fa-eye"></i>
                                        </div>
                                        <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                        </div>
                                      
      
                                      <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                    </div>
                                  
                                </div>
                                <div class="pro-description">
                                    <span class="pro-info">
                                        Earrings                   
                                      </span>
                                      <h2 class="pro-title"><a href="product-page1.html">Crystal Water Drop Wedding Earrings</a></h2>
                                      
                                      <div class="pro-price">
                                        <del>$450</del><ins>$285</ins>
                                    </div>
                                    <div class="pro-mobile-buttons d-lg-none d-xl-none">
                                        <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                        
            
                                  </div>
                                </div>
                                    
                              </article>
                          </div>
                        </div>
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="product">
                          <article>     
                              <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                  <a href="wishlist.html" class="icon active swipe-to-top">
                                    <i class="fas fa-heart"></i>
                                  </a>
                                  <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                    <i class="fas fa-eye"></i>
                                  </div>
                                  <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                  </div>                              
                            <div class="pro-thumb "> 
                                <div class="pro-tag bg-success">NEW</div>
                              <a href="product-page1.html">
                                  <span class="pro-image"><img class="img-fluid" src="images/product_images/product_image_03.jpg" alt="Product Image"></span>
                                  <span class="pro-image-hover swipe-to-top d-none d-lg-block d-xl-block"><img class="img-fluid" src="images/product_images/product_image_03_02.jpg" alt="Product Image"></span>
                              </a>
                              <div class="pro-buttons d-none d-lg-block d-xl-block">
                                    <div class="pro-icons">
                                    <a href="wishlist.html" class="icon active swipe-to-top">
                                      <i class="fas fa-heart"></i>
                                    </a>
                                    <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                      <i class="fas fa-eye"></i>
                                    </div>
                                    <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                    </div>
                                  

                                  <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                </div>
                            
                            </div>
                            <div class="pro-description">
                                <span class="pro-info">
                                  Ring Collection                          
                                  </span>
                                  <h2 class="pro-title"><a href="product-page1.html">Crytal Wedding Engagement Rings</a></h2>
                                  
                                  <div class="pro-price">
                                    <del>$120</del><ins>$85</ins>
                                </div>
                                <div class="pro-mobile-buttons d-lg-none d-xl-none">
                                    <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                    
        
                              </div>
                            </div>
                                
                          </article>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="product">
                            <article>
                                <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                    <a href="wishlist.html" class="icon active swipe-to-top">
                                      <i class="fas fa-heart"></i>
                                    </a>
                                    <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                      <i class="fas fa-eye"></i>
                                    </div>
                                    <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                    </div>
                                                              
                              <div class="pro-thumb "> 
                                <div class="pro-tag bg-success">NEW</div>
                                <a href="product-page1.html">
                                    <span class="pro-image"><img class="img-fluid" src="images/product_images/product_image_04.jpg" alt="Product Image"></span>
                                    <span class="pro-image-hover swipe-to-top  d-none d-lg-block d-xl-block"><img class="img-fluid" src="images/product_images/product_image_04_02.jpg" alt="Product Image"></span>
                                </a>
                                <div class="pro-buttons d-none d-lg-block d-xl-block">
                                      <div class="pro-icons">
                                      <a href="wishlist.html" class="icon active swipe-to-top">
                                        <i class="fas fa-heart"></i>
                                      </a>
                                      <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                        <i class="fas fa-eye"></i>
                                      </div>
                                      <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                      </div>
                                    
    
                                    <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                  </div>
                                
                              </div>
                              <div class="pro-description">
                                  <span class="pro-info">
                                      Rings                   
                                    </span>
                                    <h2 class="pro-title"><a href="product-page1.html">Women Wedding Zircon Engagement Ring</a></h2>
                                    
                                    <div class="pro-price">
                                      <del>$120</del><ins>$110</ins>
                                  </div>
                                  <div class="pro-mobile-buttons d-lg-none d-xl-none">
                                      <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                      
          
                                </div>
                              </div>
                                  
                            </article>
                        </div>
                      </div>
                      
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="product">
                            <article>
                                <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                    <a href="wishlist.html" class="icon active swipe-to-top">
                                      <i class="fas fa-heart"></i>
                                    </a>
                                    <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                      <i class="fas fa-eye"></i>
                                    </div>
                                    <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                    </div>
                                                              
                              <div class="pro-thumb "> 
                                <div class="pro-tag bg-success">NEW</div>
                                <a href="product-page1.html">
                                    <span class="pro-image"><img class="img-fluid" src="images/product_images/product_image_05.jpg" alt="Product Image"></span>
                                    <span class="pro-image-hover swipe-to-top  d-none d-lg-block d-xl-block">
                                      <img class="img-fluid" src="images/product_images/product_image_05_02.jpg" alt="Product Image"></span>
                                </a>
                                <div class="pro-buttons d-none d-lg-block d-xl-block">
                                      <div class="pro-icons">
                                      <a href="wishlist.html" class="icon active swipe-to-top">
                                        <i class="fas fa-heart"></i>
                                      </a>
                                      <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                        <i class="fas fa-eye"></i>
                                      </div>
                                      <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                      </div>
                                    
    
                                    <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                  </div>
                                
                              </div>
                              <div class="pro-description">
                                  <span class="pro-info">
                                      Bangle                  
                                    </span>
                                    <h2 class="pro-title"><a href="product-page1.html">Viennois Rose Gold Circle Bangle</a></h2>
                                    
                                    <div class="pro-price">
                                      <del>$220</del><ins>$185</ins>
                                  </div>
                                  <div class="pro-mobile-buttons d-lg-none d-xl-none">
                                      <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                      
          
                                </div>
                              </div>
                                  
                            </article>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="product">
                            <article>
                                <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                    <a href="wishlist.html" class="icon active swipe-to-top">
                                      <i class="fas fa-heart"></i>
                                    </a>
                                    <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                      <i class="fas fa-eye"></i>
                                    </div>
                                    <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                    </div>
                                                              
                              <div class="pro-thumb "> 
                                <div class="pro-tag bg-success">NEW</div>
                                <a href="product-page1.html">
                                    <span class="pro-image"><img class="img-fluid" src="images/product_images/product_image_06.jpg" alt="Product Image"></span>
                                    <span class="pro-image-hover swipe-to-top  d-none d-lg-block d-xl-block">
                                      <img class="img-fluid" src="images/product_images/product_image_06_02.jpg" alt="Product Image"></span>
                                </a>
                                <div class="pro-buttons d-none d-lg-block d-xl-block">
                                      <div class="pro-icons">
                                      <a href="wishlist.html" class="icon active swipe-to-top">
                                        <i class="fas fa-heart"></i>
                                      </a>
                                      <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                        <i class="fas fa-eye"></i>
                                      </div>
                                      <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                      </div>
                                    
    
                                    <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                  </div>
                                
                              </div>
                              <div class="pro-description">
                                  <span class="pro-info">
                                      Bracelet                 
                                    </span>
                                    <h2 class="pro-title"><a href="product-page1.html">Bracelet for Women Metal Chain</a></h2>
                                    
                                    <div class="pro-price">
                                      <del>$140</del><ins>$81</ins>
                                  </div>
                                  <div class="pro-mobile-buttons d-lg-none d-xl-none">
                                      <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                      
          
                                </div>
                              </div>
                                  
                            </article>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                          <div class="product">
                              <article>
                                  <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                      <a href="wishlist.html" class="icon active swipe-to-top">
                                        <i class="fas fa-heart"></i>
                                      </a>
                                      <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                        <i class="fas fa-eye"></i>
                                      </div>
                                      <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                      </div>
                                                                
                                <div class="pro-thumb "> 
                                  <div class="pro-tag bg-success">NEW</div>
                                  <a href="product-page1.html">
                                      <span class="pro-image"><img class="img-fluid" src="images/product_images/product_image_07.jpg" alt="Product Image"></span>
                                      <span class="pro-image-hover swipe-to-top  d-none d-lg-block d-xl-block">
                                        <img class="img-fluid" src="images/product_images/product_image_07_02.jpg" alt="Product Image"></span>
                                  </a>
                                  <div class="pro-buttons d-none d-lg-block d-xl-block">
                                        <div class="pro-icons">
                                        <a href="wishlist.html" class="icon active swipe-to-top">
                                          <i class="fas fa-heart"></i>
                                        </a>
                                        <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                          <i class="fas fa-eye"></i>
                                        </div>
                                        <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                        </div>
                                      
      
                                      <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                    </div>
                                  
                                </div>
                                <div class="pro-description">
                                    <span class="pro-info">
                                        Crown                 
                                      </span>
                                      <h2 class="pro-title"><a href="product-page1.html">Gold Rhinestone Pageant Crown</a></h2>
                                      
                                      <div class="pro-price">
                                        <del>$120</del><ins>$85</ins>
                                    </div>
                                    <div class="pro-mobile-buttons d-lg-none d-xl-none">
                                        <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                        
            
                                  </div>
                                </div>
                                    
                              </article>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="product">
                                <article>
                                    <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                        <a href="wishlist.html" class="icon active swipe-to-top">
                                          <i class="fas fa-heart"></i>
                                        </a>
                                        <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                          <i class="fas fa-eye"></i>
                                        </div>
                                        <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                        </div>
                                                                  
                                  <div class="pro-thumb "> 
                                    <div class="pro-tag bg-success">NEW</div>
                                    <a href="product-page1.html">
                                        <span class="pro-image"><img class="img-fluid" src="images/product_images/product_image_08.jpg" alt="Product Image"></span>
                                        <span class="pro-image-hover swipe-to-top  d-none d-lg-block d-xl-block">
                                          <img class="img-fluid" src="images/product_images/product_image_08_02.jpg" alt="Product Image"></span>
                                    </a>
                                    <div class="pro-buttons d-none d-lg-block d-xl-block">
                                          <div class="pro-icons">
                                          <a href="wishlist.html" class="icon active swipe-to-top">
                                            <i class="fas fa-heart"></i>
                                          </a>
                                          <div class="icon swipe-to-top" data-toggle="modal" data-target="#quickViewModal">
                                            <i class="fas fa-eye"></i>
                                          </div>
                                          <a href="compare.html" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                                          </div>
                                        
        
                                        <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                      </div>
                                    
                                  </div>
                                  <div class="pro-description">
                                      <span class="pro-info">
                                          Necklace                 
                                        </span>
                                        <h2 class="pro-title"><a href="product-page1.html">Hollow Heart Pendant Necklace for Women</a></h2>
                                        
                                        <div class="pro-price">
                                          <ins>$85</ins>
                                      </div>
                                      <div class="pro-mobile-buttons d-lg-none d-xl-none">
                                          <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                          
              
                                    </div>
                                  </div>
                                      
                                </article>
                            </div>
                          </div>
                    </div>
                
              </div>  -->
            </div>
          </section>  




<?php
require('footer.php');
?>

<?php 
$productlist=$product->productsall();
//print_r($productlist);
   $i = 0; 
    foreach($productlist as $item): 
      ?>
 <!-- Product Modal -->
     <div class="modal fade" id='<?php echo "p".$item['proID']; ?>' tabindex="-1" role="dialog" aria-hidden="true">
      
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-body">
                  
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-12 col-md-6">
                          <div class="row ">
                              <div id='<?php echo "quickView".$item['proID']; ?>' class="carousel slide" data-ride="carousel">
                                  <!-- The slideshow -->
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        
                                      <img class="img-fluid" src='images/product/<?php echo $item['Image'];?>' alt="image">
                                    </div>
<?php 
$gallery=$product->productgallery($item['proID']);
$j=0;
  foreach($gallery as $gall){ ?>
                                    <div class="carousel-item">
                                      <img class="img-fluid" src='images/product/<?php echo $gall['Image'];?>' alt="image">
                                    </div>
                                  <?php }?>
                                  </div>
                                  <!-- Left and right controls -->
                                  <a class="carousel-control-prev" href='<?php echo "#quickView".$item['proID']; ?>' data-slide="prev">
                                    <span class="fas fa-angle-left "></span>
                                  </a>
                                  <a class="carousel-control-next" href='<?php echo "#quickView".$item['proID']; ?>' data-slide="next">
                                    <span class="fas fa-angle-right "></span>
                                  </a>
                                
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-md-6">
                          <div class="pro-description">
                              <h2 class="pro-title"><?php echo $item['Name']; ?> </h2>
                          
                              <div class="pro-price">
                                  <ins><?php echo $item['Price']; ?>kd/-</ins>
                              </div>

                              <div class="pro-infos">
                                  <div class="pro-single-info"><b>Company :</b><?php echo $item['Company']; ?></div>
                                  <div class="pro-single-info"><b>Categroy :</b><a href="#"><?php echo $item['name'];
                          ?>  </a></div>
                                  <div class="pro-single-info">
                                    <b>Tags :</b>
                                    <ul>
                                        <li><a href="#"><?php echo $item['Category']; ?></a></li>
                                    </ul>
                                  </div>
                                  <div class="pro-single-info"><b>Available :</b><span class="text-secondary">InStock</span></div>
                                    <div class="pro-single-info"><b>Made In :</b><?php echo $item['Country']; ?></div>
                              </div>
                              <p>
                              <b>
                                <a href='product-detail.php?id=<?php echo $item['proID']; ?>'>More Detail...</a>
                              </b></p>
                              <div class="pro-counter">
                                  <div class="input-group item-quantity">
                                        
                                      <input type="text" id="quantity1" name="quantity" class="form-control quantity " value="1">
                                      
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
                          </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
          </div>
        </div>
      </div>

            <?php $i++; endforeach;?>
    <!-- Footer Mobile -->
       <footer id="footerMobile" class="footer-area footer-mobile d-lg-none d-xl-none">
   
          <div class="container">
              <div class="row">
                <div class="col-12 col-lg-3">
                  <div class="single-footer">
                    
                    <div class="pro-about">
                        <div class="" id="">
                            <div class="card card-body">
                        <ul class="pl-0 mb-0">
                          <li><a href="index.php">
                              <img src="images/logo/hamza.png" alt="logo here">                                            
                            </a></li>
                          <li> <span>Kuwait</span> </li>
                          <li><span>1234567890</span><span><a href="#">Info@iconichomehardware.com</a> </span> </li>
                    
                        </ul>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-2">
                  
                    <div class="single-footer">
                  
                        <div class="" id="collapseFooterOne">
                            <div class="card card-body">
                            <ul class="pl-0 mb-0">
                                <li> <a href="index.php">Home</a> </li>
                                <li> <a href="">Products</a> </li>
                                <li> <a href="">About Us</a> </li>
                                <li> <a href="">Contact Us</a> </li>
                              </ul>
                              </div>
                          </div>
                        
                      </div>
                </div>
       
                
                <div class="col-12 col-lg-3">
                  <div class="single-footer">
                      <div class="pro-socials">
                          <h5>Follow Us</h5>
                          <ul>
                              <li><a href="#" class="fab fb fa-facebook-square"></a></li>
                              <li><a href="#" class="fab tw fa-twitter-square"></a></li>
                              <li><a href="#" class="fab sk fa-skype"></a></li>
                              <li><a href="#" class="fab ln fa-linkedin"></a></li>
                              <li><a href="#" class="fab ig fa-instagram"></a></li>
                          </ul>
                      </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="container-fluid p-0">
                <div class="copyright-content">
                    <div class="container">
                      <div class="row align-items-center">
                          
                          <div class="col-12 col-sm-12">
                            <div class="footer-info">
                                &copy;&nbsp;2020 Company, Inc. <a href="">Privacy</a>&nbsp;&bull;&nbsp;<a href="">Terms</a>
                            </div>
                            
                          </div>
                      </div>
                    </div>
                    
                  </div>
            </div>
    
          </footer>

     <!-- //Footer Style One -->
     <footer id="footerOne" class="footer-area footer-one footer-desktop d-none d-lg-block d-xl-block">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="single-footer">
                  
                <div class="pro-about">
                    <h5>Store</h5>
                
                    <ul class="pl-0 mb-0">
                      <li><a href="index-2.html">
                          <img src="images/logo/hamza.png" alt="logo here">                                            
                        </a></li>
                      <li> <span>kuwait</span> </li>
                      <li><span>1234567890</span><span><a href="#">info@iconichomehardware.com</a> </span> </li>
                
                    </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-footer">
                    <h5>Info</h5>
                    
                    <ul class="pl-0 mb-0">
                      <li> <a href="index-2.html">Home</a> </li>
                      <li> <a href="blog-page1.html">Blog</a> </li>
                      <li> <a href="about-page1.html">About Us</a> </li>
                      <li> <a href="contact-page1.html">Contact Us</a> </li>
                    </ul>
                  </div>
            </div>
    
            
            <div class="col-12 col-lg-2">
              <div class="single-footer">
              
                  
                  <div class="pro-socials">
                      <h5>Follow Us</h5>
                      <ul>
                          <li><a href="#" class="fab fb fa-facebook-square"></a></li>
                          <li><a href="#" class="fab tw fa-twitter-square"></a></li>
                          <li><a href="#" class="fab sk fa-skype"></a></li>
                          <li><a href="#" class="fab ln fa-linkedin"></a></li>
                          <li><a href="#" class="fab ig fa-instagram"></a></li>
                      </ul>
                  </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid p-0">
            <div class="copyright-content">
                <div class="container">
                  <div class="row align-items-center">
                      
                      <div class="col-12 col-sm-12">
                        <div class="footer-info">
                            &copy;&nbsp;2020 Company, Inc. <a href="">Privacy</a>&nbsp;&bull;&nbsp;<a href="">Terms</a>
                        </div>
                        
                      </div>
                  </div>
                </div>
                
              </div>
        </div>
    </footer>

      <div class="mobile-overlay"></div>
      <a href="#" id="back-to-top" class="swipe-to-top" title="Back to top">&uarr;</a>
      <div class="notifications" id="notificationCart">Product Added To Cart</div>
      <div class="notifications" id="notificationWishlist">Product Added To Wishlist</div>
      <div class="notifications" id="notificationCompare">Product Added To Compare</div>
    
        <!-- All custom scripts here -->
        <script src="js/scripts.js"></script>
  
        <!-- Revolution JS Files -->
        <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
  
        <!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING --> 
        <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
  
      </body>
</html>
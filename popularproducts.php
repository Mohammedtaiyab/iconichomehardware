 <!-- Popular Products -->
    <section class="pro-content pro-plr-content ">
        <div class="container"> 
          <div class="products-area">
              <div class="row justify-content-center">
                  <div class="col-12 col-lg-12">
                    <div class="pro-heading-title">
                      <h2>Welcome to Store</h2>
                      <p> </p></div>
                    </div>
                </div>
              <div class=" row">            

  <?php 
$productlist=$product->popularproducts();
//print_r($productlist);
   $i = 0; 
    foreach($productlist as $item): 
      //print_r($item);
        if($i >= 8) {break;}else{?>             
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                  <div class="product">
                    <article>      
                        <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                            <a href="" class="icon active swipe-to-top">
                              <i class="fas fa-heart"></i>
                            </a>
                            <div class="icon swipe-to-top" data-toggle="modal" data-target='<?php echo "#p".$item['proID']; ?>'>
                              <i class="fas fa-eye"></i>
                            </div>
                            <a href="" class="icon swipe-to-top"><i class="fas fa-align-right" data-fa-transform="rotate-90"></i></a>
                            </div>                             
                      <div class="pro-thumb "> 
                        
                        <a href="">
<span class="pro-image"><img class="img-fluid" src='images/product/<?php echo $item['Image'];?>' alt="Product Image"></span>

<?php 
$gallery=$product->productgallery($item['proID']);
$j=0;
  foreach($gallery as $gall): 
if($j>=1){break;}else{?><span class="pro-image-hover swipe-to-top"><img class="img-fluid" src='images/product/<?php echo $gall['Image'];?>' alt="Product Image"></span>
     <?php $j++; } endforeach;?>
                        </a>
                        <div class="pro-buttons d-none d-lg-block d-xl-block">
                            <div class="pro-icons">
                              <a href="" class="icon active swipe-to-top">
                                <i class="fas fa-heart"></i>
                              </a>
                              <div class="icon swipe-to-top" data-toggle="modal" data-target='<?php echo "#p".$item['proID']; ?>'>
                                <i class="fas fa-eye"></i>
                              </div>
                              <a href="" class="icon swipe-to-top"><i class="fas fa-shopping-cart" data-fa-transform="rotate-90"></i></a>
                            </div>
                            

                        <!--     <a href="" class="btn btn-secondary btn-block swipe-to-top">Add to Cart</a> -->
                          </div>
                      <!--   <div class="pro-tag">Sale</div> -->
                      </div>
                      <div class="pro-description">
                          <span class="pro-info">
                          <?php 
                        echo $item['Company'];
                          ?>          
                            </span>
                            <h2 class="pro-title"><a href='product-detail.php?id=<?php echo $item['proID']; ?>'><?php echo $item['Name']; ?></a></h2>
                            
                            <div class="pro-price">
                              <del><?php echo $item['mrp']; ?>Kd</del><ins><?php echo $item['Price']; ?>kd</ins>
                          </div>
                      </div>
                        
                    </article>
                  </div>
                </div>


         <?php $i++; } endforeach;?>
              </div>
            

            
          </div>
        </div>
    </section>
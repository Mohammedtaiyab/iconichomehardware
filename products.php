<?php 
require('header.php');
?>

     <!-- Products content -->
     <div class="container-fuild">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </div>
          </nav>
      </div> 
      <section class="pro-content shop-content shop-special">
         
          <div class="container">
            <div class="row">
                <div class="pro-heading-title">
                    <h1>
                    ALL Products
                    </h1>
                  </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-3  d-lg-block d-xl-block right-menu"> 
                    <div class="accordion shop-bar-categories" id="accordionExample1">
                        <div class="card">
                          <div class="card-header" id="CardOne">
                            <a href="products.php" class="mb-0"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Category
                            </a>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="CardOne" data-parent="#accordionExample1">
                            <div class="card-body">
                                <ul  class="brands">
                                	   <?php 
                          $categories=$category->getData();
                           foreach($categories as $cat){?>
                           	  <li><a class="brands-btn" href='products.php?categoryid=<?php echo $cat['id']; ?>' role="button"><i class="fas fa-angle-right"></i><?php echo $cat['name']; ?></a></li>
                      
                       <?php } ?>
                                   
                                  </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="accordion shop-bar-categories" id="brand">
                        <div class="card">
                          <div class="card-header" id="CardOne">
                            <a href="products.php" class="mb-0"  data-toggle="collapse" data-target="#collapsebrand" aria-expanded="true" aria-controls="collapseOne">
                                Brand
                            </a>
                          </div>
                      
                          <div id="collapsebrand" class="collapse show" aria-labelledby="CardOne" data-parent="#brand">
                            <div class="card-body">
                                <ul  class="brands">
                                	   <?php 
                          $categories=$category->getDatabrand();
                           foreach($categories as $cat){?>
                           	  <li><a class="brands-btn" href='products.php?brandid=<?php echo $cat['Id']; ?>' role="button"><i class="fas fa-angle-right"></i><?php echo $cat['Company']; ?></a></li>
                      
                       <?php } ?>
                                   
                                  </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                         <div class="accordion shop-bar-categories" id="country">
                        <div class="card">
                          <div class="card-header" id="CardOne">
                            <a href="products.php" class="mb-0"  data-toggle="collapse" data-target="#collapsecountry" aria-expanded="true" aria-controls="collapseOne">
                                Made In
                            </a>
                          </div>
                      
                          <div id="collapsecountry" class="collapse show" aria-labelledby="CardOne" data-parent="#country">
                            <div class="card-body">
                                <ul  class="brands">
                                	   <?php 
                          $categories=$category->getDatacountry();
                           foreach($categories as $cat){?>
                           	  <li><a class="brands-btn" href='products.php?countryid=<?php echo $cat['Id']; ?>' role="button"><i class="fas fa-angle-right"></i><?php echo $cat['Country']; ?></a></li>
                      
                       <?php } ?>
                                   
                                  </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>




                <div class="col-12 col-lg-9">
                    <div class="products-area">
                        <div class="top-bar">
                            <div class="row ">
                              <div class="col-12 col-lg-12 ">
                                <div class="row align-items-center">
                                <div class="col-12 col-lg-6">
                                  <div class="block">
                                    <label>Display</label>
                                    <div class="buttons">
                                        <a href="javascript:void(0);" id="grid_3column" class="fas fa-th-large active"></a>
                                        <a href="javascript:void(0);" id="list_3column" class="fas fa-list"></a>
                                    </div>
                                </div>
                              </div>
                              <div class="col-12 col-lg-6">
                                  <form class="form-inline justify-content-end">
                                      
                                      
                                      <div class="form-group">
                                          <label>Sort by</label> 
                                          <div class="select-control">
                                          <select class="form-control ">
                                            
                                              <option selected>Popular</option>
                                              <option value="1">Newest</option>
                                              <option value="2">Offers</option>
                                              <option value="3">Old</option>
                                            </select>
                                            </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label>Items</label> 
                                          <div class="select-control">
                                          <select class="form-control ">
                                              <option selected>08</option>
                                              <option value="1">20</option>
                                              <option value="2">16</option>
                                              <option value="3">12</option>
                                              <option value="4">08</option>
                                              <option value="5">04</option>
                                            </select>
                                          </div>
                                          
                                      </div>
                                      
                                      
                                      
                                     
                                    </form>
                              </div>
                              </div>
                              </div>  
                            </div>
                          </div>  
                        <div class="row">   
                                               
                          <div id="swap" class="col-12 col-sm-12">
                              <div class="row">  






  <?php 
	
  $categoryid = ( isset( $_GET['categoryid'] ) && is_numeric( $_GET['categoryid'] ) ) ? intval( $_GET['categoryid'] ) : 0;
  $countryid = ( isset( $_GET['countryid'] ) && is_numeric( $_GET['countryid'] ) ) ? intval( $_GET['countryid'] ) : 0;
  $brandid = ( isset( $_GET['brandid'] ) && is_numeric( $_GET['brandid'] ) ) ? intval( $_GET['brandid'] ) : 0;
if ( $categoryid != 0 ){
$productlist=$product->Productbycategory($categoryid);
}else if($countryid != 0 ){
$productlist=$product->Productbycountry($countryid);
}else if($brandid != 0 ){
$productlist=$product->Productbybrand($brandid);
}else{
$productlist=$product->productsall();
}
   $i = 0; 
    foreach($productlist as $item): ?>

                                  <div class="col-12 col-sm-6  col-lg-4">
                                      <div class="product">
                                          <article>                           
                                            <div class="pro-thumb "> 
                                                <div class="pro-icons mobile-pro-icons d-lg-none d-xl-none">
                                                    <a href="wishlist.html" class="icon active swipe-to-top">
                                                      <i class="fas fa-heart"></i>
                                                    </a>
                                                    <div class="icon swipe-to-top" data-toggle="modal" data-target='<?php echo "#p".$item['proID']; ?>'>
                                                      <i class="fas fa-eye"></i>
                                                    </div>
                                                     <a href="" class="icon swipe-to-top"><i class="fas fa-shopping-cart" data-fa-transform="rotate-90"></i></a>
                                                    </div>
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
                                                    <a href="wishlist.html" class="icon active swipe-to-top">
                                                      <i class="fas fa-heart"></i>
                                                    </a>
                                                   <div class="icon swipe-to-top" data-toggle="modal" data-target='<?php echo "#p".$item['proID']; ?>'>
                                <i class="fas fa-eye"></i>
                              </div>
                              <a href="" class="icon swipe-to-top"><i class="fas fa-shopping-cart" data-fa-transform="rotate-90"></i></a>
                                                    </div>
                                                  
                  
                                                  <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                                </div>
                                              
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
                                             
                                                <div class="pro-mobile-buttons d-lg-none d-xl-none">
                                                    <button type="button" class="btn btn-secondary btn-block swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                                    
                                                    
                                              </div>
                                              
                                            </div>
                                                
                                          </article>
                                        </div>
                                  </div>
                                


         <?php $i++;  endforeach;?>



















                                </div>
                          </div>
                        </div>  
                    </div>
                    <div class="pagination justify-content-between ">
                        
                        <label  class="col-form-label">Showing 1&ndash;<span class="showing_record">1</span>&nbsp;of&nbsp;<span class="showing_total_record">23</span>&nbsp;results.</label>   
                              <div class="col-12 col-sm-6">
                                  <ol class="loader-page">
                                    <li class="loader-page-item "><a href="#">  
                                      <i class="fa fa-angle-double-left" style="font-size:12px"></i></a>
                                    </li>
                                    <li  class="loader-page-item"><a href="#">1</a></li>
                                    <li  class="loader-page-item "><a href="#">2</a></li>
                                    <li  class="loader-page-item "><a href="#">3</a></li>
                                    <li  class="loader-page-item "><a href="#">4</a></li>
                                    <li  class="loader-page-item "><a href="#"> 
                                      <i class="fa fa-angle-double-right" style="font-size:12px"></i></a>
                                    </li>
                                  </ol>
                              </div>
                      </div>
                </div>
            </div>
          </div>
        </section> 
<?php
require('footer.php');
?>

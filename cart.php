<?php 
require('header.php');
?>
<!-- cart Content -->
<div class="container-fuild">
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cart Page</li>
            </ol>
        </div>
      </nav>
</div>
<section class="pro-content cart-content">      
    <div class="container"> 
        <div class="row">
            <div class="pro-heading-title">
                <h1>
                    Cart Page
                </h1>
              </div>
        </div>
  <div class="row">
    
      <div class="col-12 col-lg-9">
          <table class="table top-table">
            <thead>
              <tr class="d-flex">
                <th class="col-12 col-md-2">ITEM(S)</th>
                <th class="col-12 col-md-4"></th>
                <th class="col-12 col-md-2">PRICE</th>
                <th class="col-12 col-md-2">QTY</th>
                <th class="col-12 col-md-2">SUBTOTAL</th>
              </tr>
            </thead>
            <tbody>
            	<?php
            	$total=0;
            	if(isset($_SESSION["shopping_cart"])){
$usercart=$_SESSION["shopping_cart"];
foreach($usercart as $cart){ ?>
              <tr class="d-flex">
                <td class="col-12 col-md-2" >
                  <img class="img-fluid" src='images/product/<?php echo $cart['item_image'];?>' alt="Product Image"/>
                </td>
                  <td class="col-12 col-md-4">
                    <div class="item-detail">
                    <!--   <span class="pro-info">Category</span> -->
                        <h2 class="pro-title">
                            
                          <a href="#">
                        <?php echo $cart['item_name']; ?>
                        </a>
                         
                        </h2>
                        <div class="item-attributes"></div>
                        <div class="item-controls">
                            <!-- <button type="button" class="btn" >
                                <span class="fas fa-pencil-alt"></span>
                          
                            </button> -->
                           <a href='<?php echo "?action=delete&pid=".$cart['item_id'];?>'> <button type="button" class="btn" >
                                <span class="fas fa-times"></span>
                            </button></a>
                        </div>
                      </div>
                  </td>
                <td class="col-12 col-md-2"><span class="item-price"><?php echo $cart['item_price']; ?>kd</span></td>
                <td class="col-12 col-md-2">
                    <div class="input-group item-quantity">
                        
                        <input type="text" id="quantity1" name="quantity" class="form-control" value="1" >
                        
                            <span class="input-group-btn">
                                <button type="button" value="quantity1" class="quantity-plus btn"  data-type="minus" data-field="">
                                  <span class="fas fa-plus"></span>
                                </button>
                            
                                <button type="button" value="quantity1" class="quantity-minus btn" data-type="plus" data-field="">
                                    <span class="fas fa-minus"></span>
                                </button>
                            </span>
                        
  
                    </div>
                </td>
                <td class="col-12 col-md-2"><span class="item-price"><?php echo $cart['item_price']*$cart['item_quantity']; ?>kd</span></td>
              </tr> 
             <input type="hidden" class="sessioncartid" id="sessioncartid" name="productid[]" value='<?php echo  $cart['item_id']; ?>'>
  <?php $total=$total + ($cart['item_price']*$cart['item_quantity']); } }?>
            </tbody>
          </table>
  
          <div class="col-12 col-lg-12 mb-4">
  
            <div class="row justify-content-between">
              <div class="col-12 col-lg-4">
                <div class="row">
                   <!--  <div class="input-group">
                        <input type="text" class="form-control" style="height: 43px;" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="coupon-code">
                        <div class="input-group-append">
                          <button class="btn btn-secondary swipe-to-top" type="button" id="coupon-code">Apply</button>
                        </div>
                      </div> -->
                </div>
              </div>
              <div class="col-12 col-lg-7">              
                <div class="row justify-content-end btn-res">
                  <a href="index.php"><button type="button" class="btn btn-link ">Continue Shopping</button></a>
                      <!-- <button type="button" class="btn btn-primary swipe-to-top">Update</button> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <table class="table right-table">
            <thead>
              <tr>
                <th scope="col" colspan="2" >Order Summary</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Subtotal</th>
                <td ><?php echo $total; ?>kd</td>
                
              </tr>
              <tr>
                <th scope="row">Coupon Code</th>
                <td >00</td>
                
              </tr>
              <tr class="item-price">
                <th scope="row">Total</th>
                <td ><?php echo $total; ?>kd</td>
                
              </tr>
            </tbody>
          </table>
          <button class="btn btn-secondary btn-block swipe-to-top">Proceed to checkout</button>
        </div>
  </div>
  
  </div>
</section>
 
<?php
require('footer.php');
?>


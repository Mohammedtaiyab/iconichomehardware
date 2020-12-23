<?php 
require('header.php'); 
?>

 <section class="pro-content checkout-content">   
          <div class="container"> 
            <div class="row">
                <div class="pro-heading-title">
                    <h1>
                        Checkout Page
                    </h1>
                  </div>
            </div>
            <div class="row">
              <div class="col-12 col-xl-9">
                  <div class="row">
                    <div class="checkout-module">
                      <ul class="nav nav-pills checkoutd-nav mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link  active" id="pills-shipping-tab" data-toggle="pill" href="#pills-shipping" role="tab" aria-controls="pills-shipping" aria-selected="true"><span class="d-flex d-lg-none">1</span><span class="d-none d-lg-flex">Shipping Address</span></a>
                          </li>
                        </ul>
                       
                        <div class="tab-content" >
                          <div class="tab-pane fade show active" id="pills-shipping" role="tabpanel" aria-labelledby="pills-shipping-tab">
                            <table class="table">
              <thead>
                <tr class="d-flex">
                  <th class="col-12 col-md-8">DEFAULT ADDRESS</th>
                  <th class="col-12 col-md-4">ACTION</th>
                </tr>
              </thead>
              <tbody>
              	<?php 
					$check=0;
			$useraddress=$user->getaddress($_SESSION['userId']);
			foreach ($useraddress as $address) {
			$check++;	?>
                <tr class="d-flex">
                  
                  <td class="col-12 col-md-8">
                    
                    <div class="form-check">
                        <?php if($address['Status']==1){?>
    <input type="checkbox" class="form-check-input" name="addressid" onclick="onlyOne(this)" checked>
  <?php }else{?>
    <form action="logging.php" method="POST">
<input type="checkbox" class="form-check-input" name="chkaddressid" value='<?php echo $address['Id'];?>' onChange="this.form.submit()" onclick="onlyOne(this)">
</form>
<?php } ?>
                       <label class="form-check-label" for="exampleRadios1">
                         <span>Name:</span> <?php echo $address['Name']; ?><br>
                         Phone:<?php echo $address['Phone']; ?><br>
                         Office/Shop:<?php echo $address['Office']; ?><br>
                         Address: <?php echo $address['Address'].",".$address['Area'],",".$address['Block']; ?>
                        </label>

                  </div>
                  </td>
                
                  <td class=" col-12 col-md-4">
                    <ul  class="controls">
                        <li> <a href='shipping-address.php?addid=<?php echo $address['Id'];?>'> <i class="fas fa-pen"></i> Edit</a></li>
                    
                    
                    </ul>
                    
                  </td>
                </tr>
                
                <?php } ?>
              </tbody>
            </table>
                          </div>
                       
                        <!-- End HEre -->
                          </div>
                  </div>
                  </div>
              </div>
              <div class="col-12 col-xl-3">
                  <table class="table right-table">
                    <thead>
                    	<?php
$total=0;
if(isset($_SESSION["login"])){
	$usercart=$product->fatchcart($_SESSION['userId']);
foreach($usercart as $cart){ 
	$total=$total + ($cart['Price']*$cart['quantity']);} }?>
                      <tr>
                        <th scope="col" colspan="2">Order Summary</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Subtotal</th>
                        <td ><?php echo $total;?>KD</td>
                        
                      </tr>
                      <tr>
                        <th scope="row">Coupon Code</th>
                        <td >00.00</td>x.
                        
                      </tr>
                      <tr>
                          <th scope="row">TAX</th>
                          <td >00.00</td>
                          
                        </tr>
                        <tr>
                            <th scope="row">FLat Rate Delivery</th>
                            <td >1.00 KD</td>
                            
                          </tr>
                      <tr class="item-price">
                        <th scope="row">Total</th>
                        <td ><?php echo $total+1;?>KD</td>
                        
                      </tr>
                      <tr>
                        <th> 
                                </th> 
                      </tr>
                    </tbody>
                      </table>
<form method="post" id="paymentform" action="payment.php">
<input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"name="ORDER_ID" autocomplete="off"value="<?php echo  "ORDS" . rand(10000,99999999)?>">
<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value='<?php echo $_SESSION['userId']?>'>
<!-- <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"> -->
<!-- <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"  size="12" name="CHANNEL_ID" autocomplete="off" value="WEB"> -->
<input type="hidden" title="TXN_AMOUNT" tabindex="10"type="text" name="TXN_AMOUNT" value='<?php echo $total;?>'>
<!-- <input type="hidden" title="" tabindex="10"type="text" name="cart" value='<?php //echo $_SESSION["shopping_cart"];?>'> -->
<input type="hidden" title="" tabindex="10"type="text" name="customermail" value='<?php echo $_SESSION['customermail'];?>'>
  <button class="mt-3 sb-dark btn btn-secondary btn-block swipe-to-top" name="payment">Place</button>
</form>

                        <!--   <a href='payment.php'>  <button class="">Pay</button></a></th> -->
                  
                
                  
              </div>
            </div>
             <div class="row">
            <a data-toggle="pill" href="#pills-billing" class="btn btn-light swipe-to-top cta">Back</a>

                                               
                                              </div>
          </div>
        </section>
<?php
require('footer.php');
?>
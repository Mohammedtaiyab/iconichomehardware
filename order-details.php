<?php 
require('header.php'); 
?>

  <!--My Order Content -->
     <div class="container-fuild">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
            </div>
          </nav>
    </div>
    <section class="pro-content order-content">
        <div class="container">
            <div class="row">
                <div class="pro-heading-title">
                    <h1>
                        Order Page
                    </h1>
                  </div>
            </div>
          <div class="row">
              
            <div class="col-12 col-lg-3   d-block d-xl-block"> 
                
                 
             <ul class="list-group mb-4">
                        <li class="list-group-item">
                            <a class="nav-link" href="profile.php">
                                <i class="fas fa-user"></i>
                              Profile          
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link" href="">
                                <i class="fas fa-heart"></i>
                              Wishlist                   
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link" href="orders.php">
                                <i class="fas fa-shopping-cart"></i>
                              Orders                   
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link" href="shipping-address.php">
                                <i class="fas fa-map-marker-alt"></i>
                              Shipping Address                           
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link" href="logging.php?logout=true">
                                <i class="fas fa-power-off"></i>
                              Logout                               
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link" href="change-password.html">
                                <i class="fas fa-unlock-alt"></i>
                              Change Password                            
                            </a>
                          </li> 
                      </ul>
            </div>


              <div class="col-12 col-lg-9 ">
<?php 
if(isset($_GET["order"])){
$orderId=$_GET["order"];
}
$usercart=$order->fatchordersingle($orderId);
?>
                
                  <div class="row">
                    <div class="col-12 col-md-6">
                            <h5>Order ID <?php echo $usercart[0]['pay_id'];?>
                            </h5>
        
                        <table class="table order-id">
                            <tbody>
                                <tr class="d-flex">
                                  <td class="col-6 col-md-6 pb-0"><strong>Order Status</strong></td>
                                  <td class="pending col-6 col-md-6 pb-0" ><p><?php echo $usercart[0]['orderstatus'];?></p></td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-6 col-md-6 "><strong>Order Date</strong></td>
                                    <td  class="col-6 col-md-6"><?php echo $usercart[0]['sales_date'];?></td>
                                  </tr>
                              </tbody>
                        </table>
  
                    </div>
                    <div class="col-12 col-md-6">
                        <h4>
                            Payment Methods
                        </h4> 
                        
                        <table class="table order-id">
                            <tbody>
                                <tr class="d-flex">
                                  <td class="col-6 pb-0"><strong>Shipping Method</strong> </td>
                                  <td class="col-6 pb-0">--</td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-6"><strong>Payment Method</strong> </td>
                                    <td class="underline col-6">Cash On Delivery</td>
                                  </tr>
                              </tbody>
                        </table>
  
                    </div> 
                      
                  </div>
  
                  <div class="row">
                      <div class="col-12 col-md-6">
                          <h4>Shipping Details
                            </h4>  
                          
                          <table class="table order-id">
                              <tbody>
                                  <tr class="d-flex"> 
                                    <td class="address col-12 col-md-6 pb-0"><strong>Shipping Address</strong></td>
                                    
                                    
                                  </tr>
                                  <tr class="d-flex">
                                      <td  class="address col-12 col-md-12"> Office/Shop:<?php echo $usercart[0]['Office']; ?><br>
                         Address: <?php echo $usercart[0]['Address'].",".$usercart[0]['Area'],",".$usercart[0]['Block']; ?></td>
                                      
                                    </tr>
                                </tbody>
                          </table>
    
                      </div> 
                    </div>
                    
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
                          $i=1;
                $total=0;
              foreach($usercart as $cart){ ?>


                          <tr class="d-flex">
                            <td class="col-12 col-md-2" >
                          <img class="img-fluid" src='images/product/<?php echo $cart['Image'];?>' alt="Product Image">
                            </td>
                              <td class="col-12 col-md-4">
                                <div class="item-detail">
                                    <span class="pro-info"></span>
                                    <h3 class="pro-title">
                                        
                                      <a href="#">
                                       <?php echo $cart['ProName'];?>
                                    </a>
                                     
                                    </h3>
                                    
                                    <div class="item-attributes"></div>
                                 
                                  </div>
                              </td>
                            <td class="col-12 col-md-2"><span class="item-price"><?php echo $cart['Price'];?>Kd/-</span></td>
                            <td class="col-12 col-md-2">
                                <div class="input-group "> <?php echo $cart['quantity'];?></div>
                            </td>
                            <td class="col-12 col-md-2"><span class="item-price"><?php echo $cart['Price']*$cart['quantity']; ?>kd/-</span></td>
                          </tr> 
                        <?php } ?>
             
                        </tbody>
                      </table>
  
                  <div class="row">
                      <div class="col-12 col-sm-12">
                          <div class="comments-area">
                              <h4>
                                  Order Comments
                              </h4>
                              <p></p>
                          </div>
                      </div>
                  </div>
                               
                    
                <!-- ............the end..... -->
              </div>
            </div>
          </div>
        </section>




















<?php
require('footer.php');
?>
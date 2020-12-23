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
                
                <table class="table order-table">
                    
                  <thead>
                    <tr class="d-flex">
                        <th class="col-12 d-block d-md-none"></th>
                      <th class="col-12 col-md-3">Order ID</th>
                      <th class="col-12 col-md-3">Order Date</th>
                      <th class="col-12 col-md-3">Total Price</th>
                      <th class="col-12 col-md-3" >Order Status</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
                  	$usercart=$order->fatchorder($_SESSION['userId']);
					foreach($usercart as $cart){ ?>
                    <tr class="d-flex">
                        <td class="col-12 d-block d-md-none"><span>order# 1</span></td>
                      <td class="col-12 col-md-3"><a href='order-details.php?order=<?php echo $cart['pay_id']; ?>'><?php echo $cart['pay_id']; ?></a></td>
                      <td class="col-12 col-md-3">  
                          <?php echo $cart['sales_date']; ?>
                      </td>
                      <td class="col-12 col-md-3">
                       <?php echo $cart['amount']; ?>K.D/-
                      </td>
                      <td class="col-12 col-md-3">
                        <div class="text-secondary"><?php echo $cart['Status'];?></div>
                      </td>
                    </tr>

                <?php } ?>
         
                  </tbody>
                </table>
               
            </div>
          </div>
        </div>
      </section>


<?php
require('footer.php');
?>
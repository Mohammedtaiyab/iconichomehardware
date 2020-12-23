<?php
require ('header.php');
?>


<!-- Profile Content -->
      
        <div class="container-fuild">
            <nav aria-label="breadcrumb">
                <div class="container">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </div>
              </nav>
        </div>
        <section class="pro-content profile-content">
            <div class="container ">
              <div class="row">
                  <div class="pro-heading-title">
                      <h1>
                          User Details
                      </h1>
                    </div>
              </div>
              <?php $profile=$user->profile($_SESSION['userId']);
                                                    ?>
              <div class="row">
                   
                  <div class="col-12">
                    
                    <div class="media">
                      <img src="images/miscellaneous/avatar.jpg" alt="avatar">
                      <div class="media-body">
                        <h5 class="mt-0"><?php echo $profile[0]['Name'];?></h5>
                        <p>E-mail:<a href="#"><?php echo $profile[0]['Email'];?></a></p>
                        
                      </div>
                    </div>
                    
                  </div>  
              </div>
              <div class="row ">
                <div class=" col-12 col-lg-3">
                    
                    
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
                    <form action="logging.php" method="POST">
                    <div class="row">
                        
                      <div class="col-12 col-md-7">
                          <h5>Update Profile</h5>
                          
                              <div class="from-group row mb-4 pt-3">
                                
                                  <div class="input-group col-12">
                                    
                                    <input type="text" name="name" class="form-control" id="inlineFormInputGroup0" value='<?php echo $profile[0]['Name'];?>'>
                                  </div>
                                </div>
                                <div class="from-group row mb-4">
                                  
                                    <div class="input-group col-12">
                                      
                                      <input type="email" class="form-control" id="inlineFormInputGroup1" value='<?php echo $profile[0]['Email'];?>' Disabled>
                                    </div>
                                  </div>
                                 
                                  <div class="from-group row mb-4">
                                    
                                      <div class="input-group col-12">
                                          <select class="form-control" id="inlineFormInputGroup3" name="gender">
                                              <option>Gender</option>
                                              <?php if($profile[0]['Gender']=='Male'){
                                              	echo "<option Selected>Male</option>
                                              <option>Female</option>";
                                              }else{
                                              	echo "<option >Male</option>
                                              <option Selected>Female</option>";
                                              }

                                           ?>
                                              
                                            </select>
                                      </div>
                                    </div>
                                    
                                    
                                      <div class="from-group row mb-4">
                                       
                                          <div class="input-group col-12">
                                              <input type="text" name="phone" class="form-control" value='<?php echo $profile[0]['Mobile'];?>' id="inlineFormInputGroup4">
                                            </div>
                                        </div>
                                    
                            
                              
                                <button type="submit" name="profile" class="btn btn-secondary mt-3 swipe-to-top">Update</button>
                          
                      </div>
                      <div class="col-12 col-md-5">
                           <ul>
                           <!--   <li>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                             </li>
                             <li>
                                Aliquam ac mi ultricies, congue ex vel, aliquam nisi.
                             </li>
                             <li>
                                Cras ultrices felis at elit luctus, eget venenatis lacus luctus.
    Cras vel nisl non ligula euismod elementum.
                             </li>
                             <li>
                                Curabitur volutpat risus ornare justo eleifend, id imperdiet neque iaculis.
    Etiam sagittis eros id rhoncus bibendum.
    Phasellus et arcu in magna congue fermentum.
                             </li>
                            -->
                           </ul>
                      </div>
                    
                    </div>
                  </form>
                  <!-- ............the end..... -->
                </div>
              </div>
            </div>
          </section>

<?php
require ('footer.php>');
?>
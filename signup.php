<?php 
require('header.php'); 
?>

      <section class="pro-content login-content center-content-page">
          <div class="container"> 
              <div class="row justify-content-center">
                  <div class="pro-heading-title">
                      <h1>
                          Login Page
                      </h1>
                    </div>
              </div>
            
              <div class="row justify-content-center">
                  
              
                  <div class="col-12 col-sm-12 col-md-8 col-lg-5 mb-5 ">
                      
                      <ul class="nav nav-tabs" id="registerTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">New Customer</a>
                          </li>
                          
                        </ul>
                        <div class="tab-content" id="registerTabContent">
                          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                              <div class="registration-process">
                              <form action="logging.php" method="POST">
                                  <div class="from-group mb-4">
                                   
                                    <div class="input-group col-12">
                                      
                                      <input type="text" name="email" class="form-control" id="inlineFormInputGroup2" placeholder="Enter Your Email">
                                    </div>
                                  </div>
                                  <div class="from-group mb-4">
                                    
                                      <div class="input-group col-12">
                                        
                                        <input type="password" name="password" class="form-control" id="inlineFormInputGroup3" placeholder="Enter Your Password">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <button class="btn btn-secondary swipe-to-top" type="submit" id="login" name="login">Login</button>
                                        <a href="#" class="btn btn-link">Forgot Password</a>
                                    </div>
                              </form>
                              </div>
                              
                          </div>
                          <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                              <div class="registration-process">
                              <form action="logging.php" method="POST">
                                  <div class="from-group  mb-4">
                                     
                                      <div class="input-group col-12">
                                        
                                        <input type="text" name="name" class="form-control" id="inlineFormInputGroup4" placeholder="Enter Your Fullname">
                                      </div>
                                    </div>
                                  <div class="from-group mb-4">
                                   
                                    <div class="input-group col-12">
                                      
                                      <input type="text" name="email" class="form-control" id="inlineFormInputGroup5" placeholder="Enter Your Email">
                                    </div>
                                  </div>
                                  <div class="from-group mb-4">
                                    
                                      <div class="input-group col-12">
                                        
                                        <input type="password" name="password" class="form-control" id="inlineFormInputGroup6" placeholder="Enter Your Password">
                                      </div>
                                    </div>
                                    <div class="from-group  mb-4">
                                      
                                        <div class="input-group col-12">
                                          
                                          <input type="text" class="form-control" name="phone" id="inlineFormInputGroup7" placeholder="Enter Your Mobile Number">
                                        </div>
                                      </div>
                                    <div class="from-group">
                                        <div class="col-12">
                                        <button class="btn btn-primary swipe-to-top" type="submit" name="reg_user">Create Account</button>
                                      </div>
                                    </div>
                              </form>
                              </div>
                          </div>
                          
                          
                        </div>
                  </div>
  
              </div>
  
          </div>
        </section>


<?php
require('footer.php');
?>
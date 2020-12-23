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

                                <form method="POST" action='?action=add&pid=<?php echo $item['ID'];?>'>
                                  <div class="input-group item-quantity">
                                        
                                  <input type="text" id='quantity<?php echo $item['ID'];?>' name="quantity" class="form-control quantity " value="1">
                                      
                                      <span class="input-group-btn">
                                          <button type="button" value='quantity<?php echo $item['ID'];?>' class="quantity-plus btn" data-type="plus" data-field="">
                                              <i class="fas fa-plus"></i>
                                          </button>
                                      
                                          <button type="button" value='quantity<?php echo $item['ID'];?>' class="quantity-minus btn" data-type="minus" data-field="">
                                              <i class="fas fa-minus"></i>
                                          </button>
                                      </span>
                                    </div>
                                    <button type="Submit" class="btn btn-secondary btn-lg swipe-to-top" onclick="notificationCart();">Add to Cart</button>
                                  </form>
                            
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
                <div class="col-12 col-lg-2">
                  <div class="single-footer">
                    
                    <div class="pro-about">
                        <div class="" id="">
                            <div class="card card-body">
                        <ul class="pl-0 mb-0">
                          <li><a href="index.php">
                              <img src="images/logo/hamza.png" alt="logo here">                                            
                            </a></li>
                         <li> <span>Iconic Home Hardware is a genuine <br> online Hardware store in Kuwait.</span> </li>
                      <li><i class="fab fa-phone" aria-hidden="true"></i><span>+965 65030772</span><span><a href="#">sales@iconichomehardware.com</a> </span> </li>
                    
                        </ul>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-2">
                  
                    <div class="single-footer">
                         <h5>Info</h5>
                        <div class="" id="collapseFooterOne">
                            <div class="card card-body">
                            <ul class="pl-0 mb-0">
                                  <li> <a href="index.php">Home</a> </li>
                      <li> <a href="products.php">Products</a> </li>
                      <li> <a href="aboutus.php">About Us</a> </li>
                      <li> <a href="contact.php">Contact Us</a> </li>
                              </ul>
                              </div>
                          </div>
                        
                      </div>
                </div>
              <div class="col-12 col-lg-2">
                  
                    <div class="single-footer">
                    <h5>Partners</h5>
                        <div class="" id="collapseFooterOne">
                            <div class="card card-body">
                            <ul class="pl-0 mb-0">
                             <?php 
$subcategory=$category->getDatabrand();
$i=0;
foreach ($subcategory as $sub) { 
  if($i>=3){break;}else{?>
    <li> <a href="index.php"><?php echo $sub['Company']; ?></a> </li>
                       

                        <?php }$i++; } ?>
      
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
                               <li><a href="mailto:hamzajohar52@gmail.com" class="fab tw fa-google"></a></li>
                          <li><a href="https://api.whatsapp.com/send?phone=+96565030772" class="fab sk fa-whatsapp"></a></li>
                          <li><a href="https://www.instagram.com/iconichomehardware/" class="fab ig fa-instagram"></a></li>
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
            <div class="col-12 col-lg-2">
              <div class="single-footer">
                <div class="pro-about">
                  
                    <ul class="pl-0 mb-0">
                      <li><a href="index-2.html">
                          <img src="images/logo/hamza.png" alt="logo here">                                            
                        </a></li>
                     
                    </ul>
                </div>
              </div>
            </div>
              <div class="col-12 col-lg-4">
              <div class="single-footer">
                <div class="pro-about">
                  
                    <ul class="pl-0 mb-0">
                
                      <li> <span>Iconic Home Hardware is a genuine <br> online Hardware store in Kuwait.</span> </li>
                      <li><span>+965 65030772</span><span><a href="#">sales@iconichomehardware.com</a> </span> </li>
                
                    </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <div class="single-footer">
                    <h5>Info</h5>
                    
                    <ul class="pl-0 mb-0">
                      <li> <a href="index.php">Home</a> </li>
                      <li> <a href="products.php">Products</a> </li>
                      <li> <a href="aboutus.php">About Us</a> </li>
                      <li> <a href="contact.php">Contact Us</a> </li>
                    </ul>
                  </div>
            </div>
    
             <div class="col-12 col-md-6 col-lg-2">
                <div class="single-footer">
                    <h5>Partners</h5>
                    
                    <ul class="pl-0 mb-0">
                        <?php 
$subcategory=$category->getDatabrand();
$i=0;
foreach ($subcategory as $sub) { 
  if($i>=3){break;}else{?>
    <li> <a href="index.php"><?php echo $sub['Company']; ?></a> </li>
                       

                        <?php }$i++; } ?>
      
                    </ul>
                  </div>
            </div>
            <div class="col-12 col-lg-2">
              <div class="single-footer">
                  <div class="pro-socials">
                      <h5>Follow Us</h5>
                      <ul>
                     
                          <li><a href="mailto:hamzajohar52@gmail.com" class="fab tw fa-google"></a></li>
                          <li><a href="https://api.whatsapp.com/send?phone=+96565030772" class="fab sk fa-whatsapp"></a></li>
                          <li><a href="https://www.instagram.com/iconichomehardware/" class="fab ig fa-instagram"></a></li>
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
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>




<script type="text/javascript">
  // -----------------for-Shopping-cart-------------
$(document).ready(function(){
    update_amounts();
    $('.qty, .price').on('keyup keypress blur change', function(e) {
      update_amounts();
    });
});
function update_amounts(){
  var sum = 0.0;
      $('#myTable > tbody  > tr').each(function() {
      var qty = $(this).find('.qty').val();
        var price = $(this).find('.price').val();
        var amount = (qty*price)
        sum+=amount;
        $(this).find('.amount').text(''+amount);
      });
  $('.total').text(sum);
}



//----------------for quantity-increment-or-decrement-------
var incrementQty;
var decrementQty;
var plusBtn  = $(".quantity-plus");
var minusBtn = $(".cart-qty-minus");
var incrementQty = plusBtn.click(function(event) {
  var $n =$(event.target).val();
  var $q=$("#"+$n);
 $q.val(Number($q.val())+1);
//alert($q);
  update_amounts();
});

var decrementQty = minusBtn.click(function() {
    var $n = $(this)
    .parent(".button-container")
    .find(".qty");
  var QtyVal = Number($n.val());
  if (QtyVal > 0) {
    $n.val(QtyVal-1);
  }
  update_amounts();
});













</script>






















  <script type="text/javascript">

$(document).ready(function(){
$(".quantity-plus").on('click', function() {
    $(this).value
  });
});





    function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
$(document).ready(function(){
function myFunction() {
 alert("in here");
}
// $(".quantity-plus").on('click', function() {
// alert("in here");
//   });
  //  $(".qty").change(function(ev){
  // alert("in here");
  // });

  $('.dec').on('click', function(ev) {
myFunction();
     $currObj = $(ev.currentTarget);
    var currQCount = getCurrQCount($currObj); 
    if(currQCount<=1){
    }

  updateDataless($currObj, currQCount);
   });

   $('.inc').on('click', function(ev) {
    myFunction();
     $currObj = $(ev.currentTarget);
      var currQCount = getCurrQCount($currObj);
      updateData($currObj, currQCount);
   });


  function getCurrQCount($currObj){

    return $currObj.siblings(".quantity").val();
  }
  // function getsecid($currObj){
  //  var secid= $currObj.siblings(".sessioncartid").val();
  //  alert("here" + secid);
  //  return $currObj.siblings(".sessioncartid").val();
  // }
  function updateData($currObj, currQCount){
    $currObj.siblings(".quantity").val(currQCount);
    var $parentObj = $currObj.closest(".item-row");
    var itemPrice = $parentObj.find(".item_price").attr("data-price");
    currQCount++;
    var itemCost = Number(itemPrice) * currQCount;
    $parentObj.find(".item-cost-val").text(itemCost);
    var subTotal = getSubTotal();
    var vatAmount = getVatAmount();
    var totalCost = subTotal + vatAmount;
    $("#subtotal").val(subTotal);
    $("#total_vat").text(vatAmount);
    $("#total_cost").text(subTotal);
   // $(".totalbill input").val=subTotal;
  }
  function updateDataless($currObj, currQCount){
   
    $currObj.siblings(".quantity").val(currQCount);
    var $parentObj = $currObj.closest(".item-row");
    var itemPrice = $parentObj.find(".item_price").attr("data-price");
    currQCount--;
    var itemCost = Number(itemPrice) * currQCount;
    $parentObj.find(".item-cost-val").text(itemCost);
    var subTotal = getSubTotal();
    var vatAmount = getVatAmount();
    var totalCost = subTotal;
    $("#subtotal").val(subTotal);
    $("#total_vat").text(vatAmount);
    $("#total_cost").text(subTotal);
  
   // $(".totalbill input").val=subTotal;
  }
  function getSubTotal(){
    var subTotal = 0;
    $(".item-cost-val").each(function() {
      subTotal+= Number($(this).text());
    });
    
    return subTotal;
  }

  function getVatAmount(){
    var vatPercentage = 0.2;
    return vatPercentage * getSubTotal();
  }
if(!loggedin){
// show modal
    $('#loginModal').modal('show');
}

});

  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">
    $(function(){
    $(document).on('click', '.deleteAdd', function(e){
    e.preventDefault();
     $('#deleteAdd').modal('show');
    var id = $(this).data('id');
    $('.addressid').val(id);
  });
      });
  </script>
      </body>
</html>
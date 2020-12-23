<?php
require ('header.php');
?>


  <!--Shipping Content -->
  <div class="container-fuild">
      <nav aria-label="breadcrumb">
          <div class="container">
              
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shipping Address</li>
              </ol>
          </div>
        </nav>
  </div>
  <section class="pro-content shipping-content">
    <div class="container">
        <div class="row">
            <div class="pro-heading-title">
                <h1>
                    Shipping Address
                </h1>
              </div>
        </div>
      <div class="row">
          
        <div class="col-12 col-lg-3">
             
            
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
            
            
            <table class="table">
              <thead>
                <tr class="d-flex">
                  <th class="col-12 col-md-8">DEFAULT ADDRESS</th>
                  <th class="col-12 col-md-4">ACTION</th>
                </tr>
              </thead>
              <tbody>
                <?php $useraddress=$user->getaddress($_SESSION['userId']);
foreach ($useraddress as $address) {  ?>
                <tr class="d-flex">
                  
                  <td class="col-12 col-md-8">
                    
                    <div class="form-check">
          
                      <?php if($address['Status']==1){?>
    <input type="checkbox" class="form-check-input" name="addressid" onclick="onlyOne(this)" checked>
  <?php }else{?>
    <form action="logging.php" method="POST">
<input type="checkbox" class="form-check-input" name="addressid" value='<?php echo $address['Id'];?>' onChange="this.form.submit()" onclick="onlyOne(this)">
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
                 <li> <a href='?addid=<?php echo $address['Id'];?>'> <i class="fas fa-pen"></i> Edit</a></li>
                     <!--  <li><a href='#deleteAdd' class='deleteAdd' data-toggle='modal' data-id='<?php echo $address['Id'];?>'> <i class="fas fa-trash-alt"></i> Remove</a></li> -->
                    </ul>
                    
                </tr>
                <?php } ?>
                
              </tbody>
            </table>
            
       <?php if(isset($_GET['addid'])){
        $useraddress=$user->getaddressbyid($_GET['addid']);
     $name=$useraddress[0]['Name'];
      $phone=$useraddress[0]['Phone'];
      $office=$useraddress[0]['Office'];
      $area=$useraddress[0]['Area'];
      $address=$useraddress[0]['Address'];
      $block=$useraddress[0]['Block'];
      $detail=$useraddress[0]['Address2'];
       }else{
        $name="";
         $phone="";
         $office="";
         $area="";
           $address="";
           $block="";
            $detail="";
                }?>
            <div class="add-address">
                <form action="logging.php" method="POST" name="general-form">
                    <h4 >Personal Information</h4>
                    
                    <div class="form-row">
                        <div class="from-group col-md-6 mb-4">
                          <div class="input-group ">
                              <input type="hidden" name="userid" value='<?php echo $_SESSION['userId'];?>'>
                            <input type="text" name="fullname" value='<?php echo $name;?>' class="form-control" id="inlineFormInputGroup0" placeholder="Full Name" required>
                          </div>
                        </div>
                        <div class="from-group col-md-6 mb-4">
                          <div class="input-group ">
                      <label style="padding-top: 9px;">+965</label>
                             <input type="text" name="phone" value='<?php echo $phone;?>' class="form-control" id="inlineFormInputGroup8" placeholder="Phone" required> 
                          </div>
                        </div>
                    </div>



                    <div class="form-row">
                        <div class="from-group col-md-6 mb-4">
                            <div class="input-group ">
                              
                              <input type="text" class="form-control" value='<?php echo $office;?>' name="office" id="inlineFormInputGroup2" placeholder="Office/Shop Name" required>
                            </div>
                          </div>
                          <div class="from-group col-md-6 mb-4">
                              <div class="input-group ">
                                <select id="addressArea" name="area" class="form-control ng-pristine ng-valid ng-scope ng-not-empty ng-valid-required ng-touched"  required>
                               <?php if($area !=""){
                                echo "<option value='".$area."'  selected='selected'>".$area."</option>";
                               }?>
                                  <option value="" class="">Please select your Area</option>
                                  
                                  <optgroup label="Kuwait City (Capital)">
                                    
                                    <option label="Abdullah Al-Salem" value="20">Abdullah Al-Salem</option>
                                    
                                    <option label="Adailiya" value="27">Adailiya</option>
                                    
                                    <option label="Bneid Al Qar" value="46">Bneid Al Qar</option>
                                    
                                    <option label="Daiya" value="35">Daiya</option>
                                    
                                    <option label="Dasma" value="45">Dasma</option>
                                    
                                    <option label="Dasman" value="49">Dasman</option>
                                    
                                    <option label="Doha" value="47">Doha</option>
                                    
                                    <option label="Faiha" value="14">Faiha</option>
                                    
                                    <option label="Ghornata" value="53">Ghornata</option>
                                    
                                    <option label="Jaber Al Ahmad" value="2048">Jaber Al Ahmad</option>
                                    
                                    <option label="Kaifan" value="10">Kaifan</option>
                                    
                                    <option label="Khaldiya" value="12">Khaldiya</option>
                                    
                                    <option label="Kuwait City" value="4">Kuwait City</option>
                                    
                                    <option label="Mansouriya" value="21">Mansouriya</option>
                                    
                                    <option label="Mirqab" value="52">Mirqab</option>
                                    
                                    <option label="Mubarakiya Camps" value="84">Mubarakiya Camps</option>
                                    
                                    <option label="Nahda" value="892">Nahda</option>
                                    
                                    <option label="North West Sulaibikhat" value="5723">North West Sulaibikhat</option>
                                    
                                    <option label="Nuzha" value="26">Nuzha</option>
                                    
                                    <option label="Qadsiya" value="25">Qadsiya</option>
                                    
                                    <option label="Qibla" value="50">Qibla</option>
                                    
                                    <option label="Qortuba" value="43">Qortuba</option>
                                    
                                    <option label="Rawda" value="22">Rawda</option>
                                    
                                    <option label="Salhiya" value="51">Salhiya</option>
                                    
                                    <option label="Shamiya" value="13">Shamiya</option>
                                    
                                    <option label="Sharq" value="48">Sharq</option>
                                    
                                    <option label="Shuwaikh Administrative" value="5715">Shuwaikh Administrative</option>
                                    
                                    <option label="Shuwaikh Educational" value="5719">Shuwaikh Educational</option>
                                    
                                    <option label="Shuwaikh Industrial 1" value="5716">Shuwaikh Industrial 1</option>
                                    
                                    <option label="Shuwaikh Industrial 2" value="5717">Shuwaikh Industrial 2</option>
                                    
                                    <option label="Shuwaikh Industrial 3" value="5718">Shuwaikh Industrial 3</option>
                                    
                                    <option label="Shuwaikh Medical" value="5720">Shuwaikh Medical</option>
                                    
                                    <option label="Shuwaikh Residential" value="5714">Shuwaikh Residential</option>
                                    
                                    <option label="Sulaibikhat" value="54">Sulaibikhat</option>
                                    
                                    <option label="Surra" value="42">Surra</option>
                                    
                                    <option label="Yarmouk" value="44">Yarmouk</option></optgroup>
                                    
                                    <optgroup label="Hawally">
                                      <option label="Al-Bedae" value="74">Al-Bedae</option>
                                      
                                      <option label="Bayan" value="36">Bayan</option>
                                      
                                      <option label="Hawally" value="8900">Hawally</option>
                                      
                                      <option label="Hitteen" value="72">Hitteen</option>
                                      
                                      <option label="Jabriya" value="23">Jabriya</option>
                                      
                                      <option label="Maidan Hawally" value="33">Maidan Hawally</option>
                                      
                                      <option label="Ministries Zone" value="6859">Ministries Zone</option>
                                      
                                      <option label="Mishrif" value="29">Mishrif</option>
                                  
                                  <option label="Mubarak Al-Abdullah - West Mishref" value="70">Mubarak Al-Abdullah - West Mishref</option>
                                      
                                      <option label="Rumaithiya" value="28">Rumaithiya</option>
                                      
                                      <option label="Salam" value="73">Salam</option>
                                      
                                      <option label="Salmiya" value="9">Salmiya</option>
                                      
                                      <option label="Salwa" value="39">Salwa</option>
                                      
                                      <option label="Shaab" value="34">Shaab</option>
                                      
                                      <option label="Shuhada" value="71">Shuhada</option>
                                      
                                      <option label="Siddiq" value="75">Siddiq</option>
                                      
                                      <option label="Zahra" value="69">Zahra</option></optgroup>
                                      
                                      <optgroup label="Farwaniya">
                                        
                                        <option label="Abdullah Al-Mubarak - West Jeleeb" value="78">Abdullah Al-Mubarak - West Jeleeb</option>
                                        
                                        <option label="Airport" value="86">Airport</option>
                                        
                                        <option label="Andalous" value="65">Andalous</option>
                                        
                                        <option label="Ardhiya" value="62">Ardhiya</option>
                                        
                                        <option label="Ardhiya 4" value="6858">Ardhiya 4</option>
                                        
                                        <option label="Ardiya Small Industrial" value="87">Ardiya Small Industrial</option>
                                        
                                        <option label="Ardiya Storage Zone" value="88">Ardiya Storage Zone</option>
                                        
                                        <option label="Ashbeliah" value="77">Ashbeliah</option>
                                        
                                        <option label="Dhajeej" value="91">Dhajeej</option>
                                        
                                        <option label="Farwaniya" value="6">Farwaniya</option>
                                        
                                        <option label="Ferdous" value="61">Ferdous</option>
                                        
                                        <option label="Jeleeb Al-Shuyoukh" value="64">Jeleeb Al-Shuyoukh</option>
                                        
                                        <option label="Khaitan" value="16">Khaitan</option>
                                        
                                        <option label="Omariya" value="17">Omariya</option>
                                        
                                        <option label="Rabiya" value="18">Rabiya</option>
                                        
                                        <option label="Rai" value="76">Rai</option>
                                        
                                        <option label="Reggai" value="8">Reggai</option>
                                        
                                        <option label="Rehab" value="19">Rehab</option>
                                        
                                        <option label="Sabah Al-Nasser" value="63">Sabah Al-Nasser</option>
                                        
                                        <option label="Sheikh Saad Al Abdullah Airport" value="97">Sheikh Saad Al Abdullah Airport</option></optgroup>
                                        <optgroup label="Ahmadi">
                                          
                                          <option label="Abu Halifa" value="2">Abu Halifa</option>
                                          
                                          <option label="Al-Ahmadi" value="3">Al-Ahmadi</option>
                                          
                                          <option label="Al-Julaia'a" value="6860">Al-Julaia'a</option>
                                          
                                          <option label="Ali Sabah Al-Salem - Umm Al Hayman" value="82">Ali Sabah Al-Salem - Umm Al Hayman</option>
                                          
                                          <option label="Bnaider" value="6650">Bnaider</option>
                                          
                                          <option label="Dhaher" value="59">Dhaher</option>

                                          <option label="Egaila" value="79">Egaila</option>
                                          <option label="Fahad Al Ahmed" value="98">Fahad Al Ahmed</option>
                                          <option label="Fahaheel" value="5">Fahaheel</option>
                                          <option label="Fintas" value="38">Fintas</option>
                                          <option label="Hadiya" value="30">Hadiya</option>
                                          <option label="Jaber Al Ali" value="60">Jaber Al Ali</option>
                                          <option label="Khairan" value="2726">Khairan</option>
                                          <option label="Magwa" value="99">Magwa</option>
                                          <option label="Mahboula" value="24">Mahboula</option>
                                          <option label="Mangaf" value="32">Mangaf</option>
                                          <option label="Mina Abdullah" value="100">Mina Abdullah</option>
                                          <option label="Nuwaiseeb" value="2054">Nuwaiseeb</option>
                                          <option label="Riqqa" value="37">Riqqa</option>
                                          <option label="Sabah Al Ahmad 1" value="6930">Sabah Al Ahmad 1</option>
                                          <option label="Sabah Al Ahmad 2" value="6931">Sabah Al Ahmad 2</option>
                                          <option label="Sabah Al Ahmad 3" value="6932">Sabah Al Ahmad 3</option>
                                          <option label="Sabah Al Ahmad 4" value="6933">Sabah Al Ahmad 4</option>
                                          <option label="Sabah Al Ahmad 5" value="6934">Sabah Al Ahmad 5</option>
                                          <option label="Sabah Al Ahmad Marine City" value="2055">Sabah Al Ahmad Marine City</option>
                                          <option label="Sabahiya" value="31">Sabahiya</option>
                                          <option label="Shuaiba Port" value="103">Shuaiba Port</option>
                                          <option label="South Sabahiya" value="6864">South Sabahiya</option>
                                          <option label="Talabat Island" value="8903">Talabat Island</option>
                                          <option label="Wafra farms" value="2057">Wafra farms</option>
                                          <option label="Wafra residential" value="2058">Wafra residential</option>
                                          <option label="Zour" value="2053">Zour</option></optgroup>
                                          <optgroup label="Al Jahra">
                                            <option label="Jahra - Al Naeem " value="2049">Jahra - Al Naeem </option>
                                          <option label="Jahra - Amgarah Industrial" value="2050">Jahra - Amgarah Industrial</option>
                                          <option label="Jahra - Jahra Area" value="11">Jahra - Jahra Area</option>
                                          <option label="Jahra - Kabd" value="2051">Jahra - Kabd</option>
                                          <option label="Jahra - Nasseem" value="66">Jahra - Nasseem</option>
                                          <option label="Jahra - Oyoun" value="68">Jahra - Oyoun</option>
                                          <option label="Jahra - Qasr" value="93">Jahra - Qasr</option>
                                          <option label="Jahra - Saad Al Abdullah" value="1859">Jahra - Saad Al Abdullah</option>
                                          <option label="Jahra - Sulaibiya" value="83">Jahra - Sulaibiya</option>
                                          <option label="Jahra - Sulaibiya Industrial 1" value="94">Jahra - Sulaibiya Industrial 1</option>
                                          <option label="Jahra - Sulaibiya Industrial 2" value="95">Jahra - Sulaibiya Industrial 2</option>
                                          <option label="Jahra - Sulaibiya Residential" value="96">Jahra - Sulaibiya Residential</option>
                                          <option label="Jahra - Taima" value="2052">Jahra - Taima</option>
                                          <option label="Jahra - Waha" value="67">Jahra - Waha</option>
                                          <option label="Jahra Qairawan - South Doha" value="92">Jahra Qairawan - South Doha</option></optgroup>
                                          <optgroup label="Mubarak Al-kabir">
                                            <option label="Abu Ftaira" value="80">Abu Ftaira</option>
                                          <option label="Abu Hasaniya" value="108">Abu Hasaniya</option>
                                          <option label="Adan" value="41">Adan</option>
                                          <option label="Al Masayel" value="2047">Al Masayel</option>
                                          <option label="Al-Qurain" value="56">Al-Qurain</option>
                                          <option label="Al-Qusour" value="57">Al-Qusour</option>
                                          <option label="Fnaitess" value="81">Fnaitess</option>
                                          <option label="Messila" value="55">Messila</option>
                                          <option label="Mubarak Al-Kabir" value="58">Mubarak Al-Kabir</option>
                                          <option label="Sabah Al-Salem" value="40">Sabah Al-Salem</option>
                                          <option label="Sabhan Industrial" value="109">Sabhan Industrial</option>
                                          <option label="South Wista" value="105">South Wista</option>
                                          <option label="West Abu Fetera Small Indust" value="106">West Abu Fetera Small Indust</option>
                                          <option label="Wista" value="107">Wista</option></optgroup></select>
                                 </div>
                            </div>
                    </div>
                    <div class="form-row">
                        <div class="from-group col-md-6 mb-4">
                            <div class="input-group select-control">
                              
                             <textarea placeholder="Address"  name="addressl1" ng-maxlength="250" class="form-control ng-pristine ng-valid ng-empty ng-valid-maxlength ng-touched" ng-model="model.extraDirections" ng-disabled="isDisabled" style="margin-top: 0px; margin-bottom: 0px; height: 62px;" required><?php echo $address;?></textarea>
                             
                            </div>
                          </div>
                          <div class="from-group col-md-6 mb-4">
                              <div class="input-group select-control">
                                
                                  <input type="text" name="block" value='<?php echo $block;?>' class="form-control" id="inlineFormInputGroup3" placeholder="Block" required>
                              </div>
                            </div>
                      
                    </div>
                    <div class="form-row">
                        <div class="from-group col-md-6 mb-4">
                            <div class="input-group"  >
                                
                          <textarea placeholder="Additional Directions (Optional)" ng-class="modifiedKeys['exd'] ? 'modifiedField' : '' " id="addressExtraDirections" name="address2" ng-maxlength="250" class="form-control ng-pristine ng-valid ng-empty ng-valid-maxlength ng-touched" ng-model="model.extraDirections" ng-disabled="isDisabled" style="margin-top: 0px; margin-bottom: 0px; height: 62px;" ><?php echo $detail;?></textarea>
                              </div>
                            </div>
                      
                    </div>
               
      <?php if(isset($_GET['addid'])){?>
  <button type="submit" name="updateadd" class="btn btn-secondary swipe-to-top">Update Address</button>
        <?php }else{?>
          <button type="submit" name="address" class="btn btn-secondary swipe-to-top">Add Address</button>
                  <?php }?>
                  </form> 
            </div>
          <!-- ............the end..... -->
        </div>
      </div>
    </div>
  </section>

<div class="modal fade" id="deleteAdd">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
   <h6 class="modal-title"><b><span class="name">Warning!</span></b></h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
           
            </div>
            <div class="modal-body" style="padding: 22px 15px;">
              <h5><span>Are You Sure You Wanna Delete??</span></h5>
              <form method="POST" action="logging.php">
            <input type="text" class="addressid" name="id">
          
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            <button type="submit" class="btn btn-success btn-flat" name="deleteadd"><i class="fa fa-check-square-o"></i>Yes</button>
            </div>
              </form>
           
        </div>
    </div>
</div>


<?php
require ('footer.php>');
?>
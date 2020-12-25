<?php 
require('functions.php');

if(isset($_POST['reg_user']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$gender='';
	$addon=date('Y ,D M');

	$register=$user->register($name,$phone,$email,$password,$addon,$gender);
 	if($register==false){
	$error="Could Not Register";
 	}else{
 		 if(isset($_SESSION["shopping_cart"])) {
	                		foreach($_SESSION["shopping_cart"] as $cart){
	                			$addcart=$product->singlecart($_SESSION["userId"],$cart['item_id'],$cart['item_quantity']);
	                		}
	                }else{

	                			$usercart=$product->fatchcart($_SESSION['userId']);
								foreach($usercart as $cart){ 
										  $item_array = array(  
              								'item_id'               =>      $cart['product_id'],  
                							'item_name'               =>    $cart['Name'], 
                							'item_price'          =>     $cart['Price'],  
               								 'item_image'              =>$cart['Image'],  
               								'item_quantity'          =>  $cart['quantity']
         										  );  
           						$_SESSION["shopping_cart"][0] = $item_array;  
								}

	                }
 	}

header('Location:index.php');
}	
if(isset($_POST['login'])){

	$email = $_POST['email'];
	$password =$_POST['password'];
	$user=$user->login($email,$password);
	if($user==false){
	$error="Email Or Password is Wrong!";
 	}
 	else{
 		 if(isset($_SESSION["shopping_cart"])) {
	                		foreach($_SESSION["shopping_cart"] as $cart){
	                			$addcart=$product->singlecart($_SESSION["userId"],$cart['item_id'],$cart['item_quantity']);
	                		}
	                }
	                else{

	                			$usercart=$product->fatchcart($_SESSION['userId']);
								foreach($usercart as $cart){ 
										  $item_array = array(  
              								'item_id'               =>      $cart['product_id'],  
                							'item_name'               =>    $cart['Name'], 
                							'item_price'          =>     $cart['Price'],  
               								 'item_image'              =>$cart['Image'],  
               								'item_quantity'          =>  $cart['quantity']
         										  );  
           						$_SESSION["shopping_cart"][0] = $item_array;  
								}

	                }
 	}
	header('Location:index.php');
}
if(isset($_GET['logout'])){
$usercart=$product->fatchcart($_SESSION['userId']);
	 $_SESSION['login'] = FALSE;
	 session_destroy();
	 foreach($usercart as $cart){
header('Location:?action=add&pid='.$cart['product_id']);
		}
	 header('Location:index.php');

}

if(isset($_POST['profile'])){ 
$name=$_POST['name'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$profile=$user->updateuser($name,$gender,$phone,$_SESSION['userId']);
header('Location:profile.php');
}
if(isset($_POST['address']))
{
require('addressvariable.php');
	$name=$_POST['fullname'];
	 $address=$_POST['addressl1'];
	  $address2=$_POST['address2'];
		$phone=$_POST['phone'];
	
	 	 $block=$_POST['block'];
	$office=$_POST['office'];
	 $userId=$_POST['userid'];
$address=$user->address($name,$address,$address2,$phone,$area,$block,$office,$userId);
 // 	if($register==false){
	// $error="Could Not Register";
 // 	}
	header("Location:shipping-address.php");
}	
if(isset($_POST['addressid']))
{

	$setaddress=$user->setstatus($_POST['addressid'],$_SESSION['userId']);
	header("Location:shipping-address.php");
}
if(isset($_POST['chkaddressid']))
{

	$setaddress=$user->setstatus($_POST['chkaddressid'],$_SESSION['userId']);
	header("Location:checkout.php");
}
if(isset($_POST['deleteadd']))
{
	
	 $id=$_POST['id'];
	 
$address=$user->addressdelete($id);
	header("Location:shipping-address.php");
}

if(isset($_POST['updateadd']))
{
	$name=$_POST['fullname'];
	 $address=$_POST['addressl1'];
	  $address2=$_POST['address2'];
		$phone=$_POST['phone'];
	
	 	 $block=$_POST['block'];
	$office=$_POST['office'];
	 $userId=$_POST['userid'];
$address=$user->updateadd($name,$address,$address2,$phone,$area,$block,$office,$userId);
 // 	if($register==false){
	// $error="Could Not Register";
 // 	}
	header("Location:addressdetails.php");
}	
if(isset($_POST['cart'])){
	$userId=$_SESSION['userId'];
	$productId=$_POST['productid'];
	$quanlity=$_POST['qty'];

$addcart=$product->cart($userId,$productId,$quanlity);
 	if(isset($_SESSION["shopping_cart"])) {
 	
 		$i=0;
for ($i=0; $i <count($productId); $i++) { 
	if($_SESSION["shopping_cart"][$i]['item_id']==$productId[$i])
	             		{
	             		
	             			$_SESSION["shopping_cart"][$i]['item_quantity']=$quanlity[$i];
	             			
	             		}
}


	             // foreach($_SESSION["shopping_cart"] as $cart){
	             // 	print_r($cart['item_id']);
	             // 	
	             // }
	   }
header('Location:checkout.php');

}
?>
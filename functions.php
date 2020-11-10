<?php
session_start();
require ('database/DBcontroller.php');
require ('database/Banner.php');
$db= new DBcontroller;
require ('database/Product.php');
require ('database/Category.php');
require ('database/Users.php');
$category=new Category($db);
$product=new Product($db);
$product->getData();
$banner= new Banner($db);
$banner->getData($table='banner');
$user=new Users($db);
$succuss='';
$error='';
/////////////////////////////////////////////////////////////////////////////////////////////////////////

 if(isset($_GET["action"]))  
 {  
 	if($_GET['action']=='add'){
 		if(isset($_GET['pid'])){
 			$id=$_GET['pid'];
 			    $productitem=$product->singleProduct($id);
 			  //  print_r($productitem);
 			    //echo $productitem[0]['ID'];

if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["pid"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>    $productitem[0]['ID'],  
                     'item_name'               =>    $productitem[0]['Name'],  
                     'item_price'          =>    $productitem[0]['Price'],  
                     'item_quantity'          =>     1  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                // echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>      $productitem[0]['ID'],  
                'item_name'               =>    $productitem[0]['Name'], 
                'item_price'          =>     $productitem[0]['Price'],  
                'item_quantity'          =>   1  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  

      	//print_r($_SESSION["shopping_cart"]);
 		}
 	}
}
///////////////////////////////////////////USER LOGIN////////////////////////////////////////////////////////////

?>

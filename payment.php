<?php
require('functions.php');


if(isset($_POST['payment']))
{
$orderid=$_POST['ORDER_ID'];
$custid=$_POST['CUST_ID'];
$amount=$_POST['TXN_AMOUNT'];




// $userId=$_SESSION["userId"];
 $productdetail=$user->usercart($custid);
// $orderid= $ORDER_ID;
 $addon=date('Y-m-d');
 $placeorder=$order->placeorder($custid,$productdetail,$orderid,$addon,$amount);
 $clearcart=$user->usercartdelete($custid);
}


?>
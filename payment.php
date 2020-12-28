<?php
require('functions.php');
require "PHPMailer/PHPMailerAutoload.php";
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
$usercart=$order->fatchordersingle($orderid);

$ourmail = 'sales@iconichomehardware.com';
$email=$_SESSION['customermail'];
$name = $orderid;
$subject="Order";
$msg ="<div class='row'>
  <div class='col-12 col-md-6'>
                            <h5>Order ID ".$usercart[0]['pay_id']."
                            </h5>
        
                        <table class='table order-id'>
                            <tbody>
                                <tr class='d-flex'>
                                  <td class='col-6 col-md-6 pb-0'><strong>Order Status</strong></td>
                                  <td class='pending col-6 col-md-6 pb-0'><p>".$usercart[0]['orderstatus']."</p></td>
                                </tr>
                                <tr class='d-flex'>
                                    <td class='col-6 col-md-6'><strong>Order Date</strong></td>
                                    <td  class='col-6 col-md-6'>".$usercart[0]['sales_date']."</td>
                                  </tr>
                              </tbody>
                        </table>
  
                    </div>
                    <div class='col-12 col-md-6'>
                        <h4>
                            Payment Methods
                        </h4> 
                        
                        <table class='table order-id'>
                            <tbody>
                                <tr class='d-flex'>
                                  <td class='col-6 pb-0'><strong>Shipping Method</strong> </td>
                                  <td class='col-6 pb-0'>--</td>
                                </tr>
                                <tr class='d-flex'>
                                    <td class='col-6'><strong>Payment Method</strong> </td>
                                    <td class='underline col-6'>Cash On Delivery</td>
                                  </tr>
                              </tbody>
                        </table>
  
                    </div> 
                      
                  </div>
  
                  <div class='row'>
                      <div class='col-12 col-md-6'>
                          <h4>Shipping Details
                            </h4>  
                          
                          <table class='table order-id'>
                              <tbody>
                                  <tr class='d-flex'> 
                                    <td class='address col-12 col-md-6 pb-0'><strong>Shipping Address</strong></td>
                                    
                                    
                                  </tr>
                                  <tr class='d-flex'>
                                      <td  class='address col-12 col-md-12'>Name :".$usercart[0]['username']."<br>Contact :".$usercart[0]['contact']."<br>Office/Shop:".$usercart[0]['Office']."<br>
                         Address: ".$usercart[0]['Address'].",".$usercart[0]['Area'].",".$usercart[0]['Block']."</td>
                                      
                                    </tr>
                                </tbody>
                          </table>
    
                      </div> 
                    </div>
                    
                    <table class='table top-table'>
                        <thead>
                          <tr class='d-flex'>
                           
                            <th class='col-12 col-md-4'>ITEM(S)</th>
                            <th class='col-12 col-md-2'>PRICE</th>
                            <th class='col-12 col-md-2'>QTY</th>
                            <th class='col-12 col-md-2'>SUBTOTAL</th>
                          </tr>
                        </thead>
                        <tbody>";
                         
                          $i=1;
                $total=0;
              foreach($usercart as $cart){


                       $msg .="<tr class='d-flex'>
                              <td class='col-12 col-md-4'>
                                <div class='item-detail'>
                                    <span class='pro-info'></span>
                                    <h3 class='pro-title'>
                                        
                                      <a href=''>
                                      ".$cart['ProName']."
                                    </a>
                                     
                                    </h3>
                                    
                                    <div class='item-attributes'></div>
                                 
                                  </div>
                              </td>
                            <td class='col-12 col-md-2'><span class='item-price'>".$cart['Price']."Kd/-</span></td>
                            <td class='col-12 col-md-2'>
                                <div class='input-group'>".$cart['quantity']."</div>
                            </td>
                            <td class='col-12 col-md-2'><span class='item-price'>".$cart['Price']*$cart['quantity']."kd/-</span></td>
                          </tr>";
                         }
             
                        $msg .="</tbody>
                      </table>
                      	</div>
                      	</div>";
                        echo $msg;
$error=smtpmailer($ourmail,$email, $name ,$subject, $msg);
header('Location:orders.php');
}
function smtpmailer($to, $from, $from_name, $subject, $body)
  {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.iconichomehardware.com';
        $mail->Port = 465;  
        $mail->Username = 'sales@iconichomehardware.com';
        $mail->Password = 'IconicHome@52';
        $mail->IsHTML(true);
        $mail->From=$from;
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        $mail->Send();
        
    }
?>
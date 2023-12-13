<?php 
function insert_hoadon_momo($partnerCode,$orderId,$requestId,$amount,$orderInfo,$orderType,$transId,$payType,$signature){
$sql="INSERT INTO `momo`( `partnerCode`, `orderId`, `requestId`, `amount`, `orderInfo`, `orderType`, `transId`, `payType`, `signature`)
 VALUES ('$partnerCode','$orderId','$requestId','$amount','$orderInfo','$orderType','$transId','$payType','$signature')";
 pdo_execute($sql);
}
function insert_Vnpay($vnp_Amount,$vnp_BankCode,$vnp_BankTranNo,$vnp_OrderInfo,$vnp_PayDate,$vnp_TmnCode,$vnp_SecureHash){
  $sql="INSERT INTO `payment` (`vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_OrderInfo`, `vnp_PayDate`, `vnp_TmnCode`, `vnp_SecureHash`)
   VALUES ('$vnp_Amount','$vnp_BankCode','$vnp_BankTranNo','$vnp_OrderInfo','$vnp_PayDate','$vnp_TmnCode','$vnp_SecureHash')";
   pdo_execute($sql);
}
?>

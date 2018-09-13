<?php
//create short variable name
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
@$fp = fopen("$DOCUMENT_ROOT/orders/orders.txt", 'rb');
if(!$fp){
    echo"<p><strong>No orders pending.
    Please try again later.</strong></p>";
    exit;
}
while(!feof($fp)) {
    $order = fgets($fp, 999);
    echo$order."<br/>";
}
?>

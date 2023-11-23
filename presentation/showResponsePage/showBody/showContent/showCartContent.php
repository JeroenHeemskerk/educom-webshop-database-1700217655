<?php

include('showCartItem.php');
//include('showTotal.php');

function showCartContent(){
  $total = 0;
  for ($x = 1; $x<=5; $x++){
    if (isset($_SESSION['cart'][strval($x)])){
      $number = $_SESSION['cart'][strval($x)];
      if ($number > 0 ){
        $productInfo = getProductInfo($x);
        showCartItem($productInfo, $number);
      }
    }
  }
  //showTotal($total);
}


?>
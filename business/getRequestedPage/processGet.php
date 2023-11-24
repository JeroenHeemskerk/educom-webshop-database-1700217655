<?php

function processGet($id, $action){
  if ($action == 'addToCart'){
    $_SESSION['cart'][$id] += 1;
  } else if ($action == 'checkout'){
    $id = placeOrder($_SESSION['user'], $_SESSION['cart']);
    foreach ($_SESSION['cart'] as $key => $value)
    {
      if ($value > 0)
      {
        placeOrderLine($key, $value, $id);
      }
    }
    $_SESSION['cart'] = array();
  }
}

?>
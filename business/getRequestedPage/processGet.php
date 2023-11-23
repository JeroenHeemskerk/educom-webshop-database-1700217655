<?php

function processGet($id, $action){
  if ($action == 'addToCart'){
    $_SESSION['cart'][$id] += 1;
  }
}

?>
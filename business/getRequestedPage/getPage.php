<?php
include('getUrlVar.php');
include('processGet.php');

function getPage(){
  $page = getUrlVar('page', 'home');
  if ($page == 'cart' && isset($_GET['checkout'])){
    $checkout = getUrlVar('checkout', 'false');
  }
  $id = strval(getUrlVar('id', '0'));
  $inCart = getUrlVar('inCart', false);
  if (isset($checkout)){
    processGet($id, 'checkout');
  }
  if (!isset($_SESSION['cart'][$id])){
    $_SESSION['cart'][$id] = 0;
  }
  if ($inCart){
    processGet($id, 'addToCart');
  }
  $logout = false;
  if($page == 'logout'){
    $logout = true;
    $page = 'home';
  }
  return array($page, $logout, $id, $inCart);
}
?>
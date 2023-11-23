<?php
include('showMenuItem.php');

function showMenu(){
  echo '<ul class="menu">';
  showMenuItem('home', 'HOME');
  showMenuItem('about', 'ABOUT');
  showMenuItem('contact', 'CONTACT');
  showMenuItem('shop', 'SHOP');
  if (isset($_SESSION['user'])){
    showMenuItem('cart',  'CART');
    showMenuItem('logout', 'LOGOUT '.$_SESSION['user']);
  } else {
    showMenuItem('register', 'REGISTER');
    showMenuItem('login', 'LOGIN');
  }
  if (!empty($_SESSION['cart']['1']) | !empty($_SESSION['cart']['2']) | !empty($_SESSION['cart']['3']) 
      | !empty($_SESSION['cart']['4']) | !empty($_SESSION['cart']['5'])){
        showMenuItem('cart', 'SHOPPING CART');
        echo '</ul>';
      }
}     
?>
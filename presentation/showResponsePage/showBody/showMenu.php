<?php
include('showMenuItem.php');

function showMenu(){
  echo '<ul class="menu">';
  showMenuItem('home', 'HOME');
  showMenuItem('about', 'ABOUT');
  showMenuItem('contact', 'CONTACT');
  showMenuItem('shop', 'SHOP');
  if (isset($_SESSION['user'])){
    showMenuItem('logout', 'LOGOUT '.$_SESSION['user']);
  } else {
    showMenuItem('register', 'REGISTER');
    showMenuItem('login', 'LOGIN');
  }
  if (!empty($_SESSION['badeendje']) | !empty($_SESSION['kaas']) | !empty($_SESSION['auto']) 
      | !empty($_SESSION['citroen']) | !empty($_SESSION['banaan'])){
        showMenuItem('cart', 'SHOPPING CART');
        echo '</ul>';
      }
}     
?>
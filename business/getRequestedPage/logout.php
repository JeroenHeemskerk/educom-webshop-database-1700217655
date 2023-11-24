<?php

function logout(){
  unset($_SESSION['user']);
  if (isset($_SESSION['cart'])){
    unset($_SESSION['cart']);
  }
}

?>
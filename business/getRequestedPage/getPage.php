<?php
include('getUrlVar.php');

function getPage(){
  $page = getUrlVar('page', 'home');
  $id = getUrlVar('id', 0);
  $inCart = getUrlVar('inCart', false);
  $logout = false;
  if($page == 'logout'){
    $logout = true;
    $page = 'home';
  }
  return array($page, $logout, $id, $inCart);
}
?>
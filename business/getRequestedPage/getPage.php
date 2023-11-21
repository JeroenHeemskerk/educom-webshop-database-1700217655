<?php
include('getUrlVar.php');

function getPage(){
  $page = getUrlVar('page', 'home');
  $logout = false;
  if($page == 'logout'){
    $logout = true;
    $page = 'home';
  }
  return array($page, $logout);
}
?>
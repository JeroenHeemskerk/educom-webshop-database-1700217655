<?php
include('validLogin.php');
include('emptyCheck.php');

function processLogin($inputs, $errs){
  $errs = emptyCheck(array('email', 'password'), $errs, $inputs);
  if (empty($errs['email']) && empty($errs['password'])){
    list($errs, $id) = validLogin($inputs['email'], $inputs['password'], $errs);
  }
  if (empty($errs['email']) && empty($errs['password'])){
    $_SESSION['user'] = array('name'=> getName($inputs['email']), 'email' => $inputs['email'], 'id' => $id);
  }
  return($errs);
}

?>
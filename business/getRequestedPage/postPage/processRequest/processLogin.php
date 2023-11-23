<?php
include('validLogin.php');

include('emptyCheck.php');

function processLogin($inputs, $errs){
  $errs = emptyCheck(array('email', 'password'), $errs, $inputs);
  if (empty($errs['email']) && empty($errs['password'])){
    $errs = validLogin($inputs['email'], $inputs['password'], $errs);
  }
  if (empty($errs['email']) && empty($errs['password'])){
    $_SESSION['user'] = getName($inputs['email']);
  }
  return($errs);
}

?>
<?php

include('emptyCheck.php');

function processLogin($inputs, $errs){
  $errs = emptyCheck(array('email', 'password'), $errs, $inputs);
  if (empty($errs['email']) && empty($errs['password'])){
    $errs = validLogin($inputs['email'],$inputs['password'], $errs);
    if (!emailExists($inputs['email'])){
      $errs['email'] = 'Er is geen account geassociëerd met dit e-mailadres.';
    } else if (!validlogin($inputs['email'], $inputs['password'])){
      $errs['password'] = 'Onjuist wachtwoord.';
    } else {
      $_SESSION['user'] = getName($inputs['email']);
    }
  }
  return($errs);
}

?>
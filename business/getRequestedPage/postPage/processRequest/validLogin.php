<?php

function validLogin($email, $password, $errs){
  if (!emailExists($email)){
    $errs['email'] = 'Er is geen account geassociëerd met dit e-mailadres.';
    return $errs;
  } else {
    $rightPass = getPass($email);
    if ($password == $rightPass){
      return($errs);
    }
  }
  $errs['password'] = 'Onjuist wachtwoord.';
  return $errs;
}

?>
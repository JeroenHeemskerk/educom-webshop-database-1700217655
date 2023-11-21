<?php

function emptyCheck($checks, $errs, $inputs){
  foreach($checks as $value){
    if (empty($inputs[$value]) && isset($inputs[$value])){
      $errs[$value] = $value.' veld mag niet leeg zijn.';
    }
  }
  return $errs;
}


?>
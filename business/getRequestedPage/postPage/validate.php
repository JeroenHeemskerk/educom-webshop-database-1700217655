<?php
function validate($valid, $errs, $page, $inputs){
  if(!array_filter($errs)){
	  $valid = true;
      switch ($page){
      case 'contact':
        $page = 'thanks';
        break;
      case 'register':
        dataWrite($inputs['email'], $inputs['name'], $inputs['password']);
        $page = 'login';
        break;
      case 'login':
        $page = 'home';
        break;
      }
  }
  return(array($page, $valid));
}
?>
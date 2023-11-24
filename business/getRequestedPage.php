<?php
  include('getRequestedPage/postPage.php');
  include('getRequestedPage/getPage.php');
  include('getRequestedPage/logout.php');
function getRequestedPage(){

  
    if ($_SERVER["REQUEST_METHOD"] == "POST")
	  {
      return(postPage());
	  } else {
      list($page, $logout, $id, $inCart) = getPage();
      if( $logout == true){
        logout();
      }
      $inputs = initInputs($page);
      $inputs['id']= $id;
      $inputs['inCart'] = $inCart;
      $errs = initErrs($page);
      var_dump($page);
      return array($page, $inputs, $errs);
    }    
  }
?>
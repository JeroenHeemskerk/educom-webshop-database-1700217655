<?php
function getRequestedPage(){
  include('getRequestedPage/postPage.php');
  include('getRequestedPage/getPage.php');
  include('getRequestedPage/logout.php');
  
    if ($_SERVER["REQUEST_METHOD"] == "POST")
	  {
      return(postPage());
	  } else {
      list($page, $logout) = getPage();
      if( $logout == true){
        logout();
      }
      $inputs = initInputs($page);
      $errs = initErrs($page);
      return array($page, $inputs, $errs);
    }    
  }
?>
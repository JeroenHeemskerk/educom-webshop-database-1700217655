<?php

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
      return array($page, $inputs, $errs);
    }    
  }

  function postPage(){
    $pageTemp = getUrlVar('page', 'home');
    $inputs = initInputs($pageTemp);
    $errs = initErrs($pageTemp);
    list($inputs, $errs) = processRequest($errs, $inputs, $pageTemp);
    $valid = false;
    list($page, $valid) = validate($valid, $errs, $pageTemp, $inputs);
    if (!isset($inputs['id'])){
      $inputs['id']= '';
    }
    return(array($page, $inputs, $errs));
  }

  function getPage(){
    $page = getUrlVar('page', 'home');
    if ($page == 'cart' && isset($_GET['checkout'])){
      $checkout = getUrlVar('checkout', 'false');
    }
    $id = strval(getUrlVar('id', '0'));
    $inCart = getUrlVar('inCart', false);
    if (isset($checkout)){
      checkout($id);
    }
    if (!isset($_SESSION['cart'][$id])){
      $_SESSION['cart'][$id] = 0;
    }
    if ($inCart){
      addToCart($id);
    }
    $logout = false;
    if($page == 'logout'){
      $logout = true;
      $page = 'home';
    }
    return array($page, $logout, $id, $inCart);
  }
?>
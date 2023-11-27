<?php

function showTop5Content($orderList){
  for ($x = 1; $x !== 6; $x++){
    showShopItem($orderList[$x]);
  }
}


?>
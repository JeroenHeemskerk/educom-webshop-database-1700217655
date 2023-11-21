<?php
//First, the functions are all defined. 
  $dir = 'C:/xampp/htdocs/educom-webshop-database-1700217655-main/educom-webshop-database-1700217655-main/';
  include('getRequestedPage.php');
  include($dir.'presentation/showResponsePage.php');
  include($dir.'data/dataRead.php');
  
  session_start();
  list($page, $inputs, $errs) = getrequestedPage();
  showResponsePage($page, $inputs, $errs);
  ?>
</body>
</html>
<?php

if($_POST){
  require('core/core.php');

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'wplogin':
      require('core/bin/globals/wpLogin.php');
      break;
    case 'wpreg':
      require('core/bin/globals/wpReg.php');
      break;
    case 'wplostpass':
        require('core/bin/globals/wpLostpass.php');
      break;
    default:
      header('location: index.php');
      break;
  }
}else{
  header('location: index.php');
}

?>

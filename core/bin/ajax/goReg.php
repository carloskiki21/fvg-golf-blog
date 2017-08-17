<?php

if($_POST){
  if(!empty($_POST['user']) and !empty($_POST['pass'])){
  	echo $_POST['user'];
  }else{
  	echo 'all fields are required';
  }
}

?>

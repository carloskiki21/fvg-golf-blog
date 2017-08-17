<?php

if(isset($_SESSION['id'])){
	header('location: ?view=index');
}else{
	include('html/public/login.html');
}

?>

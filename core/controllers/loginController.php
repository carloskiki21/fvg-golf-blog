<?php 

if(isset($_SESSION['app_id'])){
	header('location: ?view=index');
}else{
	include('html/public/login.php');
}



?>
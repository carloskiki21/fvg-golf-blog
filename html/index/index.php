<!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo APP_URL ?>">
		<meta charset="utf-8">
		<title> <?php echo APP_TITTLE ?> </title>
	</head>
<body>
	<?php 
		if (isset($_SESSION['app_id'])) {
			
			?> <a href="?view=logout">Salir</a> <?php
		}else{
			?> <a href="?view=login">Login</a> <?php
		}
	?>
	
	<h2>Welcome <strong><?php echo $_users[$_SESSION['app_id']]['user']; ?></strong></h2>


	
</body>
</html>

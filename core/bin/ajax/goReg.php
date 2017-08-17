<?php

/**
* 
*/

if (!empty($_POST['user'])) {
	# code...
	$db = new Conexion();
	$user = $db->real_escape_string($_POST['user']);
	$pass = md5($_POST['pass']);

	$sql = $db->query("SELECT * FROM users WHERE user='user';");

	if($db->rows($sql) == 0){
		$sql2 = $db->query("INSERT INTO users (user,pass) VALUES ('$user','$pass'); ");

		if($sql2){
			$sql2 = $db->query("SELECT MAX(id) AS id FROM users;");

			$id = $db->recorrer($sql2);

			$_SESSION['id'] = $id;

		    echo 1;
		    header('Location: ?view=index');
		    $db->liberar($sql,$sql2);
		}else{
			echo ' error';
		}
	}else{
		echo 'user exist';
	}

	

    $db->close();
}






?>

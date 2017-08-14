<?php
session_start();
if(!empty($_POST['user']) and !empty($_POST['pass'])) {
  $db = new Conexion();
  $user = $db->real_escape_string($_POST['user']);
  $pass = md5($_POST['pass']);
  $sql = $db->query("SELECT * FROM users WHERE user='$user' AND pass='$pass' LIMIT 1;");
  if($db->rows($sql) > 0) {
    echo 1;
  } else {
    echo '<div>
    <strong>ERROR:</strong> Las credenciales son incorrectas.
  </div>';
  }
  $db->liberar($sql);
  $db->close();
} else {
  echo '<div">
  <strong>ERROR:</strong> Todos los datos deben estar llenos.
</div>';
}

?>
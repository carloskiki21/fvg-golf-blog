<?php

function Users() {
  $db = new Conexion();

  $sql = $db->query("SELECT * FROM users;");

    while($d = $db->recorrer($sql)) {
      $users[$d['id']] = $d;
  }


  $_SESSION['users'] = $users;

  $db->liberar($sql);
  $db->close();

  return $_SESSION['users'];
}

?>
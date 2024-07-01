<?php

  require_once 'model/conexion.php';
  $objConn = new Connect();
  if (!empty($objConn->conn())){
    echo '<script>alert("Conexión establecida");location="?pagina=home"</script>';
  }
  else {
    require_once 'vista/login.php';
  }

?>
<?php 
  session_start();
  include 'includes/conexao.php';

  $sql = "INSERT INTO usuario_papel (usuario_id, papel_id) VALUES ('".$_SESSION["id"]."','".$_GET["type"]."')";
  pg_query($conexao, $sql);
?>
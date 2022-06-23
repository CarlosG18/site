<?php
  session_start();
  include 'includes/conexao.php';
  if($_SESSION["logado"] == true){
?>
<!DOCTYPE html>
<html>
<head>
<title>home</title>
  <?php
    include 'includes/head.php';
    include 'includes/header_home.php';
  ?>
</head>
<body>
  <?php
    if($papel[0] == 1){ //parte do cliente
  ?>
    <div class="container">
      bem vindo <?php echo "".$_SESSION["nome"] ?> cliente
    </div>
  <?php  }else if($papel[0] == 2){ //parte do barbeiro
  ?>
    <div class="container">
    barbeiro
    </div>
  <?php
    }
  ?>
</body>
</html> 
  <?php 
  }else{
    echo "<script>document.location='index.php'</script>";
  }
  ?>
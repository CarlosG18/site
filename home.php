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
    if(isset($_GET["categoria"]) == 1){
      $_SESSION["papel"][0] = 1;
      //echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=home.php'>";
    }else if(isset($_GET["categoria"]) == 2){
      $_SESSION["papel"][0] = 2;
      //echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=home.php'>";
    }else if(isset($_GET["categoria"]) == 3){
      $_SESSION["papel"][0] = 3;
      //echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=home.php'>";
    }else if(isset($_GET["categoria"]) == 4){
      $_SESSION["papel"][0] = 4;
      //echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=home.php'>";
    }
    
    if($_SESSION["papel"][0] == 1){ //parte do barbeiro
      include 'includes/pag_barber.php';                           
    }else if($_SESSION["papel"][0] == 2){ //parte do adm
      echo "não tem nada ainda";                                   
      //include 'includes/pag_?.php';                           
    }else if($_SESSION["papel"][0] == 3){ //parte do vendedor
      echo "não tem nada ainda";                                
      //include 'includes/pag_?.php';                           
    }else if($_SESSION["papel"][0] == 4){ //parte do cliente
      include 'includes/pag_cliente.php';                           
    }
  ?>
</body>
</html> 
  <?php 
  }else{
    echo "<script>document.location='index.php'</script>";
  }
  ?>
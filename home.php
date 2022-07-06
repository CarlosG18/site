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
    <main>
      <div id="box_destaque" class="container d-flex shadow arounded p-3 mb-5">
        <div class="conatainer">
           <img style="max-width: 200px; width:150px; padding-top: auto" src="pesquisa.svg" alt="pesquisar">
        </div>
        <div class="container flex-column text-center">
           <p id="destaque">
             Marque já um horário!
           </p>
           <a class="container" href="#"> <button type="button" class="btn btn-primary shadow mx-auto">Clique aqui</button></a>
        </div>
      </div>
           <div class="container
      <div class="container mt-5">
        <h1 id="destaque-1">Seus agendamentos ativos</h1>
        <div id="line"></div>
        <div class="container">
          <p>Sem agendamentos ativos no momento</p>
        </div>
      </div>

      <div class="container mt-5">
        <h1 id="destaque-1">Seus agendamentos passados</h1>
        <div id="line"></div>
        <div class="container">
          <p>você não possui agendamentos passados</p>
        </div>
      </div>

      <div class="container mt-5">
        <h1 id="destaque-1">Progressos em Promoções</h1>
        <div id="line"></div>
        <div class="container">
          <p>Sem promoções ativadas</p>
        </div>
                       </div>
    </main>
  <?php  }else if($papel[0] == 2){ //parte do barbeiro
  ?>
    <main>
      <div id="box_destaque" class="container d-flex shadow arounded">
        <div>
          <img style="max-width: 200px; width:150px; padding-top: auto" src="tesoura.svg" alt="tesoura">
        </div>
        <div class="flex-column text-center py-3">
          <p id="destaque">
            Cadastre sua Barbearia!
          </p>
          <a href="#"> <button type="button" class="btn btn-primary shadow mx-auto">Clique aqui</button></a>
        </div>
      </div>
    </main>
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
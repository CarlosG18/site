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
      <div id="box_destaque" class="container d-flex shadow mx-auto my-3 p-3">
         <div class="container">
           <img style="max-width: 200px; width:150px; padding-top: auto" src="pesquisa.svg" alt="pesquisar">
         </div>
         <div class="container d-flex flex-column text-center">
           <p 
id="destaque" class="container">Marque seu horário já</p>
           <div class="container">
           <a class="container" href="#"> <button type="button" class="btn btn-primary shadow mx-auto">Clique aqui</button></a>
           </div>
         </div>
      </div>

      <div class="container mt-5">
        <h1 id="destaque">Seus agendamentos ativos</h1>
        <div id="line"></div>
        <div class="container">
          <p>Sem agendamentos ativos no momento</p>
        </div>
      </div>

      <div class="container mt-5">
        <h1 id="destaque">Seus agendamentos passados</h1>
        <div id="line"></div>
        <div class="container">
          <p>você não possui agendamentos passados</p>
        </div>
      </div>

      <div class="container mt-5">
        <h1 id="destaque">Progressos em Promoções</h1>
        <div id="line"></div>
        <div class="container">
          <p>Sem promoções ativadas</p>
        </div>
      </div>
    </main>
  <?php  }else if($papel[0] == 2){ //parte do barbeiro
  ?>
    <main>
      <div id="box_destaque" class="container d-flex shadow mx-auto my-3 p-3">
         <div class="container">
           <img style="max-width: 200px; width:150px; padding-top: auto" src="tesoura.svg" alt="pesquisar">
         </div>
         <div class="container d-flex flex-column text-center">
           <p 
id="destaque" class="container">Cadastre sua Barbearia já!</p>
           <div class="container">
           <a class="container" href="cadastro.php"> <button type="button" class="btn btn-primary shadow mx-auto">Clique aqui</button></a>
           </div>
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
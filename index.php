<html>
  <head>
    <title> MarkHair - Main</title>
     <?php
        include ('includes/head.php');
     ?>
  </head>
  <body>
    <?php include ('includes/conexao.php');
      include ('includes/header.php');
?> 
    
<main style="font-family: 'Ubuntu';">
  <div class="container p-4">
      <div class="container-sm text-center p-3 text-dark rounded-lg">
        <div id="line"></div>
        <h2 class="mt-3"> cadastre-se gratuitamente </h2>
        <a href="cadastro.php"> <button type="button" class="btn btn-warning shadow mb-4 mt-2">Clique aqui</button></a>
        <div id="line"></div>
        <p class="m-3"> se já possui conta <a class="text-warning" href="login.php">clique aqui</a></p>
        <?php 
            if(isset($_GET["cad"]) == true){
        ?>
        <div style="margin-bottom: 20px" class="container alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Conta Criada!</strong> você já pode acessar sua conta.
        </div>
        <?php }
        ?>
      </div>
  </div>
</main>
  </body>
</html>


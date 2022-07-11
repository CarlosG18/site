<?php session_start(); ?>
<html>
   <head>
     <?php
include ('includes/conexao.php');
      $id_editing = $_SESSION["id"];

      include ('includes/head.php');
      $sql = "SELECT * FROM usuario WHERE id=".$id_editing."";
      $result = pg_query($conexao, $sql);
      $row=pg_fetch_row($result,$i);
?> 
     <title> Editar dados </title>
   </head>
   <body>
     <?php include ('includes/header_home.php'); ?>
      <main style="max-width: 400px" class="mx-auto">
        <div class="container">
          <h1 style="text-align: center"> editar dados </h1>
        <div id="line"></div>
        </div>
      <div style="font-family: 'Ubuntu';" class="container bg-white p-4 rounded-lg"> 
<form action="salvar_edicao.php" method="POST">
  <input type="hidden" value="<?php echo "".$id_editing; ?>" name="id_ed">
  <div class="form-group">
    <label for="nome">Nome: <?php echo "".$row[1]; ?></label>
    <input type="text" class="form-control" placeholder="Novo nome" name="nome">
  </div>
  <div class="form-group">
    <label for="email">
    Email: <?php echo "".$row[3]; ?></label>
    <input type="email" class="form-control" placeholder="Novo email" name="email">
  </div>
  <div class="form-group">
    <label for="senha">para alterar os dados digite sua senha:</label>
    <input type="password" class="form-control" placeholder="senha" name="senha">
  </div>
  <?php 
            if(isset($_GET["alterar"]) == true){
        ?>
        <div class="container alert alert-danger alert-dismissible mx-auto fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>senha incorreta!</strong>
        </div>
        <?php }
        ?>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> lembre-me
    </label>
  </div>
  <button type="submit" class="btn btn-warning">modificar</button>
</form>
      </div>
     </main>
   </body>
</html>
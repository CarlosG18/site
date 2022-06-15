<!DOCTYPE html>
<html>
<head>
    <title> TESTES - BANCO DE DADOS - CADASTRO </title>
    <?php
        include 'includes/head.php';
    ?>
</head>
<body>
  <?php include ('includes/header.php'); 
  ?>
	<main style="font-family: 'Ubuntu';">
		<div style="max-width: 400px" class="rounded-lg mx-auto shadow p-4 bg-white">
			<h2 class="text-center">cadastramento</h2>
			<form action="salvar.php" method="POST">
				<div class="form-group">
					<label for="text">Nome:</label>
					<input type="text" class="form-control" placeholder="Digite seu nome completo" name="nome">
				</div>
				<div class="form-group">     
                <div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" placeholder="Digite seu email" name="email">
				</div>
          <div class="form-group">
            <label for="tipo">tipo:</label><br>
					  <input type="radio" id="cliente" name="papel" value="1">
            <label for="cliente">cliente</label><br>
            <input type="radio" id="barbeiro" name="papel" value="2">
            <label for="cliente">barbeiro</label><br>
				</div>
				<div class="form-group">
					<label for="pwd">Senha:</label>
					<input type="password" class="form-control" placeholder="Digite sua senha" name="senha">
				</div>
				<div>
				<div class="form-group form-check">
					<label class="form-check-label">
					<input class="form-check-input" type="checkbox"> lembre-me
				</label>
				</div>
				<button type="submit" class="btn btn-warning">cadastrar</button>
			</form>
		</div>
	</main>
</body>
</html>
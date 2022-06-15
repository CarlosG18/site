<!DOCTYPE html>
<html>
<head>
    <title> TESTES - BANCO DE DADOS - LOGIN </title>
    <style>
        body {
            text-aling: center;
        }
    </style>
    <?php include 'includes/head.php';
    include 'includes/header.php';
    ?>
    
</head>
<body>
    
	<main>
		<div style="width: 300px;" class="mx-auto rounded-lg p-3 shadow bg-white resp">
			<h2 class="text-center">login</h2>
			<form style="margin-bottom:10px" action="check_login.php" method="POST">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" placeholder="Digite seu email" name="email">
				</div>
				<div class="form-group">
					<label for="pwd">Senha:</label>
					<input type="password" class="form-control" placeholder="Digite sua senha" name="senha">
				</div>
				<div class="form-group form-check">
					<label class="form-check-label">
					<input class="form-check-input" type="checkbox"> lembre-me
				</label>
				</div>
				<button type="submit" class="btn btn-warning shadow">entrar</button>
			</form>
			
			<?php
			    if(isset($_GET["login"]) == true){
			?>
			<div class="alert alert-danger alert-dismissible fade show m-t-2">
			    <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>dados incorretos!</strong>
			</div>
			<?php }
			?>
			
		</div>
	</main>
    

<footer>
    
</footer>

</body>
</html>
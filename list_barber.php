<?php
  session_start();
  include 'includes/conexao.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>home</title>
  <?php
    include 'includes/head.php';
    include 'includes/header_home.php';
    
    $sql_barber = "SELECT usuario.nome FROM usuario INNER JOIN usuario_papel ON usuario.id=usuario_papel.usuario_id WHERE usuario_papel.papel_id=1";
    $query = pg_query($conexao,$sql_barber);
  ?>
</head>
<body>
  <div class="container">
    <p class="container pt-4">listando barbeiros</p>
    <div id="line"></div>
    <div class="table-responsive">
      <table class="table table-hover table-warning table-bordered text-center">
        <thead>
          <tr>
            <th> Barbeiro </th>
            <th> Horario de funcionamento </th>
            <th> ação </th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row=pg_fetch_row($query,$i)) {
    for($j=0; $j < count($row); $j++) { ?>
          <tr>
            <th><?php echo $row[0]; ?></th>
            <th> 9:30 as 15:00</th>
            <th><button class="btn btn-light"> agendar </button></th>
          </tr>
          <?php } }?> 
        </tbody>
      </table>
    </div>
  </div>
</body>
</html> 
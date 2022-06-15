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
  <div class="container">
    
  </div>
<main>
<div class="container">
    <h2> mostrando os dados do banco: </h2>
    <div id="line"></div>
    <?php
    
        if(isset($_POST["id-remove"])){
            $del = "DELETE FROM usuario WHERE id=".$_POST["id-remove"];

            if (pg_query($conexao, $del)) {
              echo "<div class='container mx-auto alert alert-success alert-dismissible'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Conta removida com sucesso!</strong>
</div>";
            } else {
              echo "<div class='container mx-auto alert alert-danger alert-dismissible fade show'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Algo deu errado!</strong> Erro: ".pg_last_error()."</div>";
            }
        }

        if(isset($_GET["alt_dados"])){
          echo "<div class=' container mx-auto alert alert-success alert-dismissible'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Dados alterados com sucesso!</strong>
</div>";
        }
    
        $sql = "SELECT id, nome, email FROM usuario";
        $result = pg_query($conexao, $sql);
        
    ?>
    
<div class="mt-3 text-center">
  <table class="table table-bordered bg-white">
    <thead>
      <tr>
        <th>id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>deletar</th>
      </tr>
    </thead>
    <tbody>
        <?php

          while ($row=pg_fetch_row($result,$i)) {
           if($row[0] != $_SESSION["id"]){
            echo "<tr>";
            echo "<td>".$row[0]."</td>". "<td>".$row[1]."</td>"."<td>".$row[2];
            ?>
            <td>
                <button style="border: 0; background:none"  data-toggle="modal" data-target="#id<?php echo "".$row[0]; ?>" onclick="document.getElementById('<?php echo"id".$row[0]; ?>').style.display='block'"> <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/gsqxdxog.json"
    trigger="hover"
    colors="primary:#121331,secondary:#000000"
    style="width:40px;height:40px">
</lord-icon> 
                </button>
<!-- The Modal -->
<div class="modal" id="<?php echo "id".$row[0]; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Deletar conta</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Você realmente que apagar sua conta "<?php echo "".$row[1]; ?>"?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <form action="/home.php" method="POST">
            <input type="hidden"  name="id-remove" value="<?php echo "".$row[0] ?>">
           <button type="submit" class="btn btn-danger">apagar</button>
        </form>
      </div>
    </div>
  </div>
</div>
            </td>
            <?php
            echo "</tr>";
          }
          }
        ?>
    </tbody>
  </table>
</div>

</div>
  </main>
</body>
</html>
<?php }else{
  echo "<script>document.location='index.php'</script>";
}
?>
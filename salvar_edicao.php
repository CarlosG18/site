<?php 
     session_start();
    include ('includes/conexao.php');
     $senha = sha1($_POST["senha"]);

    if($senha == $_SESSION["senha"]){
      $id_mod = $_POST["id_ed"];
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $_SESSION["nome"] = $nome;

      $update = "UPDATE usuario SET nome='".$nome."', email='".$email."', senha='".$senha."' WHERE id='".$id_mod."'";
      $result = pg_query($conexao,$update);
       echo "<script>document.location='home.php?alt_dados=true'</script>";
     }else{
       echo "<script>document.location='editar_perfil.php?alterar=false'</script>";
     }
?>
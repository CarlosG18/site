<?php
    include 'includes/conexao.php'; 
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $papel = $_POST["papel"];
    $senha = sha1($_POST["senha"]);
       
    $sql = "INSERT INTO usuario (nome, email,senha) VALUES ('".$nome."','".$email."','".$senha."')";
       
    pg_query($conexao, $sql);  

    $select_id = "SELECT id FROM usuario WHERE nome='".$nome."' and email='".$email."' and senha='".$senha."'";

    $result = pg_query($conexao, $select_id);
    $id = pg_fetch_row($result,$i);

    $sql1 = "INSERT INTO usuario_papel (usuario_id, papel_id) VALUES ('".$id[0]."','".$papel."')";
    pg_query($conexao, $sql1);

    echo "<script>document.location='index.php?cad=true'</script>";
?>



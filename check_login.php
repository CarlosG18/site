<?php
    session_start();
    include ("includes/conexao.php");
    
    $email = $_POST["email"];
    $senha = sha1($_POST["senha"]);
    $_SESSION["logado"] = false;
    $sql = "SELECT * FROM usuario";

    $result = pg_query($conexao, $sql);

    while ($row=pg_fetch_row($result,$i)) {
      for($j=0; $j < count($row); $j++) {
        if($row[2] == $senha && $row[3] == $email){
                $_SESSION["logado"] = true;
                $_SESSION["id"] = $row[0];
                $_SESSION["nome"] = $row[1];
                $_SESSION["senha"] = $row[2];
                break; 
            }
      }
    }

    if($_SESSION["logado"] == true){
      echo "<script>document.location='home.php'</script>";
    }else{
      echo "<script>document.location='login.php?login=false'</script>";
    }
?>
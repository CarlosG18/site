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

</body>
</html>
<?php }else{
  echo "<script>document.location='index.php'</script>";
}
?>
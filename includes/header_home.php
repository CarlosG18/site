<?php
  session_start();
  $sql = "SELECT papel_id FROM usuario_papel WHERE usuario_id=".$_SESSION["id"];
  $result = pg_query($conexao, $sql);
  $_SESSION["papel"] = pg_fetch_row($result,$i);
  $string_papel;

  if($_SESSION["papel"][0] == 1){
    $string_papel = "cliente";
  }else if($_SESSION["papel"][0] == 2){
    $string_papel = "barbeiro";
  }
?>

<header>
     <nav id="nav" class="navbar navbar-expand-md bg-light navbar-light shadow">
     <!-- Brand -->
    <div style="font-family: 'Ubuntu';" class="container">
     <a class="navbar-brand" href="home.php"><img src="/imgs/logo.png" style="width: 40px">MarkHair</a>

     <!-- Toggler/collapsibe Button -->
     <button class="navbar-toggler shadow" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contatos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ajuda</a>
      </li>
    </ul>
      <ul class="navbar dropdown ml-auto mb-0">
       <button type="button" class="btn btn-light shadow dropdown-toggle" data-toggle="dropdown">
    <?php echo $string_papel; ?>
  </button>
  <div class="dropdown-menu">
    <?php if($_SESSION["papel"][0] == 1){ ?>
    <a class="dropdown-item" href="home.php?categoria=2">trocar para barbeiro</a>
    <?php }else if($_SESSION["papel"][0] == 2){?>
    <a class="dropdown-item" href="home.php?categoria=1">trocar para cliente</a>
  <?php } ?>
  </div>
    </ul>
    <ul class="navbar dropdown ml-auto mb-0">
       <button type="button" class="btn btn-light shadow dropdown-toggle" data-toggle="dropdown">
    <?php echo $_SESSION["nome"]; ?>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="editar_perfil.php">editar dados</a>
    <a class="dropdown-item" href="logout.php">sair</a>
  </div>
    </ul>
  </div>
    </div>
     </nav>
</header>
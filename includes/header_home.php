<?php
  $sql = "SELECT papel_id FROM usuario_papel WHERE usuario_id=".$_SESSION["id"];
  $result = pg_query($conexao, $sql);
  $papel = pg_fetch_row($result,$i);
  $string_papel;

  if($papel[0] == 1){
    $string_papel = "cliente";
  }else if($papel[0] == 2){
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
    <ul class="navbar-nav mx-auto">
      <li class="nav-link">
        <?php echo $string_papel; ?>
      </li>
      <li>
        <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> categoria</a>
      </li>      
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
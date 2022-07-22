<?php
  session_start();
  include 'includes/conexao.php';

  $sql_atendimento = "SELECT * FROM atendimento WHERE atendimento.usuario_id=".$_SESSION["id"];
  $query_atend = pg_query($conexao,$sql_atendimento);
?>
<main>
      <div id="box_destaque" class="container row shadow mx-auto my-3 p-3">
         <div class="col-sm-2">
           <img style="max-width: 200px; width:150px; padding-top: auto" src="/imgs/pesquisa.svg" alt="pesquisar">
         </div>
         <div class="col-sm-10 text-center">
           <p 
id="destaque" style="font-size: 3em;" class="container">Marque seu horário já</p>
           <div>
           <a class="container" href="list_barber.php"> <button type="button" class="btn btn-primary shadow mx-auto">Clique aqui</button></a>
           </div>
         </div>
      </div>

      <div class="container mt-5">
        <h1 id="destaque">Seus agendamentos ativos</h1>
        <div id="line"></div>
        <div class="container">
          <p>Sem agendamentos ativos no momento</p>
        </div>
      </div>

      <div class="container mt-5">
        <h1 id="destaque">Seus atendimentos passados</h1>
        <div id="line"></div>
        <div class="container">
          <div class="table-responsive">
      <table class="table table-hover table-warning table-bordered text-center">
        <thead>
          <tr>
            <th> data </th>
            <th> horario </th>
            <th> ação </th>
          </tr>
        </thead>
        <tbody>
          <?php while($row=pg_fetch_row($query_atend,$i)){;
             ?>
          <tr>
            <th><?php echo $row[2]; ?></th>
            <th><?php echo $row[3]; ?></th>
            <th><button class="btn btn-light"> mais detalhes</button> </th>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
        </div>
      </div>

      <div class="container mt-5">
        <h1 id="destaque">Progressos em Promoções</h1>
        <div id="line"></div>
        <div class="container">
          <p>Sem promoções ativadas</p>
        </div>
      </div>
</main>
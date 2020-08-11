<?php  
  session_start();
  $_SESSION['pagina'] = 'chamados';
  require_once 'scripts/header.php';
?>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
            <? foreach($chamados as $chamado){ ?>
              <?php   
                $chamado_dados = explode('#', $chamado);

                if($_SESSION['perfil_id'] == 2){
                  //só exibir chamado, se foi criado pelo usuário
                  if($_SESSION['id'] != $chamado_dados[0]){
                    continue;
                  }
                }
              
                if(count($chamado_dados) < 3){
                  continue;
                }
                
              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$chamado_dados[1]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                  <p class="card-text"><?=$chamado_dados[3]?></p>

                </div>
              </div>
            <? } ?>
              <div class="row mt-5">
                <div class="col-6">
                <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
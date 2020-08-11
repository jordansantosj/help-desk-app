<? require_once 'validador_acesso.php'; ?>
<?php 
if(isset($_SESSION['pagina']) && $_SESSION['pagina'] == 'chamados'){
  //chamados
  $chamados = array();
  //abrir o arquivo.hd
  $arquivo = fopen('arquivo.hd', 'r');
  //percorrer arquivo enquanto ouver linhas a serem recuperadas
  while(!feof($arquivo)){
    $registro = fgets($arquivo);
    $chamados[] = $registro;
  }
  //fechar o arquivo aberto
  fclose($arquivo);
}
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css" />

  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="style/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="scripts/logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>


<?php
function isActivePage($currentPage, $pageName){
if($currentPage == $pageName){
return 'active';
}
return '';
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu site</title>
  <link rel="stylesheet" href="src/css/main.css">
  <title>
    <?- $currentPage == 'Index' ? 'Chef em casa - Pagina Inicial' : ''; ?>
    <?- $currentPage == 'about' ? 'Chef em casa - Sobre' : ''; ?>
    <?- $currentPage == 'contact' ? 'Chef em casa - Contato' : ''; ?>*
  </title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a class="navbar-brand" href="index.php">
      Chefe em Casa
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= IsActivePage($currentPage, 'index') ?>">
          <a class="nav-link" href="index.php">Pagina Inicial <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?= IsActivePage($currentPage, 'about') ?>">
          <a class="nav-link" href="about.php">
            Sobre
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contato</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-color1 my-2 my-sm-0 text-light" href="register.php">
        Cadastre-se
        </a>
      </form>
    </div>
</div>
  </nav>
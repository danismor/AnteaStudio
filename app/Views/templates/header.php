<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <link rel = "stylesheet" href = "/assets/css/style.css">
    <title>Document</title>
</head>
<body>
  <?php
    $uri = service('uri');
  ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Home page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
    <?php if (session()->get('loggato')): ?>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" <?= ($uri->getSegment(1)=='dashboard' ? 'active': null)?>" >
          <a class="nav-link "  href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item" <?= ($uri->getSegment(1)=='profile' ? 'active': null)?>">
          <a class="nav-link" href="/listaUtenti">Lista utenti</a>
        </li>
      </ul>
      <ul class="navbar-nav-my-2 my-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
     
      <?php else: ?> 
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" <?= ($uri->getSegment(1)=='' ? 'active': null)?>">
          <a class="nav-link "  href="/">Login</a>
        </li>
        <li class="nav-item" <?= ($uri->getSegment(1)=='register' ? 'active': null)?>">
          <a class="nav-link" href="/register">Registrati</a>
        </li>
      </ul>
    </div>
    <?php endif; ?> 
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class= "pt-5">
            <h1 class="text-center">Benvenuto, <?= session()->get('username') ?></h1>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row pt-5">
        <div class="pt-3  bg-light">
            <h2>Di seguito le tue informazioni</h2>
        </div>
        <div class= "pt-3  bg-light">
            <p id="infoUtente"> <b> Nome: </b> <?= session()->get('nome') ?>  &ensp;  <b>Cognome: </b> <?= session()->get('cognome') ?>   &ensp;   <b>Email: </b> <?= session()->get('email') ?> </p>
        </div>
    </div>
</div>
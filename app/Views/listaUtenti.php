<?php echo view("templates/header") ?>
<div class="container">
  <div class="pt-5 text-center" >
  <h1 class="pt-3">Elenco utenti registrati nell'applicazione</h1>
  </div>
</div>
<div class ="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 bg-light from-wrapper" id="elenco">
            <div class = "container2">
<?php  if(!empty($users)) :?>

    <ul id="list">
      <?php  foreach($users as $user) :?>
        <li><b> Nome: </b>  <?=  $user->nome ?> </li>
        <?php endforeach ?>
    </ul>
<?php endif; ?>
</div>

<div class = "container2">
<?php  if(!empty($users)) :?>

<ul id="list">
  <?php  foreach($users as $user) :?>
    <li><b> Cognome: </b>  <?=  $user->cognome ?> </li>
    <?php endforeach ?>
</ul>
<?php endif; ?>
</div>


<div class = "container2">
<?php  if(!empty($users)) :?>

<ul id="list">
  <?php  foreach($users as $user) :?>
    <li><b> Email: </b>  <?=  $user->email ?> </li>
    <?php endforeach ?>
</ul>
<?php endif; ?>
</div>

            </div>


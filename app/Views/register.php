<div class = "container">
    <div class = "row">
        <div class ="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-9 bg-light from-wrapper">
            <div class = "container">
            <h3>Registrazione</h3>
            <hr>
            <form class ="" action="/register" method="post">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class = "form pb-3">
                        <label for="nome">nome: </label>
                        <br>
                        <input type="text" class ="control" name="nome" id="nome" value="<?=set_value('nome')?>" >
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class = "form pb-3">
                        <label for="nome">cognome: </label>
                        <br>
                        <input type="text" class ="control" name="cognome" id="cognome" value="<?=set_value('cognome')?>" >
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class = "form pb-3">
                        <label for="email">email: </label>
                        <br>
                        <input type="text" class ="control" name="email" id="email" value="<?=set_value('email')?>" >
                        </div>
                    </div>
                 
                 
                    <div class="col-12 col-sm-6">
                        <div class = "form pb-3">
                        <label for="username">Username: </label>
                        <br>
                        <input type="text" class ="control" name="username" id="username" value="<?=set_value('username')?>" >
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class ="form">
                        <label for="password">Password: </label>
                        <br>
                        <input type="password" class="control" name="password" id="password" value="">
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class ="form">
                        <label for="password_conf">conferma Password: </label>
                        <br>
                        <input type="password" class="control" name="password_conf" id="password_conf" value="">
                        
                        </div>
                    </div>
                    <br>
                      <?php if (isset($validation)): ?>
                      <div class="col-12 ">
                        <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                        </div>
                      </div>
                      <?php endif; ?>
            </div>
                <div class="row">
                    <div class="col-12 col-sm-4 pt-3 pb-3">
                        <button type="submit" class="btn btn-primary">Registrati</button>
                    </div>
                    <div class="col-12 col-sm-8  pt-3" >
                    <a href="/">Ho già un account</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

</div>

<div class = "container">
    <div class = "row">
        <div class ="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-9 bg-light from-wrapper">
            <div class = "container">
            <h3>Login</h3>
            <hr>
            <?php if(session()->get('success')):?>
                <div class="alert alert-success" role ="alert">
                <?= session()->get('success') ?>
                </div>
                <?php endif; ?>
            <form class ="" action="/" method="post">
                <div class = "form pb-3">
                <label for="username">username: </label>
                <br>
                <input type="text" class ="control" name="username" id="username" value="<?=set_value('username')?>" >
                </div>
                <div class ="form">
                <label for="password">Password: </label>
                <br>
                <input type="password" class="control" name="password" id="password" value="">
                </div>
                <br>
                <?php if (isset($validation)): ?>
                      <div class="col-12 ">
                        <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                        </div>
                      </div>
                      <?php endif; ?>
                <div class="row">
                    <div class="col-12 col-sm-4 pt-3 pb-3">
                        <button type="submit" class="btn btn-primary">Accedi</button>
                    </div>
                    <div class="col-12 col-sm-4  pt-3" >
                    <a href="/register">Registrati</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

</div>

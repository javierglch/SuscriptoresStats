<div class="container">
    <section class="margin-top-40 text-center">
        <a href="<?=base_url()?>"><img class="img-fluid img-responsive" src="/assets/images/logo.png" alt="logo subs stats"></a>
    </section>

    <section class="mx-auto login-card margin-top-40">
        <div class="card">
            <div class="card-header">
                Acceso al panel de control
            </div>
            <div class="card-block">
                <form class="form" action="<?= base_url('/login') ?>" method="POST">
                    <?= validation_errors() ?>
                    <?php print_all_flash_messages() ?>
                    <div class="form-group">
                        <label for="EmailInput">Email</label>
                        <input name='email' class="form-control" type="text" placeholder="Email con el que te registraste" id="EmailInput" autofocus="autofocus">
                    </div>
                    <div class="form-group">
                        <label for="PassInput">Contraseña</label>
                        <input name='pass' class="form-control" type="password" value="" id="PassInput">
                    </div>
                    <div class="form-group text-center">
                        <input class="btn btn-success" type="submit" value="Acceder">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
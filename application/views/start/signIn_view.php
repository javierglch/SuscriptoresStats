<div class="container">
    <section class="margin-top-40 text-center">
        <a href="<?= base_url() ?>"><img class="img-fluid img-responsive" src="/assets/images/logo.png" alt="logo subs stats"></a>
    </section>

    <section class="margin-top-40">
        <div class="table">
            <div class="row">
                <div class="col-md-6">
                    <img src="/assets/images/sign-in-img.jpg" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Registrarse
                        </div>
                        <div class="card-block">
                            <form class="form" action="<?= base_url('/sign-in') ?>" method="POST">
                                <?= validation_errors() ?>
                                <?php print_all_flash_messages() ?>
                                <div class="form-group">
                                    <label for="EmailInput">Email</label>
                                    <input name="email" class="form-control" type="text" placeholder="Email o id canal de youtube" id="EmailInput" value="<?= set_value('email') ?>" autofocus="autofocus">
                                </div>
                                <div class="form-group">
                                    <label for="PassInput">Contraseña</label>
                                    <input name="pass" class="form-control" type="password" value="" id="PassInput">
                                </div>
                                <div class="form-group">
                                    <label for="YoutubeInput">Youtube</label>
                                    <input name="youtubeurl" class="form-control" type="text" value="" placeholder="Url del canal de youtube" id="YoutubeInput" value="<?= set_value('youtubeurl') ?>">
                                </div>


                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label" for="CondicionesInput">
                                            <input name="conditions" type="checkbox" class="form-check-input" id="CondicionesInput" value="1">
                                            He leído y acepto las <a href="<?= base_url('conditions') ?>">condiciones</a>.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Acceder</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
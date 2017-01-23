<?php $this->view('panel/components/nav_header_view', ['activeItemId' => 1]); ?>
<?php
$youtubers = $this->Youtubers;
?>
<section class='container margin-top-40'>
    <div class='table'>
        <div class='row'>
            <div class='col-sm-4'>
                <div style='margin-top:10px'>
                    <img src='/assets/images/postal/config.jpg' class='img-fluid'>
                </div>
            </div>
            <div class='col-sm-8'>
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingChangePass">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseChangePass" aria-expanded="true" aria-controls="collapseChangePass">
                                    Cambiar Contraseña
                                </a>
                            </h5>
                        </div>
                        <div id="collapseChangePass" class="collapse <?= $form == 1 ? 'show' : '' ?>" role="tabpanel" aria-labelledby="headingChangePass">
                            <div class="card-block">
                                <form class='form' action="<?= base_url('panel/config') ?>" method="POST">
                                    <?php if ($form == 1): ?>
                                        <?php print_all_flash_messages() ?>
                                        <?= validation_errors() ?>
                                    <?php endif; ?>

                                    <input type='hidden' name='form_type' value="1">
                                    <div class='form-group row'>
                                        <label for="ContraseñaActual" class="col-sm-4 col-form-label">Contraseña Actual</label>
                                        <div class="col-sm-8">
                                            <input name='actual_pass' type="password" class="form-control" id="ContraseñaActual" placeholder="Contraseña Actual">
                                        </div>
                                    </div>
                                    <div class='form-group row'>
                                        <label for="NuevaContraseña" class="col-sm-4 col-form-label">Nueva Contraseña</label>
                                        <div class="col-sm-8">
                                            <input name='new_pass' type="password" class="form-control" id="NuevaContraseña" placeholder="Nueva Contraseña">
                                        </div>
                                    </div>
                                    <div class='form-group row'>
                                        <label for="ConfirmarContraseña" class="col-sm-4 col-form-label">Confirmar Contraseña</label>
                                        <div class="col-sm-8">
                                            <input name='confirm_pass' type="password" class="form-control" id="ConfirmarContraseña" placeholder="Confirmar Contraseña">
                                        </div>
                                    </div>
                                    <div class='text-center'>
                                        <button type='submit' class='btn btn-success'>Cambiar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingConfiguracionGeneral">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseConfiguracionGeneral" aria-expanded="false" aria-controls="collapseConfiguracionGeneral">
                                    Configuración General
                                </a>
                            </h5>
                        </div>
                        <div id="collapseConfiguracionGeneral" class="collapse show" role="tabpanel" aria-labelledby="headingConfiguracionGeneral">
                            <div class="card-block">
                                <form class='form' action="<?= base_url('panel/config') ?>" method="POST">
                                    <?php if ($form == 2): ?>
                                        <?php print_all_flash_messages() ?>
                                        <?= validation_errors() ?>
                                    <?php endif; ?>
                                    <input type='hidden' name='form_type' value='2'>
                                    <div class='form-group'>
                                        <label for="ContraseñaActual" class="col-form-label">Email</label>
                                        <input value='<?= set_value('email') ? set_value('email') : $youtubers->getEmail() ?>' name='email' type="text" class="form-control" id="ContraseñaActual" placeholder="ejemplo@dominio.es">
                                    </div>
                                    <div class='form-group'>
                                        <label for="ContraseñaActual" class="col-form-label">Url del canal de youtube</label>
                                        <input value='<?= set_value('url_youtube') ? set_value('url_youtube') : $youtubers->getChannel_url() ?>' name='url_youtube' type="text" class="form-control" id="ContraseñaActual" placeholder="ej: https://www.youtube.com/user/CooLifeGame">
                                    </div>
                                    <div class='form-group'>
                                        <label for="ContraseñaActual" class="col-form-label">Custom link para los subs</label>
                                        <input value='<?= set_value('url_app') ? set_value('url_app') : $youtubers->getApp_custom_url() ?>' name='url_app' type="text" class="form-control" id="ContraseñaActual" placeholder="ej: CoolifeSubs">
                                    </div>
                                    <div class='form-group'>
                                        <label for="ContraseñaActual" class="col-form-label">Url de un video destacado</label>
                                        <input value='<?= set_value('url_video') ? set_value('url_video') : $youtubers->getLast_video() ?>' name='url_video' type="text" class="form-control" id="ContraseñaActual" placeholder="ej: https://www.youtube.com/watch?v=pQV_duqMr2U">
                                    </div>
                                    <div class='form-group'>
                                        <label for="CustomMsg" class="col-form-label">Mensaje personalizado que verán tus subs al ir a registrarse. <small>Puedes utilizar tags html como <?= htmlspecialchars('<strong>, <em>, etc.') ?></small></label>
                                        <textarea rows="5" name='custom_msg'class="form-control" id="CustomMsg"><?= set_value('custom_msg') ? set_value('custom_msg') : $youtubers->getCustom_sub_msg() ?></textarea>
                                    </div>
                                    <div class='form-group'>
                                        <label for="CustomMsgRegister" class="col-form-label">Mensaje personalizado que verán tus subs después de haberse registrado. <small>Puedes utilizar tags html como <?= htmlspecialchars('<strong>, <em>, etc.') ?></small></label>
                                        <textarea rows="5" name='custom_msg_register'class="form-control" id="CustomMsgRegister"><?= set_value('custom_msg_register') ? set_value('custom_msg_register') : $youtubers->getCustom_sub_msg_register() ?></textarea>
                                    </div>
                                    <div class='text-center'>
                                        <button type='submit' class='btn btn-success'>Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingActualizarLogo">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="" href="#collapseActualizarLogo" aria-expanded="false" aria-controls="collapseActualizarLogo">
                                    Actualizar logo del canal
                                </a>
                            </h5>
                        </div>
                        <div id="collapseActualizarLogo" class="collapse show" role="tabpanel" aria-labelledby="headingActualizarLogo">
                            <div class="card-block">
                                <form class='form' action="<?= base_url('panel/config') ?>" method="POST">
                                    <?php if ($form == 3): ?>
                                        <?php print_all_flash_messages() ?>
                                    <?php endif; ?>
                                    <input type='hidden' name='form_type' value='3'>
                                    <div class='text-center'>
                                        <button type='submit' class='btn btn-success'>Actualizar mi logo del canal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
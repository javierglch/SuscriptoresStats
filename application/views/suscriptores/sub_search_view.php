<div class="container">
    <div class="table mx-auto" style="max-width:600px;margin-top:20px;">
        <div class="row">
            <div class="col-sm-6 text-center">
                <img class="img-fluid" src="/assets/images/logo-xach-effect.png" style="height: 100px;">
            </div>
            <div class="col-sm-6 text-center">
                <img class="img-fluid" src="/assets/images/youtube_logos/<?= $youtuber->getYtLogoImgMedium() ?>" style="height: 100px;">
            </div>
        </div>
    </div>
    <div class="mx-auto card" style="max-width:600px;margin-top:20px;">
        <div class='card-header text-xs-center'>
            Bienvenido Suscriptor!
        </div>
        <div class='card-block'>
            <?php if ($youtuber->getCustom_sub_msg()): ?>
                <p>
                    <?= $youtuber->getCustom_sub_msg() ?>
                </p>
            <?php endif; ?>
            <form class="form" method="GET" action="<?= base_url('sub/search') ?>">
                <?php if ($error): ?>
                    <div class="alert alert-danger" role="alert"><?= $error ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label class='form-control-label'>Escribe tu nombre de invocador</label>
                    <input type="text" name="summoner_name" class="form-control" value="<?= $this->input->get('summoner_name') ?>">
                </div>
                <div class="form-group">
                    <label class='form-control-label'>De qué región eres?</label>
                    <select name="region" class="form-control">
                        <option value="br">BR</option>
                        <option value="eune">EUNE</option>
                        <option value="euw" selected="selected">EUW</option>
                        <option value="jp">JP</option>
                        <option value="kr">KR</option>
                        <option value="lan">LAN</option>
                        <option value="las">LAS</option>
                        <option value="na">NA</option>
                        <option value="oce">OCE</option>
                        <option value="pbe">PBE</option>
                        <option value="ru">RU</option>
                        <option value="tr">TR</option>
                    </select>
                    <?php if ($this->input->get('region')): ?>
                        <script type="text/javascript">
                            $(document).ready(function (e) {
                                $('select[name="region"]').val("<?= $this->input->get('region') ?>");
                            });
                        </script>
                    <?php endif; ?>
                </div>
                <div class="form-group text-center"> 
                    <input type="submit" value="Buscar" class="btn btn-success">
                </div>
            </form>
            <?php if ($summonerDto): ?>
                <hr noshade> 
                <div class="text-center">
                    <h3>Ese este tu invocador?</h3>
                    <div class="card-block text-xs-center">
                        <?= $summonerDto->getProfileIcon_ImageTag(null, 'sum-profile-icon')->toString() ?>
                        <p class="card-text text-primary" style="color:black">
                            <strong><?= $summonerDto->name ?></strong>&nbsp;&nbsp;<small>(lvl: <?= $summonerDto->summonerLevel ?>)</small>
                        </p>
                        <form class="form" action="<?= base_url('sub/add') ?>" method="POST">
                            <input type="submit" class='btn btn-primary' value="Sí, ese soy yo. Apúntame!"><br/>
                        </form>
                        <small>* Si no eres tú, puede que tengas que verificar la <strong>región</strong> seleccionada.</small>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


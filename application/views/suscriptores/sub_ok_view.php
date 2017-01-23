<div class="container">
    <div class="table mx-auto" style="max-width:600px;margin-top:20px;">
        <div class="row">
            <div class="col-sm-6 text-center">
                <img class="img-fluid" src="/assets/images/logo-xach-effect.png" style="height: 100px;">
            </div>
            <div class="col-sm-6 text-center">
                <img class="img-fluid" src="/assets/images/youtube_logos/<?= $currentYoutuber->getYtLogoImgMedium() ?>" style="height: 100px;">
            </div>
        </div>
    </div>
    <div class="mx-auto card text-success text-center" style="max-width:600px;margin-top:20px;">
        <div class='card-header'>
            <h3 style='margin:0'>Genial, <?= $summonerDto->name ?></h3>
        </div>
        <div class='card-block'>
            <?php print_all_flash_messages() ?>
            <?= $summonerDto->getProfileIcon_ImageTag(null, 'sum-profile-icon')->toString() ?>
            <p class="card-text text-primary" style="color:black">
                <strong><?= $summonerDto->name ?></strong>&nbsp;&nbsp;<small>(lvl: <?= $summonerDto->summonerLevel ?>)</small>
            </p>
            <?php if ($currentYoutuber->getCustom_sub_msg_register()): ?>
                <p>Mensaje de <strong><?= $currentYoutuber->getChannelName() ?></strong></p>
                <blockquote class='custom_sub_msg_register'>
                    <i class="fa fa-quote-left"></i>&nbsp;<?= $currentYoutuber->getCustom_sub_msg_register() ?>&nbsp;<i class="fa fa-quote-right"></i>
                </blockquote>
            <?php endif; ?>
            <?php if ($currentYoutuber->getLast_video()): ?>
                <p>Mira el video que ha destacado <strong><?= $currentYoutuber->getChannelName() ?></strong> para ti:</p>
                <?= $currentYoutuber->getEmbedHtmlCodeForVideo() ?>
            <?php endif; ?>
            <hr noshade>
            <p style='margin-top:10px;'>
                Actualmente estas ayudando a crear un mejor contenido a:
            </p>

            <ul class='list-unstyled list-inline'>
                <?php foreach ($aYoutubers as $oYoutuber): ?>
                    <li class='list-inline-item'>
                        <a href='http://www.youtube.com/channel/<?= $oYoutuber->getChannelId() ?>' target='blank'>
                            <img title='<?= $oYoutuber->getChannelName() ?>' class="img-fluid" src="/assets/images/youtube_logos/<?= $oYoutuber->getYtLogoImgMedium() ?>" style="height: 100px;">
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
            <h3 style="margin-top:10px;">
                Muchas gracias por tu colaboración 
            </h3>
            <a class='btn btn-success' href='http://www.youtube.com/channel/<?= $oYoutuber->getChannelId() ?>' style='margin-top:20px;'>
                Volver a <?= $oYoutuber->getChannelName() ?>
            </a>
        </div>
        <div class='card-footer text-muted'>
            <small>* Si en algun momento deseas darte de baja, contacta con <a href='http://www.twitter.com/<?= $this->config->item('twitter') ?>'>@<?= $this->config->item('twitter') ?></a></small>
        </div>
    </div>
</div>


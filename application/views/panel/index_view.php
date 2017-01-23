<?php $this->view('panel/components/nav_header_view', ['activeItemId' => null]); ?>
<section class='container' style='margin-top:90px;'>
    <div class='card'>
        <div class='card-header'>
            Bienvenido, <?= $this->Youtubers->getChannelName() ?>
        </div>
        <div class='card-block'>
            <div class='text-center'>
                <div>Comparte este link con tus suscriptores para que añadan su nombre de invocador a la base de datos y puedas sacar los informes</div>
                <div class='app-link'><?= $this->Youtubers->getAppShareLink() ?></div>

                <script src="https://platform.twitter.com/widgets.js"></script>
                <script src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8"></script>
                <div class="share-buttons">
                    <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Registra tu invocador en SuscriptoresStats para ayudarme a hacer mejores videos!" target="_blank">
                        <link rel="me"  href="https://twitter.com/LeagueOfHexania">
                        <link rel="canonical" href="<?= $this->Youtubers->getAppShareLink() ?>">
                        Tweet
                    </a>
                    <div class="fb-share-button" data-href="<?= $this->Youtubers->getAppShareLink() ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgoo.gl%2FU2NyT2&amp;src=sdkpreparse">Compartir</a></div>
                </div>

                <div style='margin-top:15px;'>También puedes cambiar el link <a href='<?= base_url('panel/config') ?>'>aquí</a></div>
            </div>
        </div>
    </div>
</section>
<nav class="navbar navbar-toggleable-sm navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-brand">
        <a class='img-link' href='<?= base_url('panel') ?>'>
            <img title='Ir a inicio' src='/assets/images/logo-xach-effect.png' style='max-height: 50px'>
        </a>
        <a class='img-link' href='<?= $this->Youtubers->getChannel_url() ?>' target="_blank">
            <img title='Ir al canal' src='/assets/images/youtube_logos/<?= $this->Youtubers->getYtLogoImg() ?>' style='max-height: 50px'>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav mr-sm-2">
            <li class="nav-item dropdown <?= $activeItemId >= 2 ? 'active' : '' ?>">
                <a id='navbarDropdownMenuInformes' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" href="<?= base_url('logout') ?>">
                    <i class='fa fa-book'></i><span class="">&nbsp;Informes</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuInformes">
                    <a class="dropdown-item <?= $activeItemId == 2 ? 'active' : '' ?>" href="<?= base_url('panel/stats/subslist') ?>">Lista de Suscriptores</a>
                    <a class="dropdown-item <?= $activeItemId == 6 ? 'active' : '' ?>" href="<?= base_url('panel/stats/champions') ?>">Champion Stats</a>
                    <a class="dropdown-item <?= $activeItemId == 3 ? 'active' : '' ?>" href="<?= base_url('panel/stats/ranked') ?>">Ranked Stats</a>
                    <a class="dropdown-item <?= $activeItemId == 4 ? 'active' : '' ?>" href="<?= base_url('panel/stats/leagues') ?>">League Stats</a>
                    <a class="dropdown-item <?= $activeItemId == 5 ? 'active' : '' ?>" href="<?= base_url('panel/stats/sumary') ?>">Sumary Stats</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $activeItemId == 1 ? 'active' : '' ?>" href="<?= base_url('panel/config') ?>"><i class='fa fa-cog'></i><span class="">&nbsp;Configuración</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout') ?>"><i class='fa fa-lock'></i><span class="">&nbsp;Salir</span></a>
            </li>
        </ul>
    </div>

</nav>
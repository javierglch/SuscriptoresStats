<?php $this->view('panel/components/nav_header_view', ['activeItemId' => 2]); ?>

<div class='container'>
    <div class='card'>
        <div class='card-header text-primary text-center'>
            Lista de suscriptores apuntados
        </div>
        <div class='card-block'>
            <p>
                Total de suscriptores actualmente: <strong class='text-primary'><?= count($aSubsYtJoin) ?></strong> | MMR MEDIO: <strong  class='text-primary'><?= number_format($avgMMR, 2, ',', '.') ?></strong>
            </p>
            <table class='DataTable'>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Region</th>
                        <th>Rango</th>
                        <th>Nº Juegos</th>
                        <th>Modo de juego preferido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($aSubsList as $oSub): ?>
                        <?php // $oSub = new Suscriptores(); ?>
                        <tr>
                            <td><?= ++$c ?></td>
                            <td><?= $oSub->getSummoner_name() ?></td>
                            <td><?= $oSub->getRegion() ?></td>
                            <td>
                                <?php if ($oSub->getTier()): ?>
                                    <?php if ($oSub->getDivision()): ?>
                                        <img data-toggle="tooltip" data-placement="right" title="<?= $oSub->getTier() . ' ' . $oSub->getDivision() ?>" style='height:30px' src='/assets/images/tier-icons/tier_icons/<?= strtolower($oSub->getTier()) ?>_<?= strtolower($oSub->getDivision()) ?>.png'>
                                    <?php else: ?>
                                        <img data-toggle="tooltip" data-placement="right" title="<?= $oSub->getTier() ?>" style='height:30px' src='/assets/images/tier-icons/base_icons/<?= strtolower($oSub->getTier()) ?>.png'>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <span style='height:30px;line-height: 30px;'>-</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $oSub->getTotal_games_registed() ?></td>
                            <td style='text-transform: capitalize'><?= strtolower(str_replace('_', ' ', $oSub->getPrefered_queue())) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type='text/javascript'>
    $(document).ready(function (e) {
        $('.DataTable')
                .on('draw.dt', function () {
                    setTimeout(function () {
                        $('[data-toggle="tooltip"]').tooltip();
                    }, 300);
                })
                .DataTable(
                        {
                            info: true,
                            language: {
                                "decimal": ",",
                                "emptyTable": "No hay datos",
                                "info": "Mostrando desde el _START_ hasta el _END_ de un total de _TOTAL_ registros",
                                "infoEmpty": "Showing 0 to 0 of 0 entries",
                                "infoFiltered": "(filtered from _MAX_ total entries)",
                                "infoPostFix": "",
                                "thousands": ".",
                                "lengthMenu": "Mostrando _MENU_ registros",
                                "loadingRecords": "Loading...",
                                "processing": "Processing...",
                                "search": "Buscar:",
                                "zeroRecords": "No se encuentran registros",
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Ultimo",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                },
                                "aria": {
                                    "sortAscending": ": activate to sort column ascending",
                                    "sortDescending": ": activate to sort column descending"
                                }
                            },
                        }
                );
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
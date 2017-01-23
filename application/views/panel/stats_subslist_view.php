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
                        <th>Ranked</th>
                        <th>Nº Juegos</th>
                        <th>Modo de juego preferido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($aSubsYtJoin as $oSubsytjoin): ?>
                        <?php // $oSubsytjoin = new SubsYtJoin(); ?>
                        <tr>
                            <td><?= ++$c ?></td>
                            <td><?= $oSubsytjoin->getSub_summoner_name() ?></td>
                            <td><?= $oSubsytjoin->getSub_region() ?></td>
                            <td>
                                <?php if ($oSubsytjoin->getSub_tier()): ?>
                                    <?php if ($oSubsytjoin->getSub_division()): ?>
                                        <img data-toggle="tooltip" data-placement="right" title="<?= $oSubsytjoin->getSub_tier() . ' ' . $oSubsytjoin->getSub_division() ?>" style='height:30px' src='/assets/images/tier-icons/tier_icons/<?= strtolower($oSubsytjoin->getSub_tier()) ?>_<?= strtolower($oSubsytjoin->getSub_division()) ?>.png'>
                                    <?php else: ?>
                                        <img data-toggle="tooltip" data-placement="right" title="<?= $oSubsytjoin->getSub_tier() ?>" style='height:30px' src='/assets/images/tier-icons/base_icons/<?= strtolower($oSubsytjoin->getSub_tier()) ?>.png'>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <span style='height:30px;line-height: 30px;'>-</span>
                                <?php endif; ?>
                            </td>
                            <td><?= $oSubsytjoin->getTotal_games_registed() ?></td>
                            <td style='text-transform: capitalize'><?= strtolower(str_replace('_', ' ', $oSubsytjoin->getPrefered_queue())) ?></td>
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
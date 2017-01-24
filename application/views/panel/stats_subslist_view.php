<?php $this->view('panel/components/nav_header_view', ['activeItemId' => 2]); ?>

<div class='container'>
    <div class='card'>
        <div class='card-header text-primary text-center'>
            Lista de suscriptores apuntados
        </div>
        <div class='card-block'>
            <p>
                Total de suscriptores actualmente: <strong class='text-primary'><?= $intTotalSubs ?></strong> | RANGO MEDIO: <strong  class='text-primary'><?= img_tag_league_by_mmr($avgMMR) ?></strong>
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
                                <?= img_tag_league_by_league($oSub->getTier(), $oSub->getDivision(), $oSub->getLp()) ?>
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
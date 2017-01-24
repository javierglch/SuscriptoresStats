<?php $this->view('panel/components/nav_header_view', ['activeItemId' => 6]); ?>

<div class='container'>
    <div class='card'>
        <div class='card-header text-primary text-center'>
            Estadísticas de campeones
        </div>
        <div class='card-block'>
            <?php if ($error_msg): ?>
                <div class="alert alert-danger" style='width: 100%;'>
                    <button class="close" data-dismiss="alert" type="button"><i class='fa fa-close'></i></button>
                    <?= $error_msg ?>
                </div>
            <?php endif; ?>
            <form class="form form-inline" action='<?= base_url('panel/stats/champions') ?>' method='GET'>
                <div class='form-inline mx-auto'>
                    <div class="form-group">
                        &nbsp;Desde:&nbsp;<input class="form-control datepicker" name="desde" type="text" value="<?= isset($_GET['desde']) ? $_GET['desde'] : '' ?>">
                    </div>
                    <div class="form-group">
                        &nbsp;Hasta:&nbsp;<input class="form-control datepicker" name="hasta" type="text" value="<?= isset($_GET['hasta']) ? $_GET['hasta'] : '' ?>">
                    </div>
                    <div class="form-group">
                        &nbsp;División:&nbsp;<select class="form-control" name="division">
                            <option value="1">1 Día</option>
                            <option value="2">1 Semana</option>
                            <option value="3">1 Mes</option>
                        </select>
                        <?php if (isset($_GET['division'])): ?>
                            <script type='text/javascript'>
                                $('select[name="division"]').val("<?= $_GET['division'] ?>");
                            </script>
                        <?php endif; ?>
                    </div>
                    &nbsp;<button class="btn btn-success" type="submit">Buscar</button>
                </div>
            </form>
            <div class="submit-action-msg" style="text-align: center;"></div>
            <?php if ($aData): ?>
                <hr noshade>
                <div style='margin-bottom: 10px;margin-top:20px;'>
                    Número total de juegos analizados: <strong class='text-primary'><?= $totalGames ?></strong> | Tiempo de carga: <strong class="text-muted"><?= $timeSpent ?>s</strong>
                    <div class='filter-box pull-right'>
                        <input type='text' class='form-control graph-filter-input' placeholder='Filtrar por nombre...' style='max-width: 400px'>
                    </div>
                </div>
                <div class="graphs">
                </div>
                <script type="text/javascript">
                    var stats = <?= json_encode($aData); ?>

                    $(document).ready(function (e) {

                        var c = 0;
                        for (champ_name in stats) {
                            c++;
                            var canvas_id = 'Graph_' + c;
                            $('.graphs').append('<div class="graph-box" champ="' + champ_name.toLowerCase() + '"><h3>' + champ_name + ' (games: ' + stats[champ_name].total_games + ')</h3><div style="height:200px;width:100%"><canvas id="' + canvas_id + '" width="400" height="200"></canvas></div></div>');

                            var champ_stats = stats[champ_name].stats;

                            var labels = [];
                            var values = [];
                            for (i in champ_stats) {

                                labels.push(champ_stats[i].fechas);
                                values.push(champ_stats[i].games_played);
                            }

                            var canvas_context = document.getElementById(canvas_id).getContext("2d");
                            canvas_context.canvas.width = '300px';
                            canvas_context.canvas.height = '200px';
                            new Chart(canvas_context, {
                                type: 'line',
                                data: {
                                    labels: labels,
                                    datasets: [
                                        {
                                            label: champ_name,
                                            data: values,
                                            maintainAspectRatio: false,
                                        }
                                    ]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                                display: true,
                                                ticks: {
                                                    suggestedMin: 0, // minimum will be 0, unless there is a lower value.
                                                    beginAtZero: true   // minimum value will be 0.
                                                }
                                            }]
                                    }
                                }
                            });

                        }

                    });
                </script>
            <?php else: ?>
                <p>Seleccione las fechas para comenzar...</p>
            <?php endif; ?>

        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('input.datepicker').datepicker({
            format: 'dd-mm-YYYY',
            weekStart: 1,
        });

        $('.graph-filter-input').on('keyup', function (e) {
            var filterValue = $(this).val();
            if (filterValue) {
                $('.graph-box')
                        .hide()
                        .filter('[champ*="' + filterValue.toLowerCase() + '"]')
                        .show();
            } else {
                $('.graph-box').show();
            }
        });
        $('form').submit(function (e) {
            $('.submit-action-msg').html('<strong>La consulta puede durar varios minutos si las fechas son muy amplias (más de 1 mes dividio por días), por favor, espera...</strong><br/><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>');
            $('input[type="submit"]').prop('disabled', true);
        })
    })
</script>
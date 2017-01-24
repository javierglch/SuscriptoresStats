<?php

/**
 * [Clase generada automáticamente desde el script script_createClassModels.php]<br>
 * <br>
 * Puedes utiliar esta clase para añadir metodos y gestionar el modelo a tu antojo, en caso de
 * actualización, esta clase no sera eliminada (solo se crea automaticamente con el script en caso de no existir).<br>
 * 
 * Información sobre la tabla suscriptores
 * -Versión: 10
 * -Fecha de creación: 2017-01-20 23:23:30
 * -Última modificación: 
 * -Comentario 
 * -Numero de columnas: 9
 * 
 * @author Javier
 */
class SSSS {

    const TIER_BASE = 600;
    const DIVISION_BASE = 100;

    static $MMR_CALC_CONFIG = [
        'tier' => [
            'BRONZE' => 1,
            'SILVER' => 2,
            'GOLD' => 3,
            'PLATINUM' => 4,
            'DIAMOND' => 5,
            'MASTER' => 6,
            'CHALLENGER' => 7,
        ],
        'division' => [
            'V' => 0,
            'IV' => 1,
            'III' => 2,
            'II' => 3,
            'I' => 4,
        ]
    ];
    static $A_TIERS = ['PROVISIONAL', 'BRONZE', 'SILVER', 'GOLD', 'PLATINUM', 'DIAMOND', 'MASTER', 'CHALLENGER'];
    static $A_DIVISION = ['V', 'IV', 'III', 'II', 'I'];

    public static function calcMMRByLeague($tier, $division, $lp) {
        $mmr = 0;
        if (self::$MMR_CALC_CONFIG['tier'][$tier] >= 6) {
            if ($lp > 200) {
                $tier = 'MASTER';
            }
            $mmr += self::$MMR_CALC_CONFIG['tier'][$tier] * self::TIER_BASE + $lp;
        } else {
            $mmr += self::$MMR_CALC_CONFIG['tier'][$tier] * self::TIER_BASE + self::$MMR_CALC_CONFIG['division'][$division] * self::DIVISION_BASE + $lp;
        }
        return $mmr;
    }

    public static function calcLeagueByMMR($mmr) {

        $tierIndex = floor($mmr / self::TIER_BASE);
        if ($tierIndex >= count(self::$A_TIERS)) {
            $tierIndex = count(self::$A_TIERS) - 1;
        }
        if ($tierIndex >= 6) {
            $tierIndex = 6;
            $divisionIndex = 4;
            $lp = $mmr - ($tierIndex * self::TIER_BASE) - (0 * self::DIVISION_BASE);
        } else {
            $divisionIndex = floor(($mmr - ($tierIndex * self::TIER_BASE)) / self::DIVISION_BASE);
            if ($divisionIndex >= count(self::$A_DIVISION)) {
                $divisionIndex = count(self::$A_DIVISION) - 1;
            }
            $lp = $mmr - ($tierIndex * self::TIER_BASE) - ($divisionIndex * self::DIVISION_BASE);
        }

        return [self::$A_TIERS[$tierIndex], self::$A_DIVISION[$divisionIndex], $lp];
    }

}

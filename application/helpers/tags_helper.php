<?php

if (!function_exists("img_tag_league_by_mmr")) {

    /**
     * @return string
     */
    function img_tag_league_by_mmr($mmr, $height = 30) {
        $l = Suscriptores::calcLeagueByMMR($mmr);

        return '<img data-toggle="tooltip" data-placement="right" title="' . $l[0] . ' ' . $l[1] . ' ' . $l[2] . ' lp" style="height:' . $height . 'px" src="/assets/images/tier-icons/tier_icons/' . strtolower($l[0] . '_' . $l[1]) . '.png">';
    }

}

if (!function_exists("img_tag_league_by_league")) {

    /**
     * @return string
     */
    function img_tag_league_by_league($tier, $division, $lp, $height = 30) {
        if (strtolower($tier) == 'provisional' || $tier == null) {
            return '<img data-toggle="tooltip" data-placement="right" title="unranked" style="height:' . $height . 'px" src="/assets/images/tier-icons/base_icons/provisional.png">';
        }
        return '<img data-toggle="tooltip" data-placement="right" title="' . $tier . ' ' . $division . ' ' . $lp . ' lp" style="height:' . $height . 'px" src="/assets/images/tier-icons/tier_icons/' . strtolower($tier . '_' . $division) . '.png">';
    }

}
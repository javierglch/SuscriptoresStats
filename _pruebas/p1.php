<?php

require 'SSSS.php';


$mmr = 6000; //puntos
echo '<pre>';
$league = SSSS::calcLeagueByMMR($mmr);
$mmr = SSSS::calcMMRByLeague($league[0],$league[1],$league[2]);
echo print_r($league, true);
echo print_r($mmr, true).'<br>';
$league = SSSS::calcLeagueByMMR($mmr);
$mmr = SSSS::calcMMRByLeague($league[0],$league[1],$league[2]);
echo print_r($league, true);
echo print_r($mmr, true).'<br>';
$league = SSSS::calcLeagueByMMR($mmr);
$mmr = SSSS::calcMMRByLeague($league[0],$league[1],$league[2]);
echo print_r($league, true);
echo print_r($mmr, true).'<br>';
$league = SSSS::calcLeagueByMMR($mmr);
$mmr = SSSS::calcMMRByLeague($league[0],$league[1],$league[2]);
echo print_r($league, true);
echo print_r($mmr, true).'<br>';
$league = SSSS::calcLeagueByMMR($mmr);
$mmr = SSSS::calcMMRByLeague($league[0],$league[1],$league[2]);
echo print_r($league, true);
echo print_r($mmr, true);

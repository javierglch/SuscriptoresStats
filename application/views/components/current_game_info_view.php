
<?php
if (false)
    $oCurrentGameInfo = new LolApi\Classes\CurrentGame\CurrentGameInfo();
$lolapi = \LolApi\LolApi::globalApi();

$aSummonersIds = [];
foreach ($oCurrentGameInfo->participants as $participant_index => $participant) {
    $aSummonersIds[$participant_index] = $participant->summonerId;
}

$aSummoners = $lolapi->getSummonerDtoByIds($aSummonersIds);
$aLeaguesEntry = $lolapi->getLeagueDtoListEnry($aSummonersIds);
foreach ($aSummoners as $key => $summonerDto) {
    if (isset($aLeaguesEntry[$summonerDto->id])) {
        $aSummoners[$key]->setLeagueDtoEnry($aLeaguesEntry[$summonerDto->id]);
    } else {
        $aSummoners[$key]->setLeagueDtoEnry(new LolApi\Classes\League\LeagueDto(NULL));
    }
}

foreach ($oCurrentGameInfo->participants as $participant_index => $participant) {
    foreach ($aSummoners as $key => $summonerDto) {
        if ($summonerDto->id == $participant->summonerId) {
            $oCurrentGameInfo->participants[$participant_index]->setSummonerDto($summonerDto);
        }
    }
}
?>

<h4>Codigo para espectar:</h4>
<p><textarea><?= $oCurrentGameInfo->getSpectateCMDCode() ?></textarea></p>
<table border="1">
    <thead>
        <tr>
            <th>GameId</th>
            <th>GameLength</th>
            <th>GameMode</th>
            <th>GameQueueConfigId</th>
            <th>GameStartTime</th>
            <th>GameType</th>
            <th>MapId</th>
            <th>PlataformId</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $oCurrentGameInfo->gameId ?></td>
            <td><?= $oCurrentGameInfo->gameLength ?></td>
            <td><?= $oCurrentGameInfo->gameMode ?></td>
            <td><?= $oCurrentGameInfo->gameQueueConfigId ?></td>
            <td><?= $oCurrentGameInfo->gameStartTime ?></td>
            <td><?= $oCurrentGameInfo->gameType ?></td>
            <td><?= $oCurrentGameInfo->mapId ?></td>
            <td><?= $oCurrentGameInfo->platformId ?></td>
        </tr>
    </tbody>
</table>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Champion</th>
            <th>Current Season</th>
            <th>Wins</th>
            <th>Ranked Wins</th>
            <th>KDA</th>
            <th>Runes</th>
            <th>Masteries</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($oCurrentGameInfo->participants as $key => $participant): ?>
            <tr>
                <td><?= $participant->getProfileIcon_ImageTag() ?><?= $participant->summonerName ?></td>
                <td>
                    <?= $participant->getStaticChampionDto(LolApi\Classes\LolStaticData\ChampionListDto::CHAMPDATA_IMAGE)->getChampionSquare_ImageTag() ?>
                    <?= $participant->getSummonerSpell_1(\LolApi\Classes\LolStaticData\SummonerSpellDto::SPELLDATA_IMAGE)->getIcon_ImageTag() ?>
                    <?= $participant->getSummonerSpell_2(\LolApi\Classes\LolStaticData\SummonerSpellDto::SPELLDATA_IMAGE)->getIcon_ImageTag() ?>
                </td>
                <td>
                    <?php if ($participant->getSummonerDto()->getLeagueDtoListEnry()->tier): ?>
                        <?= $participant->getSummonerDto()->getLeagueDtoListEnry()->entries[0]->getTierDivisionIcon_ImageTag($participant->getSummonerDto()->getLeagueDtoListEnry()->tier) ?>
                    <?php else: ?>
                        <?= $lolapi->ImagesApi->tier_base_icon(null) ?>
                    <?php endif; ?>
                </td>
                <td>
                    <?= $participant->getSummonerDto()->getRankedStatsDto()->getStatsOfChampion(0)->stats->totalSessionsPlayed ?>
                </td>
                <td>
                    <font color="green"><?= $participant->getSummonerDto()->getRankedStatsDto()->getStatsOfChampion($participant->championId)->stats->totalSessionsWon ?></font>&nbsp;/&nbsp;
                    <font color="red"><?= $participant->getSummonerDto()->getRankedStatsDto()->getStatsOfChampion($participant->championId)->stats->totalSessionsLost ?></font>
                </td>
                <td>
                    <?=
                    number_format(($participant->getSummonerDto()->getRankedStatsDto()->getStatsOfChampion($participant->championId)->stats->totalChampionKills +
                            $participant->getSummonerDto()->getRankedStatsDto()->getStatsOfChampion($participant->championId)->stats->totalAssists) /
                            $participant->getSummonerDto()->getRankedStatsDto()->getStatsOfChampion($participant->championId)->stats->totalDeathsPerSession, 2)
                    ?>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
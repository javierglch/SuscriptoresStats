<?php

if (!function_exists("timestamp_to_fullstr")) {

    /**
     * pasa el timestamp a un formato tipo
     * Jueves, 25 de Noviembre de 2016 a las 20:45
     * @param int $timestamp time()
     */
    function timestamp_to_fullstr($timestamp) {

        $intMonthDay = date('j', $timestamp);
        $intWeekDay = intval(date('w', $timestamp));
        $intMonth = intval(date('m', $timestamp));
        $intYear = date('Y', $timestamp);
        $strHour = date('H:i', $timestamp);
        $aDayNames = [
            'Domingo',
            'Lunes',
            'Martes',
            'Miércoles',
            'Jueves',
            'Viernes',
            'Sábado',
        ];

        $aMonthNames = [
            '',
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre'
        ];

        return $aDayNames[$intWeekDay] . ', ' . $intMonthDay . ' de ' . $aMonthNames[$intMonth] . ' de ' . $intYear . ' a las ' . $strHour;
    }

}


if (!function_exists("seconds_to_timeformat")) {

    function seconds_to_timeformat($seconds) {
        $remainSeconds = null;
        $minutes = null;
        $remainMinutes = null;
        $hours = null;
        $remainHours = null;
        $days = null;
        if ($seconds > 0) {
            $minutes = floor($seconds / 60);
            $remainSeconds = $seconds - $minutes * 60;
        }
        if ($minutes > 0) {
            $hours = floor($minutes / 60);
            $remainMinutes = $minutes - $hours * 60;
        }
        if ($hours > 0) {
            $days = floor($hours / 24);
            $remainHours = $hours - $days * 24;
        }

        $strResult = "";
        if ($days)
            $strResult .= $days . ' días ';
        if ($remainHours)
            $strResult .= $remainHours . 'h ';
        if ($remainMinutes)
            $strResult .= $remainMinutes . 'min ';
        if ($remainSeconds)
            $strResult .= $remainSeconds . 's ';

        return $strResult;
    }

}
#!/usr/bin/php
<?php

// Do not verify if the date is valid, only the format

function tr_month($s1)
{
    if (preg_match("#[Jj]anvier#u", $s1)) {
        $s1 = 1;
    } elseif (preg_match("#[Ff][eé]vrier#u", $s1)) {
        $s1 = 2;
    } elseif (preg_match("#[Mm]ars#u", $s1)) {
        $s1 = 3;
    } elseif (preg_match("#[Aa]vril#u", $s1)) {
        $s1 = 4;
    } elseif (preg_match("#[Mm]ai#u", $s1)) {
        $s1 = 5;
    } elseif (preg_match("#[Jj]uin#u", $s1)) {
        $s1 = 6;
    } elseif (preg_match("#[Jj]uillet#u", $s1)) {
        $s1 = 7;
    } elseif (preg_match("#[Aa]o[uû]t#u", $s1)) {
        $s1 = 8;
    } elseif (preg_match("#[Ss]eptembre#u", $s1)) {
        $s1 = 9;
    } elseif (preg_match("#[Oo]ctobre#u", $s1)) {
        $s1 = 10;
    } elseif (preg_match("#[Nn]ovembre#u", $s1)) {
        $s1 = 11;
    } elseif (preg_match("#[Dd][ée]cembre#u", $s1)) {
        $s1 = 12;
    }
    return ($s1);
}

if ($argc == 2) {
    if (preg_match("#^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) [\d]{1,2} ([Jj]anvier|[Ff][eé]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]o[uû]t|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd][ée]cembre) [\d]{4} [\d]{2}:[\d]{2}:[\d]{2}$#u", $argv[1])) {
        $data = explode(" ", $argv[1]);
        $data[4] = explode(":", $data[4]);
        $data[2] = tr_month($data[2]);
        date_default_timezone_set(UTC);
        $ret = mktime($data[4][0], $data[4][1], $data[4][2], $data[2], $data[1], $data[3], 1);
        echo ("$ret\n");
    } else {
        echo ("Wrong Format\n");
    }
}
return (0);
?>
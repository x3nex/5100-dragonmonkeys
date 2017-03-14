<?php

$start = "1 January 2017";
$end = "31 December 2017";
$praznici = [
    '04 January 2017',
    '05 January 2017'
];
for ($i = 0; $i < 1000; $i++) {

    $w = strtotime($start . " +$i week Wednesday");
    $t = strtotime($start . " +$i week Thursday");
    if($w > strtotime($end) || $t > strtotime($end)) break;

    proveri($w);
    proveri($t);

}


function proveri($datum) {
    global $praznici;
    $datum_formatted = date('d F Y', $datum);
    if (!in_array($datum_formatted, $praznici)) echo date("d M Y l", $datum) . "<br>";
}
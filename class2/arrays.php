<?php
//numericki
$automobili = ['mazda', 'honda','toyota', 'torta', ['ford', 'gm']];


//asocijativni
$user = [
    'ime' => 'Aljosa',
    'prezime' => 'Dragovic',
    'godina' => '19',
];

//brojanje elemanata u array-u
$br = count($automobili);
/*
 * funkcije za rad sa arrayima
 * array_push, array_pop, array_shift, array_unshift, array_splice
 * explode, implode, in_array, assort, array_filter, array_map
 */

array_push($automobili, 'mercedes');
array_pop($automobili);
array_unshift($automobili, 'trabant');
array_shift($automobili);

array_splice($automobili, -1, 1, 'travolta');

//sava, aljosa, milos

$imena = "sava - aljosa - milos";
$imena_arr = explode(" - ", $imena);

$automobili_string = implode(", ", $automobili);

$rez = in_array("mazda", $automobili);
asort($automobili);

$fitrirani_automobili = array_filter($automobili, function($item){
    $pocetak = substr($item, 0, 2);
    if($pocetak == "to") return $item;
});

$novi_array = array_map(function($item){
    return $item . " - bla";
}, $automobili);

var_dump($novi_array);

//var_dump($user);


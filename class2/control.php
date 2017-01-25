<?php

//$pesma = "La la la,
//            kako je \ndobro,
//            la la la";
//echo nl2br($pesma);

$name = "Sava";
if ($name != "Sava") {
    if($age == 20) {

    }
}


$month = "Jaguary";

//if( $month == "January") {
//    echo "Winter";
//} else if ($month == "February") {
//    echo "Winter";
//} else if ($month == "March") {
//    echo "Spring";
//} else {
//    echo "this month does not exist";
//}

switch($month) {
    case 'January':
        echo "Winter";
    break;

    case 'February':
        echo "Winter";
        break;


    case 'March':
        echo "Spring";
        break;

    case 'April':
        echo "Spring";
        break;

    default:
        echo "This month does not exist";
        break;
}

/*
    za znati
*/
$ime = "Milos";
if ($ime == "Milos") echo "To je Milos";

function nesto() {
    $nesto  = "foo";
    return ($nesto == "bla");
}


if ($benzin > 0){
    $kretanje = true;
} else {
    $kretanje = false;
}

//ternary - moze cak i bez zagrada
$kretanje  = ($benzin > 0) ? "krece se" : "ne krece se";


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        Napisite ovde jedan <?= htmlspecialchars("<div>") ?>

    </p>
</body>
</html>

<?php

//if ($name == "Sava" && $age > 20 ) {
//
//}

//ternary
//if ($student == true) {
//    $ime = "Sava";
//} else {
//    $ime = "vlada";
//}

//ternary
$ime = ($student = true) ? "Sava" : "Vlada";
//funkcija
function mojaFunkcija($param1, $param2 = ""){
    $result = $param2;
    return $result;
}

function pomnoziDvaBroja($broj1, $broj2=0) {
    return $broj1 * $broj2;
}
$automobili = [];
//anonimna funkcija - callback
array_map(function(){

}, $automobili);

$r = pomnoziDvaBroja(5, 2);

function pomnozi($operacija, ...$brojevi) {

    if($operacija == "sabiranje")
    {
        return array_sum($brojevi);
    } else if($operacija == "mnozenje" ) {
        $rezultat = 1;
        foreach ($brojevi as $broj) {
            $rezultat *= $broj;
        }
        return $rezultat;

    }
}

pomnozi("mnozenje", 2, 4, 4);

$name = "Milos";
$age = 22;

define("NAZIV", "bla");

function nesto() {
    global $name;
    echo NAZIV;
}
nesto();




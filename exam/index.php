<?php

$string = "PHP Is Cool";

$arr = str_split($string);

foreach ($arr as $key => $letter){
    if($key == 0 || $arr[$key - 1] == " "){
        echo "<span style='color: red'>" . $letter . "</span>";
    } else {
        echo $letter;
    }

}


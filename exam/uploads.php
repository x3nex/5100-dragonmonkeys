<?php

$dir = scandir(".");

foreach ($dir as $item)
{
    if(is_file($item)) {
        copy($item, "subdir/" . $item);
    }
}
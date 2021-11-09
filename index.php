<?php

header('Content-type: application/json');

$randFile = rand(1,2);
$namesData = file_get_contents("./names".$randFile.".json");

$parsedJson = json_decode($namesData,true);

$randomKey = rand(1,10000);

print_r(json_encode($parsedJson[$randomKey]));

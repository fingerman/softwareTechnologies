<?php

$n = fgets(STDIN);

for ($i = 0; $i<=($n*2)+1; $i++){
    $data[] = fgets(STDIN);
    $array = array_chunk($data, 3);
}

$result = [];
for ($i = 0; $i<=$n; $i++){
    $result[$i] = pow(($array[0][0] / $array[0][1]), $array[0][2]);
}

$output = $result[0];
$snowballSnow = $array[0][0];
$snowballTime = $array[0][1];
$snowballQuality =  $array[0][2];


printf("%u : %u = %u (%u)",$snowballSnow, $snowballTime, $output, $snowballQuality );




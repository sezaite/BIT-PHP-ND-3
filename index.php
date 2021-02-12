<?php

echo '<br><br><br>--------------------------PIRMA UZDUOTIS------------------------------<br><br><br>';

$vienosZvaigzdutesStringas = '<div style="float: left;">*</div>';
$visasStringas = str_repeat($vienosZvaigzdutesStringas, 400);
echo "<div style='width: 100%; display: inline-block'>$visasStringas</div>";

echo '<br><br><br><br><br>';

for($i = 0; $i < (400 / 50); $i++){
    echo "<div style='width: 100%; display: inline-block'>";
    echo str_repeat($vienosZvaigzdutesStringas, 50);
    echo '</div>';
    echo '<br>';
}

$didesnisUzSimtaPem = 0;
echo '<br><br><br>--------------------------ANTRA UZDUOTIS------------------------------<br><br><br>';

for($i = 0; $i < 50; $i++){
    $skaicius = rand(0, 300);
    if ($skaicius > 275){
        echo "<pre><div style='float: left; color: red'>$skaicius </div></pre>";
    } elseif ($skaicius > 150){
        echo "<pre><div style = 'float: left;'>$skaicius </div></pre>";
        $didesnisUzSimtaPem++;
    }
}

echo "<br><div style='display Didesniu uz 150 buvo: $didesnisUzSimtaPem";

echo '<br><br><br>--------------------------TRECIA UZDUOTIS UZDUOTIS------------------------------<br><br><br>';

// Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.

$ribinisSkaicius = rand(1, rand(3000, 4000));
echo $ribinisSkaicius;
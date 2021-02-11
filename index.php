<!-- Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;  -->
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

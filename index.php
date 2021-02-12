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

echo "<br><br> Didesniu uz 150 buvo: $didesnisUzSimtaPem";

echo '<br><br><br>--------------------------TRECIA UZDUOTIS UZDUOTIS------------------------------<br><br><br>';

$ribinisSkaicius = rand(1, rand(3000, 4000));
$arejus = [];

for($i = 1; $i <= $ribinisSkaicius; $i++){
    if($i % 77 == 0){
        array_push($arejus, $i);
    }
}

echo implode(', ', $arejus);

echo '<br><br><br>--------------------------KETVIRTA UZDUOTIS------------------------------<br><br><br>';

// Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
echo "<div style = 'width: 300px; height: 300px'>";
for($i = 0; $i < 10; $i++){
    echo "<div style='width: 100%; display: inline-block;'>";
    for($j =0; $j < 10; $j++){
        echo "<div style ='padding-right: 10px; float: left;'>*</div>";
    }
    echo '</div>';
}
echo '</div>';

echo '<br><br><br>--------------------------PENKTA UZDUOTIS------------------------------<br><br><br>';
// Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.

echo "<div style = 'width: 500px; height: 500px'>";
$krastinesIlgis = 20;
for($i = 1; $i < $krastinesIlgis; $i++){
    echo "<div style='width: 100%; display: inline-block;'>";
    for($j =1; $j < $krastinesIlgis; $j++){
        if($j == $i || $j == $krastinesIlgis - $i){
            echo "<div style ='padding-right: 10px; float: left; color: red;'>*</div>"; 
        } else {
        echo "<div style ='padding-right: 10px; float: left;'>*</div>";
        }
    }
    echo '</div>';
}
echo '</div>';

echo '<br><br><br>--------------------------SESTA UZDUOTIS------------------------------<br><br><br>';

// Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
// Iškritus herbui;
// Tris kartus iškritus herbui;
// Tris kartus iš eilės iškritus herbui;
// herbas skaicius herbas skaicius (norejau tris kartus kartoti bet labai ilgai spausdina);

echo '<br><br> B dalis <br>';
$tekstukas = '';
do { 
    $moneta = rand(0, 1) > 0 ? 'skaicius' : 'herbas';
    echo $moneta . '<br>';
    $tekstukas .= $moneta;

} while (!preg_match_all('/(herbas){3}/', $tekstukas));  //tris kartus is eiles iskritus herbui


echo '<br><br> D dalis <br>';
$tekstukas = '';
do { 
    $moneta = rand(0, 1) > 0 ? 'skaicius' : 'herbas';
    echo $moneta . '<br>';
    $tekstukas .= $moneta;

} while (!preg_match('/(skaiciusherbas){2}|(herbasskaicius){2}/', $tekstukas));

echo '<br><br> C dalis <br>';
$tekstukas = '';
$herbuSkaicius = 0;

do { 
    $moneta = rand(0, 1) > 0 ? 'skaicius' : 'herbas';
    echo $moneta . '<br>';
   if($moneta === 'herbas'){
       $herbuSkaicius++;
   }

} while ( $herbuSkaicius < 3); // o jei nori vieno tai perrasai cia i viena :)


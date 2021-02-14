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
echo '<br><br><br>---------------ANTRA UZDUOTIS----------------<br><br><br>';

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
$krastinesIlgis = 10;
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

echo '<br><br><br>--------------------------SEPTINTA UZDUOTIS------------------------------<br><br><br>';

$kazysCount = 0;
$petrasCount = 0;
do {
    $kazioTaskai = rand(5, 25);
    $kazysCount+=$kazioTaskai;
    $petroTaskai = rand(10, 20);
    $petrasCount+= $petroTaskai;
    echo $kazioTaskai > $petroTaskai ? '<br> partija laimejo Kazys <br>' : '<br> partija laimejo Petras <br>';
    echo $kazysCount > $petrasCount ? "pirmauja Kazys, turintis $kazysCount taskus <br>" : "pirmauja Petras, turintis $petrasCount taskus <br>";

} while (($kazysCount < 222) && ($petrasCount < 222));
echo $kazysCount > $petrasCount ? "<br> Laimejo Kazys surinkes $kazysCount taskus" : "<br> Laimejo Petras surinkes $petrasCount taskus";

echo '<br><br><br>--------------------------ASTUNTA UZDUOTIS------------------------------<br><br><br>';


echo "<div style = 'width: 300px; height: 300px'>";
 for ($eilute = 0; $eilute < 21; $eilute++){
    echo "<div style='width: 100%; display: inline-block; text-align: center'>";
    if ($eilute < 11) {
        for($zvaigzdute = 0; $zvaigzdute < $eilute; $zvaigzdute++){
            $randomColor = (rand(0, 256) . ', '. rand(0, 256) . ', '. rand(0, 256));
            echo "<div style ='padding-right: 10px; display: inline-block; color: rgb( $randomColor);'>*</div>";
        }
    } else {
        for ($zvaigzdute = 20 - $eilute; $zvaigzdute > 0; $zvaigzdute--){
            $randomColor = (rand(0, 256) . ', '. rand(0, 256) . ', '. rand(0, 256));
            echo "<div style ='padding-right: 10px; display: inline-block; color: rgb( $randomColor);'>*</div>";
        }
    } echo '</div>';
 }
echo '</div>';


echo '<br><br><br>--------------------------DEVINTA UZDUOTIS------------------------------<br><br><br>';

$pirmoPradzia = microtime(true);
for($i = 0; $i < 1000000; $i++){
    $c = '10 bezdzioniu \r\n suvalge 20 bananu.';
}
$pirmoPabaiga = microtime(true);
$pirmasUztruko = $pirmoPabaiga - $pirmoPradzia;

$antroPradzia = microtime(true);
for($i = 0; $i < 1000000; $i++){
    $c = "10 bezdzioniu \r\n suvalge 20 bananu.";
}
$antroPabaiga = microtime(true);
$antrasUztruko = $antroPabaiga - $antroPradzia;

echo $antrasUztruko> $pirmasUztruko ? 'dvigubos kabutes spasdinasi ilgiau' : 'viengubos kabutes spausdinasi ilgiau';

echo '<br><br><br>--------------------------DESIMTA UZDUOTIS------------------------------<br><br><br>';

//KALIMAS MAZAIS SMUGIAIS
$viniesIlgis = 8.5;
$ikalta = 0;
for ($i = 0; $i < 5; $i++){
    $ikalta += rand(0.5, 2);
    if ($ikalta > $viniesIlgis){
        echo 'ikaliau su ' . ($i + 1) . ' mazais smugiais. <br>';
        break;
    }
}
echo $ikalta < $viniesIlgis ? 'penkiu mazu smugiu nepakako<br>' : 'sukaliau vini pilnai<br>';

//KALIMAS DIDELIAIS SMUGIAIS
$viniesIlgis = 8.5;
$ikalta = 0;
for ($i = 0; $i < 5; $i++){
    if (rand(0, 1) === 1){
    $ikalta += rand(2, 3);
    } 
    if ($ikalta > $viniesIlgis){
        echo 'ikaliau su ' . ($i + 1) . ' dideliais smugiais. <br>';
        break;
    }
}
echo $ikalta < $viniesIlgis ? 'penkiu dideliu smugiu nepakako<br>' : 'sukaliau vini pilnai<br>';

echo '<br><br><br>----------------VIENUOLIKTA UZDUOTIS--------------<br><br><br>';

$skaiciuMasyvas = [];

while (count($skaiciuMasyvas) < 50){
    $skaicius = rand(1, 200);
    if (!in_array($skaicius, $skaiciuMasyvas)){
        array_push($skaiciuMasyvas, $skaicius);
    }
}

$stringas = implode(' ', $skaiciuMasyvas);
echo "<br><br>$stringas<br><br>";
$pirminiuSkaiciuMasyvas = [];
for ($i = 0; $i < 50; $i++){
    $daliniuCount = 0;
    for($j = 1; $j <= $skaiciuMasyvas[$i]; $j++){
        if ($skaiciuMasyvas[$i] % $j === 0){
            $daliniuCount++;
        }
    }
    if($daliniuCount < 3){
        $pirminis = $skaiciuMasyvas[$i];
        array_push($pirminiuSkaiciuMasyvas, $pirminis);
    }
}
sort($pirminiuSkaiciuMasyvas);
$pirminiuSkStringas = implode(' ', $pirminiuSkaiciuMasyvas);
echo "<br><br>$pirminiuSkStringas<br><br>";
 
    ?>
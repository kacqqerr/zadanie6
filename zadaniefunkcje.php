<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //1   
    $a = 5;
    $b = 3;
function suma($a,$b) {
echo $a + $b;
}
suma($a, $b);
echo "<br>";
echo "<br>";
//2
$a = 10;
$b = 2;
function podstawy($a,$b){
echo "Roznica: " . ($a-$b) . "<br>";
echo "Iloczyn: " . ($a*$b) . "<br>";
echo "Iloraz: " . ($a / $b) . "<br>";
}
podstawy($a,$b);

echo "<br>";
echo "<br>";
//3
$a = 10;
$b = 2;
$dzialanie = "suma";

function kalkulator($a,$b,$dzialanie) {
if($dzialanie == "suma") $wynik = $a + $b;
elseif($dzialanie == "roznica") $wynik = $a - $b;
elseif($dzialanie == "iloczyn") $wynik = $a * $b;
elseif($dzialanie == "iloraz") $wynik = $a / $b;

echo "<div id='wynik'>$wynik</div>";
}
kalkulator($a,$b,$dzialanie);
echo "<br>";
echo "<br>";
//4
$a = 4;
$b = 3;
$c = 5;

function maks($a,$b,$c){
echo max($a,$b,$c);
}
maks($a,$b,$c);
echo "<br>";
echo "<br>";

//5
$wzrost = 175;

function wzrost($wzrost) {
if ($wzrost < 150) echo "Niski";
elseif($wzrost > 180) echo "Wysoki";
else echo "Sredni"; 
}
wzrost($wzrost);

echo "<br>";
echo "<br>";
//6

$wzrost = 180;
$waga = 70;

function bmi($wzrost,$waga){
$wynik = $waga / (($wzrost / 100) * ($wzrost / 100));
if ($wynik < 18.5) $komentarz = "za malo";
elseif($wynik > 25) $komentarz = "za duzo";
else $komentarz = 'ok';
echo "<div = 'wynik'>$wynik - $komentarz</div>";
}
bmi($wzrost, $waga);
echo "<br>";
echo "<br>";

//7

$data1 = '2000-01-01';
$data2 = '2005-05-10';

function starszy($data1,$data2){
if(strtotime($data1)< strtotime($data2)) echo "Pierwsza osoba jest starsza";
elseif(strtotime($data1)> strtotime($data2)) echo "Druga osoba jest starsza";
else echo "Osoby sa w tym samym wieku";
}
starszy($data1,$data2);
echo "<br>";
echo "<br>";

//8
$rok = 2014;
function przestepny($rok){
if(($rok % 4 == 0 && $rok % 100 != 0) || $rok % 400 == 0) echo "Rok przestepny";
else echo "Rok nieprzestepny";
}
przestepny($rok);
echo "<br>";
echo "<br>";
//9
$haslo = "Haslo123!";

function sila($haslo){
    if(strlen($haslo) <= 4 || !preg_match('/[0-9]/', $haslo) || !preg_match('/[A-Z]/', $haslo) || !preg_match('/[a-z]/', $haslo) || !preg_match('/[^a-zA-Z0-9]/', $haslo)) echo "Hasło słabe";
    elseif(strlen($haslo) < 8) echo "Hasło średnie";
    else echo "Hasło mocne";
}

sila($haslo);
echo "<br>";
echo "<br>";
//10
$a = 5;
$b = 4;
$c = 3;
function trojkat($a,$b,$c) {
if ($a + $b > $c && $a + $c > $b && $b + $c > $a) echo "Mozna utworzyc trojkat";
else echo "Nie mozna stworzyc trojkatu";
}
trojkat($a,$b,$c);
    ?>
</body>
</html>
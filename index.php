<?php

// Exo 1
$chaine = "Ajourd'hui il fait -1000 degrés"."<br>";
$chaine = addslashes($chaine)."<br>";
echo addslashes($chaine)."<br>";

// Exo 2
$exo2 = "toss a coin to your witcher"."<br>";
echo strtoupper($exo2)."<br>";
echo ucfirst($exo2)."<br>";
echo ucwords($exo2)."<br>";

// Exo 2.2
$exo22 = "TOSS A COIN TO YOUR WITCHER"."<br>";
echo strtolower($exo22)."<br>";
echo lcfirst($exo22)."<br>";

// Exo 3
$exo3 = "Il me faut une chaine de carcteres de 25"."<br>";
echo strlen($exo3)."<br>";

// Exo 4

$exo4 = "Hakuna Matata, Mais quelle phrase magnifique"."<br>";
$mots = explode(" ", $exo4);

foreach ($mots as $mot){
    echo $mot."<br>";
}

// Exo 5

$ex5 = ['Hakuna', 'Matata', '!'];
$exo5 = implode(" ", $ex5);

echo $exo5."<br>";

// Exo 6

$exo6 = "Bonjour je suis Droskall !";
echo strrev($exo6)."<br>";
echo str_shuffle($exo6)."<br>";

// Exo 7

$exo7 = "Hello, nous apprenons PHP";
echo $exo7."<br>";
echo strip_tags($exo7)."<br>";

// Exo 8

$exo8 = "Salut à tous !";
echo str_pad($exo8, 500, "|", STR_PAD_LEFT);

// Exo 9

$exo9 = "Que voi-je ?";
$table = str_split($exo9);
foreach ($table as $item){
    echo $item."<br>";
}

// Exo 10

$exo10 = "Hello Monde !";
$search10 = ["Monde"];
$exo10 = str_replace($search10, 'World', $exo10);
echo $exo10."<br>";

// Exo 11

$exo11 = "Ceci est un test !";
$search11 = "test";

$position11 = stripos($exo11, $search11);
if ($position11 !== false){
    echo "Le mot test a ete trouver";
}

// Exo 12

$exo12 = "Hey comment ça va ?";
$search12 = "Hey";

$position12 = strpos($exo12, $search12);
if ($position12 === 0){
    echo "La chaine commence bien par '$search12'"."<br>";
}

// Exo 13
$exo13 = "Hello World !";
$search13 = "!";
$position13 = strpos($exo13, $search13);
if ($position13 === strlen($exo13) - strlen($search13)){
    echo "La chaine fini bien par '$search13'"."<br>";
}


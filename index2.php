<?php

//age
$age =22;

if ($age >= 18) {
    echo "Vous êtes majeur !";
}

else {
    echo "Vous êtes mineur";
}

//variable isEasy
$isEasy = true;


if ($isEasy == true) {
    echo "C'est facile";
}

elseif ($isEasy == false) {
    echo "C'est difficile";
}

//2eme façon de l'écrire
$isEasy= true;

if ($isEasy) {
    echo "C'est facile";
}

else {
    echo "C'est difficile";
}

//Exercice 3
$age=50;
$gender= "Homme";

if ($age >= 18 && $gender == "Homme") {

    echo "Vous êtes un homme et vous êtes majeur";
}

elseif ($age < 18 && $gender == "Homme") {

    echo "Vous êtes un homme et vous êtes mineur";

}

if ($age >= 18 && $gender == "Femme") {

    echo "Vous êtes une femme et vous êtes majeur";
}

elseif ($age < 18 && $gender == "Femme") {

    echo "Vous êtes une femme et vous êtes mineur";

}

//exercice4
$magnitude = 8;


switch ($magnitude) { 
    case 1: 

        echo "Micro-séisme impossible à ressentir";

    break;

    case 2: 

        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";

    break;

    case 3:  

        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";

    break;

    case 4: 

        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";

    break;

    case 5:

        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";

    break;

    case 6:

        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;

    case 7:

        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";

    break;

    case 8:

        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";

    break;

    case 9:

        echo "Séisme capable de tout détruire sur une très vaste zone.";

    break;

}

//exercice5
$gender = "Homme";

if ($gender == "Homme")
{
    echo "C'est un développeur !";
}
else
{
    echo "C'est une développeuse";
}

//exercice6
$age=18;

if($age>=18) {
    echo "Tu es majeur";
}
else {
    echo "Tu n'es pas majeur";
}

//exercice7
$isOk = "false";

if ($isOk == false) {
    echo "C'est pas bon !!!";

}
else {
    echo "C'est ok!!";
}

//exercice 8
$isOk=true;

if($isOk = true){
    echo "C'est ok!!";
}
else {
    "C'est pas bon !!";
}
?>
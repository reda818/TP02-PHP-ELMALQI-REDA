<?php
$numroMois =3;
/*
$numroMois = 1;
$numroMois = 12;
$numroMois = 15;
*/
switch ($numroMois){
    case 1: echo 'Janvier';break;
    case 2: echo 'February';break;
    case 3: echo 'March' ; break;
    case 4: echo 'April' ; break;
    case 5: echo 'May'; break;
    case 6: echo 'June'; break;
    case 7: echo 'July'; break;
    case 8: echo 'August'; break;
    case 9: echo 'September'; break;
    case 10: echo 'October'; break;
    case 11: echo 'November'; break;
    case 12: echo 'December'; break;
    default: echo "Numéro de mois invalide" ; break;
}
echo "<br>";


$numroMois = (int) date("m");

switch ($numroMois){
    case 1: echo 'Janvier';break;
    case 2: echo 'February';break;
    case 3: echo 'March' ; break;
    case 4: echo 'April' ; break;
    case 5: echo 'May'; break;
    case 6: echo 'June'; break;
    case 7: echo 'July'; break;
    case 8: echo 'August'; break;
    case 9: echo 'September'; break;
    case 10: echo 'October'; break;
    case 11: echo 'November'; break;
    case 12: echo 'December'; break;
    default: echo "Numéro de mois invalide" ; break;
}

?>
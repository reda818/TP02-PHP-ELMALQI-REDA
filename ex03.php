<?php 
define("TAUX_TVA",20);
define("DEVISE","MAD");
define("HT",60);
define("quantité",3);

$Total_HT=HT*quantité;

$TVA=$Total_HT * (TAUX_TVA/100);

$Total_TTC = $Total_HT + $TVA;

$Total_TTC += 15;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP02-EX03</title>
</head>
<body>
    <?php 
    echo "Total HT: ".$Total_HT." MAD" . "<br>";
    echo "TVA: ".$TVA." MAD" . "<br>";
    echo "Total TTC: ".$Total_TTC." MAD" . "<br>";

    echo defined("TAUX_TVA") ; ?>
</body>
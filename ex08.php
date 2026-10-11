<?php
$i = 0;
while ($i < 20) {
    $i+= 2;
    if ($i == 10) echo "<b>".$i."</b><br>";
        
    else echo $i."<br>";
}
?>


<?php 
$comp = 5;
$nbboucle = 0;
while ( $comp <5){
    $comp++;
    $nbboucle++;
}
echo "nombre de boucle on while est: ".$nbboucle."<br>";

$comp = 5;
$nbboucle = 0;
do {
    $comp++;
    $nbboucle++;
} while ($comp <5);
echo "nombre de boucle on do-while est: ".$nbboucle."<br>";
?>


<?php 
$entier = 0;
while ($entier < 20) {
    $entier++;
    if ($entier % 3== 0) continue;
    elseif ($entier == 16) break;
    else echo $entier."<br>";
}


?>
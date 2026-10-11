<?php
$nomber = 7;
for ($i = 1; $i <= 10; $i++){
    echo $i." * ".$nomber." = ".$i*$nomber."<br>";
}
for ($i = 1; $i <= 6; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}

?>

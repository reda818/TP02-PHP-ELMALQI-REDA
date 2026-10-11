<?php

$moyenne =-1;


//$moyenne =9;
$moyenne =10;
//$moyenne =14;
//$moyenne =16;
//$moyenne =21;

if ($moyenne>=0 && $moyenne<10){
   echo 'Non validé';
}
elseif($moyenne>=10 && $moyenne<12){
 echo 'Passable';
}
elseif($moyenne>=12 && $moyenne<14){
 echo 'Assez Bien';
}
elseif($moyenne>=14 && $moyenne<16){
 echo 'Bien';
}
elseif($moyenne>=16 && $moyenne<20){
 echo 'Trés bien';
}
else 
     echo 'Note invalide';
?>

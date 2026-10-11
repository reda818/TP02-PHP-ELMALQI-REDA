<?php

$v1 = 42;
$v2 = "42";
$v3 = 15.8;
$v4 = true;
$v5 = false;
$v6 = NULL;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP02-EX04</title>
</head>
<body>
<pre>
<?php 
    var_dump($v1); 
    var_dump($v2);
    var_dump($v3); 
    var_dump($v4); 
    var_dump($v5); 
    var_dump($v6); 
?>

<?php 
$v2 = (int)$v2;
$v3 = (int)$v3;
$v1 = (string)$v1;
var_dump($v1);
var_dump($v2);
var_dump($v3);
?>

<?php 
echo "V4: ".$v4."  V5: ".$v5."<br>";
var_dump($v4);
var_dump($v5);
?>
<?php 
$v7 = (bool)0;
$v8 = (bool)"0";
$v9 = (bool)"PHP";
$v10 = (bool)[];
?>
</pre>
</body>
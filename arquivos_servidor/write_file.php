<?php 

$myfile = fopen("ark/mestre.txt", "a+") or die("Unable to open file!");
$txt = "Você acorda e percebe que não está em casa.\n".PHP_EOL;
fwrite($myfile, $txt);
$txt = "Está completamente escuro, ouve passos vindo em sua direção.\n".PHP_EOL;
fwrite($myfile, $txt);
fclose($myfile);

echo readfile("ark/mestre.txt");
?>
<?php 

$myfile = fopen("ark/mestre.txt", "a+") or die("Unable to open file!");
$txt = $_GET["name"].PHP_EOL;
fwrite($myfile, $txt);
fclose($myfile);

echo readfile("ark/mestre.txt");
?>
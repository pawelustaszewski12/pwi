<?php
$tekst=$_POST['tekst'];
// otwarcie pliku do zapisu
$fp = fopen("plik.txt", "w");
// zapisanie danych
fputs($fp, $tekst);
// zamknięcie pliku
fclose($fp);
?>

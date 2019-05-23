
<pre>
<?php

$fo = fopen("txt2.txt", "r");
$stareDane = fread($fo, filesize("txt2.txt"));
echo $stareDane;
fclose($fp);
?>
<pre>

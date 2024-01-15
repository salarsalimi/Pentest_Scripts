<?php
$myFile = "testFile.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $_POST['content']."\n";
fwrite($fh, $stringData);
fclose($fh);
?>

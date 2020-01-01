<?php
print"<center>welcome</center></h3>";
$fname="counter.txt";
$fp=fopen($fname,"r");
$hits=fscanf($fp,"%d");
fclose($fp);

$hits[0]++;
$fp=fopen($fname,"w");
fprintf($fp,"%d",$hits[0]);
fclose($fp);
print"total number of views: ".$hits[0];
?>
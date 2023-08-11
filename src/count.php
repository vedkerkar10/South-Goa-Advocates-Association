<div class="included-content">
<?php

$count_page = ("hitcount.txt");
$hits = file($count_page);
$hits[0] ++;
 
$fp = fopen($count_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
echo ("No. of visitors: ");
echo $hits[0];
 
?>
</div>
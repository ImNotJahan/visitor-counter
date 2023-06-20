<?php
$file = fopen("visitorcount.txt", "r");
$visitorCount = fgets($file) + 1;
fclose($file);

$file = fopen("visitorcount.txt", "w");
fwrite($file, $visitorCount);
fclose($file);

$visitorCount = (string)$visitorCount;

$lastDigit = $visitorCount[strlen($visitorCount) - 1];
$ndLastDigit = $visitorCount[strlen($visitorCount) - 2];

if($ndLastDigit == 1) $visitorCount .= "th";
else if($lastDigit == 1) $visitorCount .= "st";
else if($lastDigit == 2) $visitorCount .= "nd";
else if($lastDigit == 3) $visitorCount .= "rd";
else $visitorCount .= "th";
?>

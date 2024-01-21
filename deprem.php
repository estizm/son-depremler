#!/opt/homebrew/bin/php
<?php
$url = "http://www.koeri.boun.edu.tr/scripts/lst2.asp";
$html = file_get_contents($url);

$start = strpos($html, '<pre>');
$end = strpos($html, '</pre>', $start);
$data = substr($html, $start, $end - $start);

echo $data;
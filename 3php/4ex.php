<?php
$color = array ('A' => 'Blau', 'B' => 'Verd', 'c' => 'Vermell');
$mi=[];
$ma=[];
foreach ($color as $key => $value) {
    array_push($mi,strtoupper($color[$key]));
    array_push($ma,strtolower($color[$key]));
}
echo $mi;
echo $ma;
?>
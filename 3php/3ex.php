<?php
$TF = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$TFU = array_unique($TF);
sort($TFU);
$ultims = count($TFU) -6;


$sum = array_sum($TF);
echo "La media = ",$sum/count($TF);

echo "<br>5 més fredes: ";
foreach ($TFU as $key => $value) {
    if ($key < 5) {
        echo "$value, ";
    }
}

echo "<br>5 més càlides: ";
foreach ($TFU as $key => $value) {
    if ($key > $ultims) {
        echo "$value, ";
    }
}
?>
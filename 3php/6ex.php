<?php
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);

$keysAndValues=[];
foreach ($keys as $keys1 => $value) {
    $keysAndValues[$value] = $values[$keys1."value"];
}
print_r($keysAndValues);
?>
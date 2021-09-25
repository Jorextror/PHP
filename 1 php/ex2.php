<style>
table, td, th {
  border:1px solid;
}
</style>

<table style="width:100%">
<?php

$i = 0;
$j = 0;

echo "<tr>";
echo "<th>","do while","</th>";
do {
    $i++;
    if ($i%2==0) {
        echo "<td>",$i,"<td>";
    }
}while ($i < 100);
echo "</tr>";

echo "<tr>";
echo "<th>","while","</th>";
while ($j < 100) {
    $j++;
    if ($j%2==0) {
        echo "<td>",$j,"<td>";        
    }
}
$i = 0;
echo "</tr>";

echo "<tr>";
echo "<th>","for","</th>";
for ($i=1; $i < 101; $i++) { 
    if ($i%2==0) {
        echo "<td>",$i,"<td>";       
    }
}
echo "</tr>";

?>
</table>
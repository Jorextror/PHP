<?php 
$blanco="<td><div id='white' style='width:30px; height: 30px; background-color: white;'></div></td>";
$negro="<td><div id='negre' style='width:30px; height: 30px; background-color: black;'></div></td>";

echo "<table border = 1>";
for ($a=1; $a <=4 ; $a++) {
    echo "<tr>";
    for ($i=1; $i <=4 ; $i++) { 
        echo $blanco;
        echo $negro;
    }
    echo "</tr>";
    for ($i=1; $i <=4 ; $i++) { 
        echo $negro;
        echo $blanco;
    }
}
echo "</table>";
?>
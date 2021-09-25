<style>
table, td, th {
  border:1px solid;
}
</style>

<table>
<?php

for ($i=1; $i < 11; $i++) { 
    echo "<tr>";
    echo "<th> Taula de multiplicar $i <th>";
    for ($j=0; $j< 11; $j++) { 
        echo "<td>",$j,"x",$i,"=",$i*$j,"</td>";
    }
    echo "</tr>";
}

?>
</table>
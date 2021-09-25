<?php

for ($i=0; $i < 11; $i++) { 
    echo "Taula de multiplicar del $i <br>";
    for ($j=0; $j< 11; $j++) { 
        echo "<tr>","<td>",$j,"x",$i,"=",$i*$j,"</td>","</tr>", "<tr>","<br>";
    }
}

?>
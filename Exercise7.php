<?php
	echo "<table border=\"1\">";
		for ($i=1; $i<=7; $i++) {
			echo "<tr>\n"; 
		for ($a=1; $a<=7; $a++) { 
				
			$x=$a * $i;
				echo "<td>$x</td>\n";
			}	
			echo "</tr>";
		}
		echo "</table>";

  ?>
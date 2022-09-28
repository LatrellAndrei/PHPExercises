
	<h1>Larger Cities</h1>
	<?php
    #i use w3school compiler for this
	
    $cities = array(
		"Tokyo",
		"Mexico City",
		"New York City",
		"Mumbai",
		"Seoul",
		"Shanghai",
		"Lagos",
		"Buenos Aires",
		"Cairo",
		"London"
	);

	sort($cities);
	echo "\n<ul>\n" ;
	foreach($cities as $c){
		echo "<li>$c</li>\n";
	}
	echo "</ul>" ;

	array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

	sort($cities);
	echo "\n<ul>\n" ;
	foreach($cities as $c){
		echo "<li>$c</li>\n";
	}
	echo "</ul>" ;

	?>


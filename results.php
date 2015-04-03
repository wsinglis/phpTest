<?php
ini_set("auto_detect_line_endings", true);
$row = 1;
$colors = array();
$colorTally = array();
$foods = array();
$foodTally = array();
if (($dataSource = fopen("csvdata.csv", "r")) !== FALSE) {
    while (($csvArray = fgetcsv($dataSource, 0, ",")) !== FALSE) {
        $num = count($csvArray);
        $row++;
		array_push($colors,$csvArray[1]);
		array_push($foods,$csvArray[2]);
    }
    fclose($dataSource);

	$colorResults = array_count_values($colors);
	ksort($colorResults);
	echo "<h1>Color Tally</h1>";
	foreach($colorResults as $key => $val) {
		echo "$key got $val votes<br />";
	}
	$foodResults = array_count_values($foods);
	ksort($foodResults);
	echo "<h1>Food Tally</h1>";
	foreach($foodResults as $key => $val) {
		echo "$key got $val votes<br />";
	}
}

?>

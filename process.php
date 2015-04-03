<?php
	$submitted = (isset($_POST['SUBMITTED']) ? $_POST['SUBMITTED'] : false);
	if(!$submitted) {
		header("Location: index.html");
	} else {
		$nameField=$_POST['nameField'];
		$colorField=$_POST['colorField'];
		$foodField=$_POST['foodField'];
		$thisResult = array($nameField,$colorField,$foodField);
		$dataSource = fopen("csvdata.csv", "a");
		fputcsv($dataSource,$thisResult);
		fclose($dataSource);
		header("Location: results.php");
	}
?>
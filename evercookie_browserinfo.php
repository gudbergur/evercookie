<?php

// !!!This is just a very simple demo, this is unsafe and the data would best be stored in some kind of a database!!!

$guid = $_GET["guid"];
$name = $_GET["name"];
$value = $_GET["value"];

$filename = $guid.'-'.$name.'.txt';

if (!$_COOKIE["evercookie_browserinfo"])
{
	if (file_exists($filename)) {
		$handle = fopen($filename, "r");
		echo fread($handle, filesize($filename));
		fclose($handle);
	}
} else {

	$handle = fopen($filename, 'w');
	fwrite($handle, $_COOKIE["evercookie_browserinfo"]);
	fclose($handle);

}

?>
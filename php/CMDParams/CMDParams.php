#!/usr/bin/php
<?php
echo "Params count: $argc\n";
echo "Script path and name: $argv[0]\n";
if ($argc > 1) {
	for($i = 1; $i < $argc; $i++) {
		echo "Param $i = $argv[$i]\n";
	}
}
?>

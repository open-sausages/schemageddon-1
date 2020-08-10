<?php

for ($i = 1; $i < 50; $i++) {
	var_dump($i);
	$path = '/Users/acarlino/Sites/schemageddon/app/src/Fake';
	$cls = 'DataObject' . ($i+1);
	$dest = $path . '/' . $cls . '.php';
	copy($path . '/DataObject1.php', $dest);
	$contents = file_get_contents($dest);
	$newContents = str_replace('DataObject1', $cls, $contents);
	file_put_contents($dest, $newContents);
	echo "$dest\n";
}
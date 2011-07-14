<?php
/*
+-------------------------------------------------------------------+
| ./config/main.inc.php                                             |
|                                                                   |
| This file is part of the Bloggy Blogging Suite                    |
| Copyright (C) 2011, Studio 182 Dev. - Worldwide Division          |
|                                                                   |
| Licensed under the GNU GPL                                        |
|                                                                   |
| PURPOSE:                                                          |
|   Main Functions Class                                            |
|                                                                   |
+----------------------- Studio 182 Team ---------------------------+
| Hunter Dolan <hunter@studio182.net>                               |
| Pablo Merino <pablo@studio182.net>                                |
+-------------------------------------------------------------------+
*/

############################
# Todo: Convert to Class  #
##########################

function remove_item_by_value($array, $val = '', $preserve_keys = true)
{
	if (empty($array) || !is_array($array)) return false;
	if (!in_array($val, $array)) return $array;

	foreach ($array as $key => $value) {
		if ($value == $val) unset($array[$key]);
	}

	return ($preserve_keys === true) ? $array : array_values($array);
}


function getDirectoryList($directory)
{

	// create an array to hold directory list
	$results = array();

	// create a handler for the directory
	$handler = opendir($directory);

	// open directory and walk through the filenames
	while ($file = readdir($handler)) {

		// if file isn't this directory or its parent, add it to the results
		if ($file != "." && $file != "..") {
			$results[] = $file;
		}
		
	}

	// tidy up: close the handler
	closedir($handler);

	if (in_array(".DS_Store", $results)) {
		$results = remove_item_by_value($results, ".DS_Store");
	}
	if (in_array("index.php", $results)) {
		$results = remove_item_by_value($results, "index.php");
	}
	/*if (in_array("Thefile", $results)) {
  		$results = remove_item_by_value($results, "Thefile");
 	}*/ //for blacklisting a file
 	if (in_array("POSTTEMPLATE", $results)) {
  		$results = remove_item_by_value($results, "POSTTEMPLATE");
 	}
	// done!
	return $results;


}


function parse($value, $string=false) {
  	if($string) {
  	$lines = explode("\r\n", $value);
	} else {
	$lines = file($value);
	}
  	  	$content = array();
  	foreach ($lines as $line) {
    	$posColon = strpos($line, ":");
   		$tag = strtolower(substr($line, 0, $posColon));
    	$body = substr($line, $posColon+1);

    	$content[$tag] = trim($body);
  	}
  	return array_filter($content);
}
?>
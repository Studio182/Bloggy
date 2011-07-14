<?php
/*
+-------------------------------------------------------------------+
| ./index.php														|
|                                                                   |
| This file is part of the Bloggy Blogging Suite                    |
| Copyright (C) 2011, Studio 182 Dev. - Worldwide Division          |
|                                                                   |
| Licensed under the GNU GPL                                        |
|                                                                   |
| PURPOSE:                                                          |
|   Index File			                                            |
|                                                                   |
+----------------------- Studio 182 Team ---------------------------+
| Hunter Dolan <hunter@studio182.net>                               |
| Pablo Merino <pablo@studio182.net>                                |
+-------------------------------------------------------------------+
*/



//Posts

$content = "";

$dirlistnormal = getDirectoryList('./posts');
$dirlist = array_reverse($dirlistnormal);
foreach ($dirlist as $file) {
	$tagValue = array();
	$tagValue = parse('./posts/'.$file);
	$content .= "<div id=\"box\">\n";
	$content .="<h2>".$tagValue["title"]."</h2>\n";
	$content .= "<h1>".$tagValue["date"]."</h1>\n";
	$content .= "<h3>Posted by ".$tagValue["author"]."</h3>\n";
	$content .= "<p>".$tagValue["body"]."</p>\n";
	$content .= "</div>";
	if($bloggy_config['skin'] == "iphone") {
		$content .= "<hr>\n";
	}
}

include('./program/lib/constants.php');

?>

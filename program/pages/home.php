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

$dirlist = getDirectoryList('./posts');

natsort($dirlist);
$dirlist = array_reverse($dirlist);

foreach ($dirlist as $file) {

	$file_no_ext = str_replace('.post','',$file);

	$tagValue = array();
	$tagValue = parse('./posts/'.$file);
	$content .= "<div id=\"box\">\n";
	$content .="<h2><a href=\"?/viewpost/".$file_no_ext."/\">".$tagValue["title"]."</a></h2>\n";
	$content .= "<h1>".$tagValue["date"]."</h1>\n";
	$content .= "<h3>Posted by ".$tagValue["author"]."</h3>\n";
	if(strlen($tagValue["body"]) >= 250) {
		$content .= "<p>".substr($tagValue["body"], 0, 250)."... <a href=\"?/viewpost/".$file_no_ext."/\">Read more</a></p>\n";
	} else {
		$content .= "<p>".$tagValue["body"]."</p>\n";

	}
	if($bloggy_config['skin'] == "iphone") {
		if('./posts/'.$file == './posts/post1.post'){
			$content .= "</div>";
		} else {
			$content .= "<hr>\n";
		}
	}
	$content .= "</div>";

}

include('./program/lib/constants.php');

?>

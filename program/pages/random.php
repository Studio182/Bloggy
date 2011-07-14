<?php

$content = "";

$dirlist = getDirectoryList('./posts');
$post = $dirlist[array_rand($dirlist)];
$tagValue = array();
$tagValue = parse('./posts/'.$post);
$content .= "<div id=\"box\">\n";
$content .= "<h1>Random Post</h1>\n";
$content .= "<h2>".$tagValue["title"]."</h2>\n";
$content .= "<h3>Posted by ".$tagValue["author"]."</h3>\n";
$content .= "<h3>Posted on ".$tagValue["date"]."</h3>";
$content .= "<p>".$tagValue["body"]."</p>\n";
$content .= "</div>";

include('./program/lib/constants.php');
?>
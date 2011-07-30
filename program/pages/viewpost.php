<?php

$post=$location[2].'.post';

$content = "";

if(file_exists('./posts/'.$post)) {

$tagValue = array();
$tagValue = parse('./posts/'.$post);
$content .= "<div id=\"box\">\n";
$content .= "<center><h1>".$tagValue["date"]."</h1></center>\n";
$content .= "<h2>".$tagValue["title"]."</h2>\n";
$content .= "<h3>Posted by ".$tagValue["author"]."</h3>\n";
$content .= "<p>".$tagValue["body"]."</p>\n";
if(!$bloggy_config['livefyre_id'] == "") {
$content .= "<br><script type='text/javascript' src='http://livefyre.com/wjs/javascripts/livefyre.js'></script><script type='text/javascript'>var fyre = LF({site_id: ".$bloggy_config['livefyre_id'].",version: '1.0'});</script>";
$content .= "<style>#livefyre{min-height:0px;}</style></div>";
}
include('./program/lib/constants.php');
} else {
include('./program/pages/404.php');
}
?>
<?php
$smarty = new Smarty;

//Title

$title = $bloggy_config['title'];


// Slogan

$slogan = $bloggy_config['subtitles'];

$slogan = $slogan[array_rand($slogan)];

// Nav

$nav = $bloggy_config['nav'];

$nav_last = end($nav);

$nav_html = "<div id='nav'>";

foreach($nav as $key => $value) {
$nav_html .= '<a href="?/'.$value.'">'.$key.'</a>';
if($value !== $nav_last) {
$nav_html .= " <span>|</span> ";
}
}

$nav_html .= "</div>";


$smarty->assign("slogan",$slogan);
$smarty->assign("title",$title);
$smarty->assign("nav", $nav_html);
$smarty->assign("content", $content);

$smarty->display('./skins/'.$bloggy_config['skin'].'/header.tpl');
$smarty->display('./skins/'.$bloggy_config['skin'].'/index.tpl');
$smarty->display('./skins/'.$bloggy_config['skin'].'/footer.tpl');
?>
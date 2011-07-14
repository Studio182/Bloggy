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
|   Main Configuration File                                         |
|                                                                   |
+----------------------- Studio 182 Team ---------------------------+
| Hunter Dolan <hunter@studio182.net>                               |
| Pablo Merino <pablo@studio182.net>                                |
+-------------------------------------------------------------------+
*/



$bloggy_config = array();

// Title of Blog
$bloggy_config['title'] = "Bloggy!";

// Skin
$bloggy_config['skin'] = "bloggy";

// Subtitles

$bloggy_config['subtitles'] = array("For Hackers with Schedules", "Because it's fast!", "The hacker's choice!", "#1", "Blogging for Hackers");

//$bloggy_config['subtitles'] = array("The hacker's choice!", "You'll actually love it!", "Made with PHP, HTML, JS, CSS and Bacon", "Well, enjoy :P", "This was made by P and H!", "No, this is free", "#1 Dad!", "Spain won the World Cup!", "LOL");

// Navigation Bar
$bloggy_config['nav'] = array("Home" => "home", "Random Post" => "random", "About" => "about");


// Check Mail On Every Load
$bloggy_config['check_mail'] = true;

// IMAP Host (for SSL put ssl:// infront of the server address)
$bloggy_config['imap_host'] = "ssl://imap.gmail.com";

// IMAP Port (For SSL Host it's generally 993, and for Standard it's normally 143)
$bloggy_config['imap_port'] = 993;

// IMAP User
$bloggy_config['imap_user'] = "bloggy.testing@gmail.com";

// IMAP Password
$bloggy_config['imap_pass'] = "Studio182Test";

// IMAP Folder (You can customize what folders we look for post in, please note that this folder will be cleared on every new post)
$bloggy_config['imap_folder'] = "INBOX";

// Mail Password (an extra auth layer for email posting, to disable simply set this to false)
$bloggy_config['mail_pass'] = "Studio182PostPassword";

?>
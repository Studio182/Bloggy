<?php



/*
+-------------------------------------------------------------------+
| ./mail.php                                                        |
|                                                                   |
| This file is part of the Bloggy Blogging Suite                    |
| Copyright (C) 2011, Studio 182 Dev. - Worldwide Division          |
|                                                                   |
| Licensed under the GNU GPL                                        |
|                                                                   |
| PURPOSE:                                                          |
|   For Processing E-Mail Posting                                   |
|                                                                   |
+----------------------- Studio 182 Team ---------------------------+
| Hunter Dolan <hunter@studio182.net>                               |
| Pablo Merino <pablo@studio182.net>                                |
+-------------------------------------------------------------------+
*/

require_once("./config/main.inc.php");
require_once("./program/lib/imap.inc.php");
require_once("./program/lib/mimedecode.inc.php");

$imap = new IMAPMAIL;

$imap->open($bloggy_config['imap_host'], $bloggy_config['imap_port']);

$imap->login($bloggy_config['imap_user'],$bloggy_config['imap_pass']);

$imap->open_mailbox($bloggy_config['imap_folder']);

if($imap->get_msglist() > 0) {

$mimedecoder=new MIMEDECODE($imap->get_message(1),"\r\n"); 
    
$data = parse($mimedecoder->get_parsed_message()->parts['0']->body, true);


if($data['password'] == $bloggy_config['mail_pass']) {
//If the passwords match, lets continue!
$data['password'] = null;

$data = array_filter($data);

$post = "";

foreach($data as $key => $value) {
$post .= $key.": ".$value."\r\n";
}

$dirlistnormal = getDirectoryList('./posts');

$post_number = count($dirlistnormal) + 1;

$post_name = "./posts/post".$post_number.".post";

$file_stream = fopen($post_name, 'w');
fwrite($file_stream, $post);

}

$response=$imap->delete_message(1);

}
//header('Location: index.php')
?>
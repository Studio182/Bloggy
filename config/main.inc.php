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

# Pablo: Simply configure this for an email account, please note that this script will clear any messages in the folder that you select
# Example Message

/*
Password: mysupersecretpassword
Title: My Post Title
Date: The Date
Author: You
Body: You're message here!!!

*/


$bloggy_config = array();

// IMAP Host (for SSL put ssl:// infront of the server address)
$bloggy_config['imap_host'] = "ssl://imap.gmail.com";

// IMAP Port (For SSL Host it's generally 993, and for Standard it's normally 143)
$bloggy_config['imap_port'] = 993;

// IMAP User
$bloggy_config['imap_user'] = "";

// IMAP Password
$bloggy_config['imap_pass'] = "";

// IMAP Folder (You can customize what folders we look for post in, please note that this folder will be cleared on every new post)
$bloggy_config['imap_folder'] = "INBOX";

// Mail Password (an extra auth layer for email posting, to disable simply set this to false)
$bloggy_config['mail_pass'] = "mysupersecretpassword";

?>
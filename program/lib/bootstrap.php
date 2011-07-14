<?php

require_once('./config/main.inc.php');
require_once('./program/lib/functions.php');

if($bloggy_config['check_mail']) {
	require_once('./program/lib/mail.php');
}

require_once('./program/lib/smarty/Smarty.class.php');

?>
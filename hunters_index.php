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

require_once('./config/main.inc.php');
require_once('./lib/functions.php');
//require_once('./mail.php');

?>
<!DOCTYPE html>

<!-- 

  __                        _  _  
 (_ _|_      _| o  _    /| (_)  ) 
 __) |_ |_| (_| | (_)    | (_) /_ 
                                  

bloggy, simple blog system made by hunter dolan and pablo merino 

-->

<head>
<title>Bloggy!</title>
<link href="js/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="style/style.css" /> 
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/facebox/facebox.js" type="text/javascript"></script>
<script type="text/javascript" src="js/typewriter.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,700|Maven+Pro|Yanone+Kaffeesatz|Bangers|Istok+Web&v2' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="img/favicon.ico">

<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'js/facebox/loading.gif',
        closeImage   : 'js/facebox/closelabel.png'
		})
		$('header').typewriter( 500 );
       })
</script>

</head>

<html>
<body>

<center><header>Bloggy!</header></center>
<!-- PHP START -->

<?php

function md5_dir($dir)
{
    if (!is_dir($dir))
    {
        return false;
    }
    
    $filemd5s = array();
    $d = dir($dir);

    while (false !== ($entry = $d->read()))
    {
        if ($entry != '.' && $entry != '..')
        {
             if (is_dir($dir.'/'.$entry))
             {
                 $filemd5s[] = MD5_DIR($dir.'/'.$entry);
             }
             else
             {
                 $filemd5s[] = md5_file($dir.'/'.$entry);
             }
         }
    }
    $d->close();
    return md5(implode('', $filemd5s));
}

$cur_index['hash'] = MD5_DIR('./posts');

echo $cur_index['hash'];

if(file_exists('./tmp/index.php')) {
require_once('./tmp/index.php');
} else {
$index = array();
}



if($index['hash'] == $cur_index['hash']) {

}


$subtitles = array("The hacker's choice!", "You'll actually love it!", "Made with PHP, HTML, JS, CSS and Bacon", "Well, enjoy :P", "This was made by P and H!", "No, this is free", "#1 Dad!", "Spain won the World Cup!", "LOL");
$post = $subtitles[array_rand($subtitles)];
echo("<center><subtitle>".$post."</subtitle></center>");
?>

<!-- PHP END -->
<br>

<div></div>

<center><a href="#" style="color: white; text-decoration: none; font-size: 20px;">Home</a> <span>|</span> <a href="random.php" style="color: white; text-decoration: none; font-size: 20px;">Random post</a> <span>|</span> <a href="about.php" style="color: white; text-decoration: none; font-size: 20px;">About</a> 
</center>

<!-- PHP START -->
<?php

$dirlistnormal = getDirectoryList('./posts');
$dirlist = array_reverse($dirlistnormal);
foreach ($dirlist as $file) {
	$tagValue = array();
	$tagValue = parse('./posts/'.$file);
	echo("<div id=\"box\">\n");
	echo("<h1>".$tagValue["date"]."</h1>\n");
	echo("<h2>".$tagValue["title"]."</h2>\n");
	echo("<h3>Posted by ".$tagValue["author"]."</h3>\n");
	echo("<p>".$tagValue["body"]."</p>\n");
	echo("</div>");

}


?>

<!-- PHP END -->

<a href="http://github.com/you"><img style="position: fixed; top: 0; left: 0; border: 0;" src="https://gs1.wac.edgecastcdn.net/80460E/assets/img/5d21241b64dc708fcbb701f68f72f41e9f1fadd6/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67" alt="Fork me on GitHub"></a>
<br>
</body>
</html>
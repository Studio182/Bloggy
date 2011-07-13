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
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,700|Maven+Pro|Yanone+Kaffeesatz|Bangers&v2' rel='stylesheet' type='text/css'>
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
<div id="ticker-area"> 

<center><header><a href="index.php" style="text-decoration: none; color: white;">Bloggy!</a></header></center>
<center><subtitle>The hacker's choice!</subtitle></center>
<br>
<div></div>
<?php
// MADE BY HUNTER DOLAN! Thanks!
function remove_item_by_value($array, $val = '', $preserve_keys = true)
{
	if (empty($array) || !is_array($array)) return false;
	if (!in_array($val, $array)) return $array;

	foreach ($array as $key => $value) {
		if ($value == $val) unset($array[$key]);
	}

	return ($preserve_keys === true) ? $array : array_values($array);
}

function getDirectoryList($directory)
{

	// create an array to hold directory list
	$results = array();

	// create a handler for the directory
	$handler = opendir($directory);

	// open directory and walk through the filenames
	while ($file = readdir($handler)) {

		// if file isn't this directory or its parent, add it to the results
		if ($file != "." && $file != "..") {
			$results[] = $file;
		}
		
	}

	// tidy up: close the handler
	closedir($handler);

	if (in_array(".DS_Store", $results)) {
		$results = remove_item_by_value($results, ".DS_Store");
	}
	/*if (in_array("Thefile", $results)) {
  		$results = remove_item_by_value($results, "Thefile");
 	}*/ //for blacklisting a file
	// done!
	return $results;


}

function parse($filename) {
  	$lines = file($filename);
  	$content = array();
  	foreach ($lines as $line) {
    	$posColon = strpos($line, ":");
   		$tag = substr($line, 0, $posColon);
    	$body = substr($line, $posColon+1);

    	$content[$tag] = trim($body);
  	}
  	return $content;
}

$dirlist = getDirectoryList('./posts');
$post = $dirlist[array_rand($dirlist)];
$tagValue = array();
$tagValue = parse('./posts/'.$post);
echo("<div id=\"box\">\n");
echo("<h1>".$tagValue["Date"]."</h1>\n");
echo("<h2>".$tagValue["Title"]."</h2>\n");
echo("<h3>Posted by ".$tagValue["Author"]."</h3>\n");
echo("<p>".$tagValue["Body"]."</p>\n");
echo("</div>");

?>
<a href="http://github.com/you"><img style="position: fixed; top: 0; left: 0; border: 0;" src="https://gs1.wac.edgecastcdn.net/80460E/assets/img/5d21241b64dc708fcbb701f68f72f41e9f1fadd6/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67" alt="Fork me on GitHub"></a>
<div id="footer">
<center><a href="about.php"><h2>About!</h2></a></center>     
<center><a href="index.php"><h2>Home!</h2></a></center>     
<center><p><?php echo(date('F dS \of Y ')); ?></p></center>

</div>
<br>
</body>
</html>
<?php
/*
+-------------------------------------------------------------------+
| ./about.php														|
|                                                                   |
| This file is part of the Bloggy Blogging Suite                    |
| Copyright (C) 2011, Studio 182 Dev. - Worldwide Division          |
|                                                                   |
| Licensed under the GNU GPL                                        |
|                                                                   |
| PURPOSE:                                                          |
|   Main About File			                                        |
|                                                                   |
+----------------------- Studio 182 Team ---------------------------+
| Hunter Dolan <hunter@studio182.net>                               |
| Pablo Merino <pablo@studio182.net>                                |
+-------------------------------------------------------------------+
*/
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
$subtitles = array("The hacker's choice!", "You'll actually love it!", "Made with PHP, HTML, JS, CSS and Bacon", "Well, enjoy :P", "This was made by P and H!", "No, this is free", "#1 Dad!", "Spain won the World Cup!", "LOL");
$post = $subtitles[array_rand($subtitles)];
echo("<center><subtitle>".$post."</subtitle></center>");
?>

<!-- PHP END -->
<br>

<div></div>

<center><a href="index.php" style="color: white; text-decoration: none; font-size: 20px;">Home</a> <span>|</span> <a href="random.php" style="color: white; text-decoration: none; font-size: 20px;">Random post</a> <span>|</span> <a href="#" style="color: white; text-decoration: none; font-size: 20px;">About</a> 
</center>

<div id="about-box">
<nav><a href="./" style="color: #306bb9; text-decoration: none; font-size: 20px;">bloggy</a> <span style="color: black">/</span> <strong><a href="#" style="color: #306bb9; text-decoration: none; font-size: 20px;">about</a></strong>

<center><pre style="font: 10px/10px monospace;"> 

888888b.   888                                     888 
888  "88b  888                                     888 
888  .88P  888                                     888 
8888888K.  888  .d88b.   .d88b.   .d88b.  888  888 888 
888  "Y88b 888 d88""88b d88P"88b d88P"88b 888  888 888 
888    888 888 888  888 888  888 888  888 888  888 Y8P 
888   d88P 888 Y88..88P Y88b 888 Y88b 888 Y88b 888  "  
8888888P"  888  "Y88P"   "Y88888  "Y88888  "Y88888 888 
                             888      888      888     
                        Y8b d88P Y8b d88P Y8b d88P     
                         "Y88P"   "Y88P"   "Y88P"      

</pre>
<pre style="font: 15px monospace;"> 
Bloggy beta1 codename CasperVail 11B
</pre>
<hr>
<h2>Bloggy is a the hacker's choice blog engine by:
</center>
<ul>
	<li><a href="http://madebyhd.us">Hunter Dolan</a>, the PHP/HTML/CSS ninja</li>
	<li><a href="http://zad0xsis.net">Pablo Merino</a>, the HTML/CSS coder</li>
	
	</ul>
<center>
<p>A project from:</p>
<pre style="font: 10px/10px monospace;"> 

 .d8888b.  888                  888 d8b          d888   .d8888b.   .d8888b.  
d88P  Y88b 888                  888 Y8P         d8888  d88P  Y88b d88P  Y88b 
Y88b.      888                  888               888  Y88b. d88P        888 
 "Y888b.   888888 888  888  .d88888 888  .d88b.   888   "Y88888"       .d88P 
    "Y88b. 888    888  888 d88" 888 888 d88""88b  888  .d8P""Y8b.  .od888P"  
      "888 888    888  888 888  888 888 888  888  888  888    888 d88P"      
Y88b  d88P Y88b.  Y88b 888 Y88b 888 888 Y88..88P  888  Y88b  d88P 888"       
 "Y8888P"   "Y888  "Y88888  "Y88888 888  "Y88P" 8888888 "Y8888P"  888888888  
                                                                             
</pre>
<p>(BTW, Bloggy is open source here: LINK!)</p>
<p>Open source - <?php echo date('Y'); ?> </p>
<p><?php echo("Today is ".date('F dS \of Y ')); ?></p>
</center>
</div>

</nav>
<a href="http://github.com/you"><img style="position: fixed; top: 0; left: 0; border: 0;" src="https://gs1.wac.edgecastcdn.net/80460E/assets/img/5d21241b64dc708fcbb701f68f72f41e9f1fadd6/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67" alt="Fork me on GitHub"></a>
<br>

</body>
</html>
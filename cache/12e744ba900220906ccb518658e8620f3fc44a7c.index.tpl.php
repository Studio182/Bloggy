<?php /*%%SmartyHeaderCode:10057948324e1ef11d8f0ca1-15567463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e744ba900220906ccb518658e8620f3fc44a7c' => 
    array (
      0 => 'template/index.tpl',
      1 => 1310650747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10057948324e1ef11d8f0ca1-15567463',
  'cache_lifetime' => 120,
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?><!DOCTYPE html>

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

<center><subtitle>Well, enjoy :P</subtitle></center>
<br>

<div></div>

<center><a href="#" style="color: white; text-decoration: none; font-size: 20px;">Home</a> <span>|</span> <a href="random.php" style="color: white; text-decoration: none; font-size: 20px;">Random post</a> <span>|</span> <a href="about.php" style="color: white; text-decoration: none; font-size: 20px;">About</a> 
</center>



<a href="http://github.com/you"><img style="position: fixed; top: 0; left: 0; border: 0;" src="https://gs1.wac.edgecastcdn.net/80460E/assets/img/5d21241b64dc708fcbb701f68f72f41e9f1fadd6/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67" alt="Fork me on GitHub"></a>
<br>
</body>
</html><?php } ?>
<?php /* Smarty version Smarty-3.0.8, created on 2011-07-14 15:18:43
         compiled from "./skins/bloggy/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3019228294e1f08d3e6a453-67888761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69434002822d7ce8633c2724892ed219a0e2b258' => 
    array (
      0 => './skins/bloggy/header.tpl',
      1 => 1310656721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3019228294e1f08d3e6a453-67888761',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<!-- 

  __                        _  _  
 (_ _|_      _| o  _    /| (_)  ) 
 __) |_ |_| (_| | (_)    | (_) /_ 
                                  

bloggy, simple blog system made by hunter dolan and pablo merino 

-->

<html>
<head>
    <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
    <link href="./skins/bloggy/js/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="./skins/bloggy/css/style.css">
    <script src="./skins/bloggy/js/jquery.js" type="text/javascript">
</script>
    <script src="./skins/bloggy/js/facebox/facebox.js" type="text/javascript">
</script>
    <script type="text/javascript" src="./skins/bloggy/js/typewriter.js">
</script>
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,700|Maven+Pro|Yanone+Kaffeesatz|Bangers|Istok+Web&v2' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="./skins/bloggy/img/favicon.ico">
    <script type="text/javascript">
jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'js/facebox/loading.gif',
        closeImage   : 'js/facebox/closelabel.png'
        })
        $('#header').typewriter( 500 );
       })
    </script>
</head>

<body>
    <div id="header">
        <?php echo $_smarty_tpl->getVariable('title')->value;?>

    </div>

    <div id="subtitle">
        <?php echo $_smarty_tpl->getVariable('slogan')->value;?>

    </div>
</body>
</html>

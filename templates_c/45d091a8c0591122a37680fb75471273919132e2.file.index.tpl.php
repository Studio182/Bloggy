<?php /* Smarty version Smarty-3.0.8, created on 2011-07-14 20:04:16
         compiled from "./skins/iphone/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11202909334e1f4bc0023469-36906012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45d091a8c0591122a37680fb75471273919132e2' => 
    array (
      0 => './skins/iphone/index.tpl',
      1 => 1310673854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11202909334e1f4bc0023469-36906012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<body>

<div id="topbar">
<div id="title">
        <?php echo $_smarty_tpl->getVariable('title')->value;?>

		</div></div>


<div id="content">
	<ul class="pageitem">
		<li class="textbox"><span class="header"><center><?php echo $_smarty_tpl->getVariable('nav')->value;?>
</center></span></li>
	</ul>
	<ul class="pageitem">
		<li class="textbox"><span class="header"><?php echo $_smarty_tpl->getVariable('content')->value;?>
</span></li>
	</ul>
</div>

</div>

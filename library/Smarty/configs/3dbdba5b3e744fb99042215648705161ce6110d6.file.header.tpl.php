<?php /* Smarty version Smarty-3.1.6, created on 2020-01-02 13:08:17
         compiled from "../views/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20686602925e0de6a0423fb4-69649522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dbdba5b3e744fb99042215648705161ce6110d6' => 
    array (
      0 => '../views/default/header.tpl',
      1 => 1577969874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20686602925e0de6a0423fb4-69649522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5e0de6a042d2f',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e0de6a042d2f')) {function content_5e0de6a042d2f($_smarty_tpl) {?><html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
/css/main.css">
	</head>
	<body>
		<header id="header">
			<h1>my shop интернет- магазин</h1>
		</header>
<?php }} ?>
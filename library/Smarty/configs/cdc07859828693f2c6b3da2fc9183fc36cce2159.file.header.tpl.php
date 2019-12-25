<?php /* Smarty version Smarty-3.1.6, created on 2019-12-18 14:52:46
         compiled from "header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11300357245df90da10c3b90-51867406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdc07859828693f2c6b3da2fc9183fc36cce2159' => 
    array (
      0 => 'header.tpl',
      1 => 1576677148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11300357245df90da10c3b90-51867406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5df90da11786e',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df90da11786e')) {function content_5df90da11786e($_smarty_tpl) {?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css">
    </head>
<body>
    <header id="header">
        <h1>my-shop - интернет магазин</h1>
    </header>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.6, created on 2020-02-08 16:52:54
         compiled from "leftColumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2548052275e3c41dbe32df2-71829958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69efaa3a2fc490f0fc4425c9aaceba3bf935ca02' => 
    array (
      0 => 'leftColumn.tpl',
      1 => 1581180771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2548052275e3c41dbe32df2-71829958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5e3c41dbe4046',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e3c41dbe4046')) {function content_5e3c41dbe4046($_smarty_tpl) {?>
		<div class="container main_container">
			<div id="left_column">
				<p class="menu_caption"> Меню: </p>
				<ul class="menu">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
					<?php } ?>
				</ul>
			</div>
<?php }} ?>
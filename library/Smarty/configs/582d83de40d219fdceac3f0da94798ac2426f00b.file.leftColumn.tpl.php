<?php /* Smarty version Smarty-3.1.6, created on 2020-02-06 15:48:33
         compiled from "../views/default/leftColumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7053175975e0de6ce3b6231-86967305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582d83de40d219fdceac3f0da94798ac2426f00b' => 
    array (
      0 => '../views/default/leftColumn.tpl',
      1 => 1581003535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7053175975e0de6ce3b6231-86967305',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5e0de6ce3b81a',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e0de6ce3b81a')) {function content_5e0de6ce3b81a($_smarty_tpl) {?>
		<div class="container main_container">	
			<div id="left_column">
				<p class="menu_caption"> Меню:</p>
				<ul class="menu">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br/>
				<?php } ?>
				</ul>
			</div>
<?php }} ?>
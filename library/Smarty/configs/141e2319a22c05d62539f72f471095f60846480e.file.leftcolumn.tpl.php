<?php /* Smarty version Smarty-3.1.6, created on 2019-12-20 18:15:26
         compiled from "leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15732094665df90da12a8806-26056094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '141e2319a22c05d62539f72f471095f60846480e' => 
    array (
      0 => 'leftcolumn.tpl',
      1 => 1576862124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15732094665df90da12a8806-26056094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5df90da12ac3f',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df90da12ac3f')) {function content_5df90da12ac3f($_smarty_tpl) {?>    <div class="container main_container">
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
        </div><?php }} ?>
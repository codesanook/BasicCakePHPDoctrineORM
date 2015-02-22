<?php /* Smarty version Smarty-3.1.21, created on 2015-02-23 00:08:32
         compiled from "views\product\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2267654e9feb6a60874-14212319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f9fea0a918a10d63f86209c6e5fb38e529fe9e2' => 
    array (
      0 => 'views\\product\\list.tpl',
      1 => 1424621309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2267654e9feb6a60874-14212319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54e9feb6af4f98_62882965',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e9feb6af4f98_62882965')) {function content_54e9feb6af4f98_62882965($_smarty_tpl) {?>
products
<ul>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
   <li><?php echo $_smarty_tpl->tpl_vars['product']->value;?>
</li> 
<?php } ?>
</ul><?php }} ?>

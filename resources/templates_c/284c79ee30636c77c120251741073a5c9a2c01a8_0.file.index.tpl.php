<?php /* Smarty version 3.1.27, created on 2015-10-15 11:57:45
         compiled from "/home/ubuntu/workspace/resources/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:799077899561f94b9b050a2_68565479%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '284c79ee30636c77c120251741073a5c9a2c01a8' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/index.tpl',
      1 => 1444910262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '799077899561f94b9b050a2_68565479',
  'variables' => 
  array (
    'categories' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561f94b9b18169_02316270',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561f94b9b18169_02316270')) {
function content_561f94b9b18169_02316270 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '799077899561f94b9b050a2_68565479';
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
<h4><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</h4>
<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
}
}
?>
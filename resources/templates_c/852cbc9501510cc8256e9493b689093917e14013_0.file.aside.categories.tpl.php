<?php /* Smarty version 3.1.27, created on 2015-10-17 11:42:07
         compiled from "/opt/lampp/htdocs/ecom/resources/templates/front/aside.categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:504738453562217ef5a7724_12659471%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '852cbc9501510cc8256e9493b689093917e14013' => 
    array (
      0 => '/opt/lampp/htdocs/ecom/resources/templates/front/aside.categories.tpl',
      1 => 1444913875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '504738453562217ef5a7724_12659471',
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562217ef5b6737_63235710',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562217ef5b6737_63235710')) {
function content_562217ef5b6737_63235710 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '504738453562217ef5a7724_12659471';
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$foreach_category_Sav = $_smarty_tpl->tpl_vars['category'];
?>
    <a href="category.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</a>
<?php
$_smarty_tpl->tpl_vars['category'] = $foreach_category_Sav;
}
}
}
?>
<?php /* Smarty version 3.1.27, created on 2015-10-21 17:52:44
         compiled from "/home/ubuntu/workspace/resources/templates/front/aside.categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19633519975627d0ec4ac590_40926589%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd92074c81c54ee84e3dc10d7ef196391be061c78' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/front/aside.categories.tpl',
      1 => 1445188069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19633519975627d0ec4ac590_40926589',
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5627d0ec4cb920_45778577',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5627d0ec4cb920_45778577')) {
function content_5627d0ec4cb920_45778577 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19633519975627d0ec4ac590_40926589';
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
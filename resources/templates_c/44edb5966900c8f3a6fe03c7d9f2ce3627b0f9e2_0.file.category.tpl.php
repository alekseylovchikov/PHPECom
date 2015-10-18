<?php /* Smarty version 3.1.27, created on 2015-10-18 17:54:17
         compiled from "/opt/lampp/htdocs/ecom/resources/templates/front/category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6074110235623c0a9946d40_62691949%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44edb5966900c8f3a6fe03c7d9f2ce3627b0f9e2' => 
    array (
      0 => '/opt/lampp/htdocs/ecom/resources/templates/front/category.tpl',
      1 => 1445183656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6074110235623c0a9946d40_62691949',
  'variables' => 
  array (
    'category' => 0,
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5623c0a9a13de2_69327205',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5623c0a9a13de2_69327205')) {
function content_5623c0a9a13de2_69327205 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6074110235623c0a9946d40_62691949';
?>
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="/ecom/public/">Главная</a></li>
			<li class="active"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</li>
		</ol>
	</div>
	<?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$foreach_product_Sav = $_smarty_tpl->tpl_vars['product'];
?>
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12">
					<h4><a href="item.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</a></h4>
				</div>
				<div class="col-md-12">
					<a href="item.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><img class="img-responsive" src="img/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
" />	</a>
				</div>
				<div class="col-md-12">
					<p><?php echo substr($_smarty_tpl->tpl_vars['product']->value['desc'],0,200);?>
...</p>
				</div>
				<div class="col-md-12">
					<h4 class="text-center pull-right price"><?php echo number_format($_smarty_tpl->tpl_vars['product']->value['price']);?>
 руб.</h4>
				</div>
			</div>
		</div>
	<?php
$_smarty_tpl->tpl_vars['product'] = $foreach_product_Sav;
}
?>
</div><?php }
}
?>
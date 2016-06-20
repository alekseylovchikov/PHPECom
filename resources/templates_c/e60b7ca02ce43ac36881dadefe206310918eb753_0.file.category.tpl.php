<?php /* Smarty version 3.1.27, created on 2015-10-23 17:12:18
         compiled from "/home/ubuntu/workspace/resources/templates/front/category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1770245737562a6a727f0748_12488511%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e60b7ca02ce43ac36881dadefe206310918eb753' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/front/category.tpl',
      1 => 1445620318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1770245737562a6a727f0748_12488511',
  'variables' => 
  array (
    'category' => 0,
    'products' => 0,
    'count' => 0,
    'i' => 0,
    'product' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562a6a72868265_27379137',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562a6a72868265_27379137')) {
function content_562a6a72868265_27379137 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1770245737562a6a727f0748_12488511';
?>
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="/">Главная</a></li>
			<li class="active"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</li>
		</ol>
	</div>
	<div class="col-md-12">
		<div class="well">
			<div class="btn-group">
				<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Сортировать по <span class="caret"></span>
			  	</button>
				<ul class="dropdown-menu">
			    	<li><a href="?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&price=toup">возростанию цены</a></li>
			    	<li><a href="?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
&price=todown">убыванию цены</a></li>
			  	</ul>
			</div>
		</div>
	</div>
	<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(0, null, 0);?>
	
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
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['count']->value++, null, 0);?>
		
		<?php if ($_smarty_tpl->tpl_vars['i']->value%3 == 0 && $_smarty_tpl->tpl_vars['i']->value > 0) {?>
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				<hr />
			</div>
		<?php }?>
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
							<a href="item.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</a>
						</div>
						<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
							<span class="pull-left">
								<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable(5-$_smarty_tpl->tpl_vars['product']->value['rating'], null, 0);?>
                    
		                        <?php $_smarty_tpl->tpl_vars['from'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['from']->step = 1;$_smarty_tpl->tpl_vars['from']->total = (int) ceil(($_smarty_tpl->tpl_vars['from']->step > 0 ? $_smarty_tpl->tpl_vars['product']->value['rating']+1 - (1) : 1-($_smarty_tpl->tpl_vars['product']->value['rating'])+1)/abs($_smarty_tpl->tpl_vars['from']->step));
if ($_smarty_tpl->tpl_vars['from']->total > 0) {
for ($_smarty_tpl->tpl_vars['from']->value = 1, $_smarty_tpl->tpl_vars['from']->iteration = 1;$_smarty_tpl->tpl_vars['from']->iteration <= $_smarty_tpl->tpl_vars['from']->total;$_smarty_tpl->tpl_vars['from']->value += $_smarty_tpl->tpl_vars['from']->step, $_smarty_tpl->tpl_vars['from']->iteration++) {
$_smarty_tpl->tpl_vars['from']->first = $_smarty_tpl->tpl_vars['from']->iteration == 1;$_smarty_tpl->tpl_vars['from']->last = $_smarty_tpl->tpl_vars['from']->iteration == $_smarty_tpl->tpl_vars['from']->total;?>
		                            <span class="glyphicon glyphicon-star"></span>
		                        <?php }} ?>
		                        
		                        <?php if ($_smarty_tpl->tpl_vars['counter']->value != 0) {?>
		                            <?php $_smarty_tpl->tpl_vars['from'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['from']->step = 1;$_smarty_tpl->tpl_vars['from']->total = (int) ceil(($_smarty_tpl->tpl_vars['from']->step > 0 ? $_smarty_tpl->tpl_vars['counter']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['counter']->value)+1)/abs($_smarty_tpl->tpl_vars['from']->step));
if ($_smarty_tpl->tpl_vars['from']->total > 0) {
for ($_smarty_tpl->tpl_vars['from']->value = 1, $_smarty_tpl->tpl_vars['from']->iteration = 1;$_smarty_tpl->tpl_vars['from']->iteration <= $_smarty_tpl->tpl_vars['from']->total;$_smarty_tpl->tpl_vars['from']->value += $_smarty_tpl->tpl_vars['from']->step, $_smarty_tpl->tpl_vars['from']->iteration++) {
$_smarty_tpl->tpl_vars['from']->first = $_smarty_tpl->tpl_vars['from']->iteration == 1;$_smarty_tpl->tpl_vars['from']->last = $_smarty_tpl->tpl_vars['from']->iteration == $_smarty_tpl->tpl_vars['from']->total;?>
		                                <span class="glyphicon glyphicon-star-empty"></span>    
		                            <?php }} ?>
		                        <?php }?>
							</span>
						</div>
					</div>
				</div>
				<div class="panel-body">
			    	<div class="row">
						<div class="col-md-12">
							<a href="item.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><img class="img-responsive" src="img/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
" /></a>
						</div>
						<div class="col-md-12">
							<hr />
							<p><?php echo substr($_smarty_tpl->tpl_vars['product']->value['desc'],0,200);?>
...</p>
						</div>
						<div class="col-md-12">
							<h4 class="text-center pull-right price"><?php echo number_format($_smarty_tpl->tpl_vars['product']->value['price']);?>
 руб.</h4>
						</div>
					</div>
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
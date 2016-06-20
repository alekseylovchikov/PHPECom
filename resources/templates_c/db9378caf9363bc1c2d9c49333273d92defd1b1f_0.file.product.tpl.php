<?php /* Smarty version 3.1.27, created on 2015-10-23 17:12:25
         compiled from "/home/ubuntu/workspace/resources/templates/front/product.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:86173620562a6a790d7272_59953792%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db9378caf9363bc1c2d9c49333273d92defd1b1f' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/front/product.tpl',
      1 => 1445620331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86173620562a6a790d7272_59953792',
  'variables' => 
  array (
    'product' => 0,
    'category_name' => 0,
    'images' => 0,
    'image' => 0,
    'counter' => 0,
    'similar_products' => 0,
    'similar_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562a6a7915f373_52820378',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562a6a7915f373_52820378')) {
function content_562a6a7915f373_52820378 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '86173620562a6a790d7272_59953792';
?>
<div class="row">
    <div class="col-md-12">
        <!-- CREATE TPL -->
        <ol class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="category.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['category'];?>
"><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</a></li>
        </ol>
        <!-- -->
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><span class="lead"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</span></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="fotorama" data-allowfullscreen="true" data-loop="true">
                            <?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$foreach_image_Sav = $_smarty_tpl->tpl_vars['image'];
?>
                                <img class="img-responsive" src="img/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
" />
                            <?php
$_smarty_tpl->tpl_vars['image'] = $foreach_image_Sav;
}
?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="well well-sm">
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
                                </div>
                            </div>
                        </div>
                        <p><?php echo $_smarty_tpl->tpl_vars['product']->value['desc'];?>
</p>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="text-center pull-left lead price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 руб.</span>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-success pull-right" href="item.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">Купить</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4 class="alert alert-warning text-center">Похожие товары</h4>
                        <div class="row">
                            <?php
$_from = $_smarty_tpl->tpl_vars['similar_products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['similar_product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['similar_product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['similar_product']->value) {
$_smarty_tpl->tpl_vars['similar_product']->_loop = true;
$foreach_similar_product_Sav = $_smarty_tpl->tpl_vars['similar_product'];
?>
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                        				<div class="panel-heading">
                        					<div class="row">
                        						<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                        							<a href="item.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['similar_product']->value['title'];?>
</a>
                        						</div>
                        						<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                        							<span class="pull-left">
                        								<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable(5-$_smarty_tpl->tpl_vars['similar_product']->value['rating'], null, 0);?>
                                            
                        		                        <?php $_smarty_tpl->tpl_vars['from'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['from']->step = 1;$_smarty_tpl->tpl_vars['from']->total = (int) ceil(($_smarty_tpl->tpl_vars['from']->step > 0 ? $_smarty_tpl->tpl_vars['similar_product']->value['rating']+1 - (1) : 1-($_smarty_tpl->tpl_vars['similar_product']->value['rating'])+1)/abs($_smarty_tpl->tpl_vars['from']->step));
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
                        							<a href="item.php?id=<?php echo $_smarty_tpl->tpl_vars['similar_product']->value['id'];?>
"><img class="img-responsive" src="img/<?php echo $_smarty_tpl->tpl_vars['similar_product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['similar_product']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['similar_product']->value['title'];?>
" /></a>
                        						</div>
                        						<div class="col-md-12">
                        							<hr />
                        							<p><?php echo substr($_smarty_tpl->tpl_vars['similar_product']->value['desc'],0,200);?>
...</p>
                        						</div>
                        						<div class="col-md-12">
                        							<h4 class="text-center pull-right price"><?php echo $_smarty_tpl->tpl_vars['similar_product']->value['price'];?>
 руб.</h4>
                        						</div>
                        					</div>
                        				</div>
                        			</div>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['similar_product'] = $foreach_similar_product_Sav;
}
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
?>
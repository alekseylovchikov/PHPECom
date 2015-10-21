<?php /* Smarty version 3.1.27, created on 2015-10-21 17:52:44
         compiled from "/home/ubuntu/workspace/resources/templates/front/top.products.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2149577875627d0ec509ed2_99662125%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9892ab91ca3c27ed35804f35d4b25e463c0989fc' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/front/top.products.tpl',
      1 => 1445430174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2149577875627d0ec509ed2_99662125',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5627d0ec5323e5_62039744',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5627d0ec5323e5_62039744')) {
function content_5627d0ec5323e5_62039744 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2149577875627d0ec509ed2_99662125';
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
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <span class="pull-left"><a href="item.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</a></span>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
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
            <a href="item.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><img class="img-responsive img-thumbnail" src="img/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
" /></a>
            <div class="caption">
                <p><?php echo substr($_smarty_tpl->tpl_vars['product']->value['desc'],0,200);?>
...</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="pull-right text-center price"><?php echo number_format($_smarty_tpl->tpl_vars['product']->value['price']);?>
 руб.</h4>
                </div>
            </div>
        </div>
    </div>
<?php
$_smarty_tpl->tpl_vars['product'] = $foreach_product_Sav;
}
}
}
?>
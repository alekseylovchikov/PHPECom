<?php /* Smarty version 3.1.27, created on 2015-10-15 13:46:42
         compiled from "/home/ubuntu/workspace/resources/templates/front/product.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:777576946561fae42dcd395_56227871%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db9378caf9363bc1c2d9c49333273d92defd1b1f' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/front/product.tpl',
      1 => 1444916798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '777576946561fae42dcd395_56227871',
  'variables' => 
  array (
    'product' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561fae42e0ea78_21525849',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561fae42e0ea78_21525849')) {
function content_561fae42e0ea78_21525849 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '777576946561fae42dcd395_56227871';
?>
<div class="row">
    <div class="col-md-12">
        <h4 class="alert alert-info text-center"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</h4>
    </div>
    <div class="col-md-6">
        <img class="img-thumbnail img-responsive" src="img/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
" />
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h4 class="pull-left"> 
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
                </h4>
            </div>
        </div>
        <p><?php echo $_smarty_tpl->tpl_vars['product']->value['desc'];?>
</p>
        <div class="row">
            <div class="col-md-6">
                <h4 class="price text-center pull-left"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 руб.</h4>
            </div>
            <div class="col-md-6">
                <a class="btn btn-success pull-right" href="item.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">Купить</a>
            </div>
        </div>
    </div>
</div><?php }
}
?>
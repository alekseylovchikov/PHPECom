<?php /* Smarty version 3.1.27, created on 2015-10-21 17:52:44
         compiled from "/home/ubuntu/workspace/resources/templates/front/carousel.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18522224025627d0ec4ce714_02150332%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41989c1014abbd07e034f1d011be95a11bfa059d' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/front/carousel.tpl',
      1 => 1445188068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18522224025627d0ec4ce714_02150332',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5627d0ec4d64d1_40549673',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5627d0ec4d64d1_40549673')) {
function content_5627d0ec4d64d1_40549673 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18522224025627d0ec4ce714_02150332';
?>
<div class="col-md-12">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img class="slide-image" src="img/1.jpg" alt="iPhone 6S" title="iPhone 6S" />
            </div>
            <div class="item">
                <img class="slide-image" src="img/2.jpg" alt="iPhone 6S" title="iPhone 6S" />
            </div>
            <div class="item">
                <img class="slide-image" src="img/3.jpg" alt="iPhone 6S" title="iPhone 6S" />
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div><?php }
}
?>
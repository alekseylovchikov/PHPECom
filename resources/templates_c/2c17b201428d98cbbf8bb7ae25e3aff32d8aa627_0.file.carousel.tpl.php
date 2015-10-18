<?php /* Smarty version 3.1.27, created on 2015-10-17 11:42:10
         compiled from "/opt/lampp/htdocs/ecom/resources/templates/front/carousel.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:877943645562217f23e80d9_66474635%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c17b201428d98cbbf8bb7ae25e3aff32d8aa627' => 
    array (
      0 => '/opt/lampp/htdocs/ecom/resources/templates/front/carousel.tpl',
      1 => 1444997250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '877943645562217f23e80d9_66474635',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562217f24441f3_30178914',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562217f24441f3_30178914')) {
function content_562217f24441f3_30178914 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '877943645562217f23e80d9_66474635';
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
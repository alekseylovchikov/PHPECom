<?php /* Smarty version 3.1.27, created on 2015-10-18 17:08:52
         compiled from "/home/ubuntu/workspace/resources/templates/front/carousel.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10614307235623d2242dc7d1_77913751%%*/
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
  'nocache_hash' => '10614307235623d2242dc7d1_77913751',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5623d2242e0c12_39175300',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5623d2242e0c12_39175300')) {
function content_5623d2242e0c12_39175300 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10614307235623d2242dc7d1_77913751';
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
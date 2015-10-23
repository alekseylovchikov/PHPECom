<?php /* Smarty version 3.1.27, created on 2015-10-21 20:10:34
         compiled from "/home/ubuntu/workspace/resources/templates/front/404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12285712965627f13ac709a0_44360385%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08333d2bb73b223e6dc801327b86b35fbc91955a' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/front/404.tpl',
      1 => 1445188069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12285712965627f13ac709a0_44360385',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5627f13ac775b7_74063463',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5627f13ac775b7_74063463')) {
function content_5627f13ac775b7_74063463 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12285712965627f13ac709a0_44360385';
?>
<div class="row">
    <div class="col-md-12">
        <h4 class="alert alert-danger text-center">Упс! Мы не нашли такой страницы</h4>
    </div>
    <div class="col-md-12">
        <img class="img-responsive" src="img/errors/doh.gif" title="DOH!" alt="DOH!" />
    </div>
</div><?php }
}
?>
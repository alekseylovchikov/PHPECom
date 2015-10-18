<?php /* Smarty version 3.1.27, created on 2015-10-17 11:44:48
         compiled from "/opt/lampp/htdocs/ecom/resources/templates/front/404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1811166814562218906b3027_20697846%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '664297e71644aa4668404e0a4391f95a1ed617c4' => 
    array (
      0 => '/opt/lampp/htdocs/ecom/resources/templates/front/404.tpl',
      1 => 1444999988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1811166814562218906b3027_20697846',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56221890738b74_91773294',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56221890738b74_91773294')) {
function content_56221890738b74_91773294 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1811166814562218906b3027_20697846';
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
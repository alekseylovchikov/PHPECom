<?php /* Smarty version 3.1.27, created on 2015-10-16 13:28:25
         compiled from "/home/ubuntu/workspace/resources/templates/front/404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11780771575620fb799c7eb7_43169572%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08333d2bb73b223e6dc801327b86b35fbc91955a' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/front/404.tpl',
      1 => 1444999988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11780771575620fb799c7eb7_43169572',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5620fb799f4d62_85735057',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5620fb799f4d62_85735057')) {
function content_5620fb799f4d62_85735057 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11780771575620fb799c7eb7_43169572';
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
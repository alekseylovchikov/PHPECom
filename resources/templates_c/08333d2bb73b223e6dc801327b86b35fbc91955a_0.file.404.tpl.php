<?php /* Smarty version 3.1.27, created on 2015-10-18 17:16:08
         compiled from "/home/ubuntu/workspace/resources/templates/front/404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5575503975623d3d89b05a7_09565087%%*/
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
  'nocache_hash' => '5575503975623d3d89b05a7_09565087',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5623d3d89b7534_48377489',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5623d3d89b7534_48377489')) {
function content_5623d3d89b7534_48377489 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5575503975623d3d89b05a7_09565087';
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
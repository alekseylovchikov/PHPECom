<?php /* Smarty version 3.1.27, created on 2015-10-16 12:34:19
         compiled from "/home/ubuntu/workspace/resources/templates/front/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19252632815620eecbf05302_43618475%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486ab8815a86bef645283f75b3a374ce6662f49a' => 
    array (
      0 => '/home/ubuntu/workspace/resources/templates/front/header.tpl',
      1 => 1444998798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19252632815620eecbf05302_43618475',
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5620eecc0458e6_21925619',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5620eecc0458e6_21925619')) {
function content_5620eecc0458e6_21925619 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19252632815620eecbf05302_43618475';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="PHP Shop" />
        <meta name="author" content="Aleksey Lovchikov" />
        <title>BrandShop</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/flatly/bootstrap.min.css" />
        <link href="css/main.css" rel="stylesheet" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/public/">BrandShop</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Категории <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$foreach_category_Sav = $_smarty_tpl->tpl_vars['category'];
?>
                                    <li><a href="category.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</a></li> 
                                <?php
$_smarty_tpl->tpl_vars['category'] = $foreach_category_Sav;
}
?>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Контакты</a>
                        </li>
                        <li>
                            <a href="#">О нас</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Корзина</a></li>
                        <li><a href="#">Войти</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->    
            </div>
            <!-- /.container -->
        </nav><?php }
}
?>
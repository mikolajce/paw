<?php
/* Smarty version 4.1.0, created on 2022-04-04 16:37:16
  from 'D:\xampp\htdocs\paw\kalkulator\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b029ceab383_60744136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8744f29d7162108ae8afe938d3f7df7f47305da8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\paw\\kalkulator\\templates\\main.html',
      1 => 1648477179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624b029ceab383_60744136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Cos sie stalo...' ?? null : $tmp);?>
">
  	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Cos nie tak chyba" ?? null : $tmp);?>
</title>
  	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
  	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
    <title></title>
  </head>
  <body>

    <div class="header">
      <h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytul domyslny" ?? null : $tmp);?>
</h1>
      <h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "domyslny header" ?? null : $tmp);?>
</h2>
      <p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "opis hehe" ?? null : $tmp);?>
</p>
    </div>

    <div class="content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_723540234624b029ceaa670_53379817', 'content');
?>

    </div><!-- content -->

    <div class="footer">
      <p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_718034550624b029ceaad71_80013381', 'footer');
?>
</p>
    </div>

  </body>
</html>
<?php }
/* {block 'content'} */
class Block_723540234624b029ceaa670_53379817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_723540234624b029ceaa670_53379817',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyslna zawartosc <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_718034550624b029ceaad71_80013381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_718034550624b029ceaad71_80013381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
"stupki hehe"<?php
}
}
/* {/block 'footer'} */
}

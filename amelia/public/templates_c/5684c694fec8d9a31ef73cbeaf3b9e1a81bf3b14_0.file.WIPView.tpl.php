<?php
/* Smarty version 4.1.0, created on 2022-05-17 20:17:06
  from 'D:\xampp\htdocs\amelia\app\views\WIPView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6283e6a2f3a617_36471360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5684c694fec8d9a31ef73cbeaf3b9e1a81bf3b14' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\WIPView.tpl',
      1 => 1652796232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6283e6a2f3a617_36471360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8432370506283e6a2f31a12_13126591', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_8432370506283e6a2f31a12_13126591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8432370506283e6a2f31a12_13126591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Banner -->
	<div id="banner-wrapper">
		<div id="banner" class="box container">
			<div class="row">
				<div class="col-7 col-12-medium">
					<h2>Strona w budowie!</h2>
					<p>Nie powinieneś tutaj być, wracaj na stronę główną.</p>
				</div>
				<div class="col-5 col-12-medium">
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
hello" class="button large icon solid fa-arrow-circle-left">Powrót</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- zaprojektowany widok dla tabeli -->
		<!-- WORK IN PROGRESS, pokombinować z parametrami diva -->
		<div id="banner" class="container">
		<table>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['role']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value["id_rola"];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value["nazwa"];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value["opis"];?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		</div>
	</div>
<?php
}
}
/* {/block 'content'} */
}

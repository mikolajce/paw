<?php
/* Smarty version 3.1.33, created on 2022-05-31 10:01:46
  from 'C:\xampp\htdocs\amelia\app\views\WIPView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6295cb6acbdbe6_64175297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66bc6d6dc57c3d3493243fceb34adf714880b61b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\WIPView.tpl',
      1 => 1653922401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6295cb6acbdbe6_64175297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5943244576295cb6ac74ee2_71861111', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_5943244576295cb6ac74ee2_71861111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5943244576295cb6ac74ee2_71861111',
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
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
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

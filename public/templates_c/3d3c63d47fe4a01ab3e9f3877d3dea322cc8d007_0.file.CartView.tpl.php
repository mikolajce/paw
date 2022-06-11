<?php
/* Smarty version 4.1.0, created on 2022-06-06 15:46:35
  from 'D:\xampp\htdocs\amelia\app\views\CartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e053b08bd41_66000224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d3c63d47fe4a01ab3e9f3877d3dea322cc8d007' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\CartView.tpl',
      1 => 1654523191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629e053b08bd41_66000224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1401768315629e053b083415_59860337', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1401768315629e053b083415_59860337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1401768315629e053b083415_59860337',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Main -->
	<div id="main-wrapper">
		<div class="container">
			<div class="row gtr-200">
        <div class="col-8 col-12-medium imp-medium">

					<!-- Content -->
						<div id="content">
              <section class="last">
                <h2>Koszyk</h2>
                <p>Przejrzyj zawartość swojego koszyka przed finalizacją zamówienia.</p>
                <table>
                  <thead>
                    <th>Produkt</th>
                    <th>Zamówienie</th>
                    <th>Modyfikacja</th>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
              				<tr>
              					<td><?php echo $_smarty_tpl->tpl_vars['row']->value["id_produkt"];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['row']->value["id_wypozyczenie"];?>
</td>
                        <td>
														<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
cartDelete/<?php echo $_smarty_tpl->tpl_vars['row']->value['id_produkt'];?>
" class="button alt small">Usuń</a>
                        </td>
              				</tr>
										<?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
											<h2>Jakoś tu pusto...</h2>
                      <p>Przejdź do listy produktów i znajdź coś dla siebie!</p>
              			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </tbody>
                </table>
              </section>
						</div>
				</div>
        <div class="col-4 col-12-medium">

					<!-- Sidebar -->
          <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
vinylList" method="post">
            <div id="sidebar">
							<section class="widget thumbnails">
                  <h2>Zakup</h2>
                  <p>Suma zakupów:&nbsp;<strong>20,00 zł</strong></p>
                  <p>Pamiętaj: kliknięcie Zakup spowoduje jedynie rezerwację wybranych produktów. Można będzie je odebrać osobiście w odpowiednich wypożyczalniach.</p>
  								<div class="grid">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
cartFinalize" class="button icon fa-file-alt">Zakup</a>
  								</div>
							</section>
						</div>
          </form>
				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'content'} */
}

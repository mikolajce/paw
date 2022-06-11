<?php
/* Smarty version 4.1.0, created on 2022-05-30 14:48:39
  from 'D:\xampp\htdocs\amelia\app\views\VinylEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6294bd27540915_01158965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f8160f084a459692269da7399123c2e2685f1bf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\VinylEditView.tpl',
      1 => 1653914483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6294bd27540915_01158965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20619031366294bd27536c76_50963034', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_20619031366294bd27536c76_50963034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20619031366294bd27536c76_50963034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Main -->
	<div id="main-wrapper">
		<div class="container">
			<div class="row gtr-200">
				<div class="col-4 col-12-medium">

					<!-- Sidebar
						<div id="sidebar">
							<section class="widget thumbnails">
								<h3>Lorem ipsum</h3>
								<div class="grid">
									<div class="row gtr-50">
										<div class="col-6"><a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a></div>
										<div class="col-6"><a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a></div>
										<div class="col-6"><a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a></div>
										<div class="col-6"><a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a></div>
									</div>
								</div>
							</section>
						</div>
          -->
				</div>

				<div class="col-8 col-12-medium imp-medium">

					<!-- Content -->
					<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
vinylSave" method="post" id="add">
						<div id="content">
							<section class="last">
								<h2>Jaki produkt chcesz dodać?</h2>
                <h4>Tytuł:</h4>
								<input id="id_tytul" type="text" name="tytul" value="">
                <h4>Artysta:</h4>
                <input id="id_artysta" type="text" name="artysta" value="">
                <h4>Data wydania:</h4>
                <input id="id_data_wydania" type="text" name="data_wydania" placeholder="np. 2014" value="">
                <h4>Gatunek:</h4>
                <input id="id_gatunek" type="text" name="gatunek" value="">
                <h4>Liczba płyt:</h4>
                <input id="id_liczba_plyt" type="text" name="liczba_plyt" value="">
                <h4>Długość:</h4>
                <input id="id_dlugosc" type="text" name="dlugosc" placeholder="mm:ss" value="">
                <h4>Dodatki:</h4>
                <input id="id_dodatki" type="text" name="dodatki" placeholder="opis słowny dodatkowej zawartości" value="">
                <h4>Dostępność:</h4>
                <input id="id_dostepnosc" type="text" name="dostepnosc" value="">
                <h4>Wypożyczalnia:</h4>

                <select id="id_wypozyczalnia" name="wypozyczalnia">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wypoz']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value["id_wypozyczalnia"];?>
" name="<?php echo $_smarty_tpl->tpl_vars['row']->value["id_wypozyczalnia"];?>
">
                      <?php echo $_smarty_tpl->tpl_vars['row']->value["id_wypozyczalnia"];?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value["ulica"];?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value["miasto"];?>

                    </option>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>

                <br> <h2>????????</h2>
                <!--
                <input type="hidden" name="id_wypozyczalnia" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_wypozyczalnia;?>
">

								<input type="hidden" name="id_produkt" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_produkt;?>
">
								-->
								<input type="submit" name="Dodaj" value="Dodaj" class="button icon solid fa-arrow-circle-right">
								<p></p>
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
/* {/block "content"} */
}

<?php
/* Smarty version 4.1.0, created on 2022-05-30 16:48:43
  from 'D:\xampp\htdocs\amelia\app\views\VinylListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6294d94b9cb260_68417829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64e45b47fb98ec43d56ab866cfcc7a26179cbcca' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\VinylListView.tpl',
      1 => 1653922106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6294d94b9cb260_68417829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14722008996294d94b9b9103_75762004', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_14722008996294d94b9b9103_75762004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14722008996294d94b9b9103_75762004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Main -->
	<div id="main-wrapper">
		<div class="container">
			<div class="row gtr-200">
				<div class="col-4 col-12-medium">

					<!-- Sidebar -->
          <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
vinylList" method="post">
            <div id="sidebar">
							<section class="widget thumbnails">
                  <h2>Fitruj</h2>
  								<div class="grid">
  									<div class="row gtr-50">
  										<p>Tytuł:</p>
                      <input id="id_tytul" type="text" name="tytul" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->tytul;?>
">
                      <br>
                      <p>Artysta:</p>
                      <input id="id_artysta" type="text" name="artysta" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->artysta;?>
">
                      <br>
                      <p>Data wydania:</p>
                      <input id="id_data_wydania" type="text" name="data_wydania" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->data_wydania;?>
">
                      <br>
                      <p>Gatunek</p>
                      <input id="id_gatunek" type="text" name="gatunek" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->gatunek;?>
">
											<br>
											<p>&nbsp;</p>
                      <br>
                      <input type="submit" name="Filtruj" value="Filtruj" class="button icon fa-arrow-circle-right">
  									</div>
  								</div>
								<!--<a href="#" class="button icon fa-file-alt">More</a>-->
							</section>
						</div>
          </form>
				</div>
				<div class="col-8 col-12-medium imp-medium">

					<!-- Content -->
						<div id="content">
              <section class="last">
                <h2>Wyniki wyszukiwania</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                <table>
                  <thead>
                    <th>Tytuł</th>
                    <th>Wykonawca</th>
                    <!--
                    <th>Data wydania</th>
                    <th>Gatunek</th>
                    -->
                    <th></th>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plyty']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
              				<tr>
              					<td><?php echo $_smarty_tpl->tpl_vars['row']->value["tytul"];?>
</td>
              					<td><?php echo $_smarty_tpl->tpl_vars['row']->value["artysta"];?>
</td>
                        <!--
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value["data_wydania"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value["gatunek"];?>
</td>
                        -->
                        <td>
													<?php if (\core\RoleUtils::inRole('admin') || \core\RoleUtils::inRole('employee')) {?>
														<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
vinylEdit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id_produkt'];?>
" class="button small">Edytuj</a>
														<?php if (\core\RoleUtils::inRole('admin')) {?>
															<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
vinylDelete/<?php echo $_smarty_tpl->tpl_vars['row']->value['id_produkt'];?>
" class="button alt small">Usuń</a>
														<?php }?>
													<?php } else { ?>
														<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
vinylGet/<?php echo $_smarty_tpl->tpl_vars['row']->value['id_produkt'];?>
" class="button small">Wypożycz</a>
													<?php }?>
                        </td>
              				</tr>
										<?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
											<h2>Brak wyników dla wyszukiwania :(</h2>
              			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </tbody>
                </table>
              </section>
						</div>
				</div>
			</div>
		</div>
	</div>

	<div id="main-wrapper">
		<div class="container">
			<div class="row gtr-200">
				<div class="col-4 col-12-medium">

					<!-- Sidebar -->
						<div id="sidebar">
							<section class="widget thumbnails">
								<h3>Siemano kolano</h3>
								<div class="grid">
									<div class="row gtr-50">
										<div class="col-6"><a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a></div>
										<div class="col-6"><a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a></div>
										<div class="col-6"><a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a></div>
										<div class="col-6"><a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a></div>
									</div>
								</div>
								<a href="#" class="button icon fa-file-alt">Więcej</a>
							</section>
						</div>

				</div>
				<div class="col-8 col-12-medium imp-medium">
						<div id="content">
							<section class="last">
								<?php if (!\core\RoleUtils::inRole('user')) {?>
									<h2>Chcesz dodać nowy produkt?</h2>
								<?php } else { ?>
									<h2>Zapraszamy do zakupów!</h2>
								<?php }?>
								<?php if (\core\RoleUtils::inRole('employee')) {?>
									<p>Jako <strong>pracownik</strong> możesz dodawać produkty do bazy danych.
										<br>Spróbuj!
									</p>
								<?php } elseif (\core\RoleUtils::inRole('admin')) {?>
									<p>Jako <strong>administrator</strong> możesz dodawać i usuwać produkty z bazy danych.
										<br>Spróbuj!
									</p>
								<?php } else { ?>
									<p>Jako <strong>klient</strong> możesz wypożyczyć po jednym produkcie z naszej oferty.
										<br>Spróbuj!
									</p>
								<?php }?>
								<?php if (!\core\RoleUtils::inRole('user')) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
vinylEdit" class="button icon solid fa-arrow-circle-right">Dodaj</a>
								<?php }?>
							</section>
						</div>

				</div>
			</div>
		</div>
	</div>
<!--
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>
-->
<?php
}
}
/* {/block 'content'} */
}

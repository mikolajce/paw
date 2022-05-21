<?php
/* Smarty version 4.1.0, created on 2022-05-21 13:08:03
  from 'D:\xampp\htdocs\amelia\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6288c8131717f8_19994484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd128481e9fb4cdb0ffbcc6eb03c2aae0157da120' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\LoginView.tpl',
      1 => 1653131279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6288c8131717f8_19994484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11458740436288c81316d5a3_93307965', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_11458740436288c81316d5a3_93307965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11458740436288c81316d5a3_93307965',
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
								<!--<a href="#" class="button icon fa-file-alt">More</a>-->
							</section>
						</div>

				</div>
				<div class="col-8 col-12-medium imp-medium">

					<!-- Content -->
					<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
						<div id="content">
							<section class="last">
								<h2>Witaj! Jak cię zwą?</h2>
								<br>
								<p>Login:</p>
								<input id="id_login" type="text" name="login" placeholder="np. mikoc026" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
								<br>
								<p>Hasło:</p>
								<input id="id_pass" type="password" name="pass" placeholder="np. kochampieski123" value="">
								<p></p>
								<input type="submit" name="Zaloguj" value="Zaloguj" class="button icon solid fa-arrow-circle-right">
								<p></p>
								<h5>Nie masz konta?</h5>
								<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerShow" class="button alt icon solid fa-arrow-circle-up">Zarejestruj się</a>
							</section>
						</div>
					</form>
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

<?php
/* Smarty version 4.1.0, created on 2022-05-17 14:45:37
  from 'D:\xampp\htdocs\amelia\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628398f1af1438_24044931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83384ea4477b96c6b59c4c064ebcbb25db0cd3b0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\RegisterView.tpl',
      1 => 1652791535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628398f1af1438_24044931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17016305628398f1aedb90_05303297', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_17016305628398f1aedb90_05303297 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17016305628398f1aedb90_05303297',
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
login" method="post">
						<div id="content">
							<section class="last">
								<h2>Miło, że chcesz do nas dołączyć!</h2>
								<h4>Login:</h4>
								<input id="id_login" type="text" name="login" placeholder="np. mikoc026" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
								<h4>Hasło:</h4>
								<input id="id_pass" type="password" name="pass" placeholder="np. kochampieski123" value="">
                <h4>Imię:</h4>
								<input id="id_firstname" type="text" name="firstname" placeholder="np. Tomasz" value="">
                <h4>Nazwisko:</h4>
								<input id="id_surname" type="text" name="surname" placeholder="np. W. :)" value="">
                <h4>Adres email:</h4>
								<input id="id_email" type="text" name="email" placeholder="np. tomasz@w.pl" value="">
                <br>
								<a href="#" type="submit" class="button icon solid fa-arrow-circle-right">Utwórz konto</a>
								<p></p>
								<!--<input type="submit" name="Zaloguj" value="Zaloguj" class="button large icon solid fa-arrow-circle-right">-->
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

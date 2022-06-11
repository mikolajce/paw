<?php
/* Smarty version 4.1.0, created on 2022-05-22 13:19:46
  from 'D:\xampp\htdocs\amelia\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628a1c52616915_60427345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '609978ad084a55cf2f9cf37cd1d8ee260af45590' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\templates\\main.tpl',
      1 => 1653218384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628a1c52616915_60427345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Vinylove</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
hello">Vinylove</a></h1>
								<span>
									<?php if (\core\RoleUtils::inRole('admin')) {?>
										Hej, Mikołaj!
									<?php } elseif (\core\RoleUtils::inRole('employee')) {?>
										Hej, pracowniku!
									<?php } elseif (\core\RoleUtils::inRole('user')) {?>
										Zalogowano jako user
									<?php } else { ?>
										Witaj, nieznajomy!
									<?php }?><!--implement username-->
								</span>

							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_354422825628a1c5260a9b5_18511920', 'messages');
?>

									<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
										<li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
									<?php } else { ?>
										<li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Zaloguj</a></li>
									<?php }?>
									<li>
										<a href="
											<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
												<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
vinylList
											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow
											<?php }?>
										">Wypożycz</a></li>
									<li>
										<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
wip">O nas</a>
										<ul>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
wip">Dolor sit amet</a></li>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
wip">Esse cillum dolore</a></li>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
wip">Ullamco laboris nisi</a></li>
										</ul>
									</li>

								</ul>
							</nav>

					</header>
				</div>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_583738797628a1c526160e1_16669091', 'content');
?>


			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Random Stuff</h3>
										<ul class="style2">
											<li><a>Etiam feugiat condimentum</a></li>
											<li><a>Aliquam imperdiet suscipit odio</a></li>
											<li><a>Sed porttitor cras in erat nec</a></li>
											<li><a>Felis varius pellentesque potenti</a></li>
											<li><a>Nullam scelerisque blandit leo</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Random Stuff</h3>
										<ul class="style2">
											<li><a href="#">Etiam feugiat condimentum</a></li>
											<li><a href="#">Aliquam imperdiet suscipit odio</a></li>
											<li><a href="#">Sed porttitor cras in erat nec</a></li>
											<li><a href="#">Felis varius pellentesque potenti</a></li>
											<li><a href="#">Nullam scelerisque blandit leo</a></li>
										</ul>
									</section>

							</div>

							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Random Stuff</h3>
										<ul class="style2">
											<li><a>Etiam feugiat condimentum</a></li>
											<li><a>Aliquam imperdiet suscipit odio</a></li>
											<li><a>Sed porttitor cras in erat nec</a></li>
											<li><a>Felis varius pellentesque potenti</a></li>
											<li><a>Nullam scelerisque blandit leo</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Contact -->
									<section class="widget contact last">
										<h3>Kontakt</h3>
										<ul>
											<li><a href="https://google.com" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="https://github.com/mikolajce" class="icon brands fa-github"><span class="label">Github</span></a></li>
											<li><a href="https://instagram.com/mikolajce" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="http://amelia-framework.eu" class="icon brands fa-php"><span class="label">Amelia</span></a></li>
										</ul>
										<p>Mikołaj Cieśliczka<br />
										Będzińska 39, Sosnowiec<br />
										+48 420 213 769</p>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Vinylove. Wszystkie prawa zastrzeżone</li><li>Template by: <a href="http://html5up.net">HTML5 UP</a></li><li>by Mikołaj Cieśliczka. 2022.</li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
/* {block 'messages'} */
class Block_354422825628a1c5260a9b5_18511920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_354422825628a1c5260a9b5_18511920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<li class="current">
										<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
													<?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>
														<h5>
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>
														Warning:
													<?php }?>
													<!--
													<?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>
														Info:
												  <?php }?>
													-->
													<?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

													<?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>
														</h5>
													<?php }?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									</li>
									<?php
}
}
/* {/block 'messages'} */
/* {block 'content'} */
class Block_583738797628a1c526160e1_16669091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_583738797628a1c526160e1_16669091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}

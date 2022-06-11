<?php
/* Smarty version 4.1.0, created on 2022-05-29 13:48:37
  from 'D:\xampp\htdocs\amelia\app\views\HelloView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62935d95b011d3_52386254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a33f6ccdab378a1704040415c08fc8fbb6ebbab' => 
    array (
      0 => 'D:\\xampp\\htdocs\\amelia\\app\\views\\HelloView.tpl',
      1 => 1653824915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62935d95b011d3_52386254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75472046862935d95af94c4_27220825', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_75472046862935d95af94c4_27220825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_75472046862935d95af94c4_27220825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Banner -->
	<div id="banner-wrapper">
		<div id="banner" class="box container">
			<div class="row">
				<div class="col-7 col-12-medium">
					<h2>Vinylove.</h2>
					<p>Twoje ulubione kawałki na wyciągnięcie ręki.</p>
				</div>
				<div class="col-5 col-12-medium">
					<ul>
						<li><a href="
							<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
								<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
vinylList
							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow
							<?php }?>
						" class="button large icon solid fa-arrow-circle-right">
							<?php if (\core\RoleUtils::inRole('employee') || \core\RoleUtils::inRole('admin')) {?>
								Zarządzaj
							<?php } else { ?>
								Wypożycz
							<?php }?>
							</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
info" class="button alt large icon solid fa-question-circle">Więcej info</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Features -->
		<div id="features-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-4 col-12-medium">

						<!-- Box -->
							<section class="box feature">
								<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
								<div class="inner">
									<header>
										<h2>Put something here</h2>
										<p>Maybe here as well I think</p>
									</header>
									<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
								</div>
							</section>

					</div>
					<div class="col-4 col-12-medium">

						<!-- Box -->
							<section class="box feature">
								<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
								<div class="inner">
									<header>
										<h2>Rap na wosku</h2>
										<br>
										<p>Westside Gunn powraca z kolejną odsłoną swojego flagowego projektu i poraz kolejny zachwyca swoim jazzrapowym brzmieniem i charakterystycznym przekazem.</p>
									</header>
									<p><a href="
										<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
											<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
vinylList
										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow
										<?php }?>
									" class="button small icon solid fa-arrow-circle-right">Hitler Wears Hermes</a></p>
								</div>
							</section>

					</div>
					<div class="col-4 col-12-medium">

						<!-- Box -->
							<section class="box feature">
								<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
								<div class="inner">
									<header>
										<h2>Przekaż opinię</h2>
										<br>
										<p>Chcesz coś nam przekazać? Napisz do nas!</p>
										<p>Here's another intriguing subtitle</p>
									</header>
									<p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_wip;?>
" class="button small icon solid fa-arrow-circle-right">Kontakt</a></p>
								</div>
							</section>

					</div>
				</div>
			</div>
		</div>

		<!-- Main -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row gtr-200">
						<div class="col-4 col-12-medium">

							<!-- Sidebar -->
								<div id="sidebar">
									<section class="widget thumbnails">
										<h3>Interesting stuff</h3>
										<div class="grid">
											<div class="row gtr-50">
												<div class="col-6"><a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a></div>
												<div class="col-6"><a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a></div>
												<div class="col-6"><a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a></div>
												<div class="col-6"><a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a></div>
											</div>
										</div>
										<a href="#" class="button icon fa-file-alt">More</a>
									</section>
								</div>

						</div>
						<div class="col-8 col-12-medium imp-medium">

							<!-- Content -->
								<div id="content">
									<section class="last">
										<h2>So what's this all about?</h2>
										<p>This is <strong>Verti</strong>, a free and fully responsive HTML5 site template by <a href="http://html5up.net">HTML5 UP</a>.
										Verti is released under the <a href="http://html5up.net/license">Creative Commons Attribution license</a>, so feel free to use it for any personal or commercial project you might have going on (just don't forget to credit us for the design!)</p>
										<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit amet phasellus quam turpis.</p>
										<a href="#" class="button icon solid fa-arrow-circle-right">Continue Reading</a>
									</section>
								</div>

						</div>
					</div>
				</div>
			</div>
<?php
}
}
/* {/block 'content'} */
}

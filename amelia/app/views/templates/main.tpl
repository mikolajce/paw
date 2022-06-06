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
								<h1><a href="{$conf->action_root}hello">Vinylove</a></h1>
								<span>
									{if \core\RoleUtils::inRole('admin')}
										Siemson mordziaty
									{elseif \core\RoleUtils::inRole('employee')}
										Hej, pracowniku!
									{elseif \core\RoleUtils::inRole('user')}
										Zalogowano jako
										<!--{$name_display}-->
										<!--ZAIMPLEMENTOWAĆ NAZWĘ UŻYTKOWNIKA-->
									{else}
										Dzień dobry!
									{/if}
								</span>

							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									{block name=messages}
									<li class="current">
										{if $msgs->isMessage()}
											{foreach $msgs->getMessages() as $msg}
													{if $msg->isError()}
														<h5>
													{/if}
													{if $msg->isWarning()}
														Warning:
													{/if}
													<!--
													{if $msg->isInfo()}
														Info:
												  {/if}
													-->
													{$msg->text}
													{if $msg->isError()}
														</h5>
													{/if}
											{/foreach}
										{/if}
									</li>
									{/block}
									{if count($conf->roles)>0}
										<li class="current"><a href="{$conf->action_root}logout">Wyloguj</a></li>
									{else}
										<li class="current"><a href="{$conf->action_root}loginShow">Zaloguj</a></li>
									{/if}
									<li><a href="{$conf->action_root}vinylList">Wypożycz</a></li>
									<li>
										{if \core\RoleUtils::inRole('user')}
											<a href="{$conf->action_root}cartList">Koszyk</a></li></li>
										{/if}
									<li>
										<a href="{$conf->action_root}wip">O nas</a>
										<ul>
											<li><a href="{$conf->action_root}wip">Dolor sit amet</a></li>
											<li><a href="{$conf->action_root}wip">Esse cillum dolore</a></li>
											<li><a href="{$conf->action_root}wip">Ullamco laboris nisi</a></li>
										</ul>
									</li>

								</ul>
							</nav>

					</header>
				</div>

			{block name=content} {/block}

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

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

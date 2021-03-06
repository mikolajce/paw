{extends file="main.tpl"}

{block name=content}
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
						<li><a href="{$conf->action_root}vinylList" class="button large icon solid fa-arrow-circle-right">
							{if \core\RoleUtils::inRole('employee')}
								Zarządzaj
							{elseif \core\RoleUtils::inRole('user')}
								Wypożycz
							{else}
								Przeglądaj
							{/if}
							</a></li>
						<li><a href="
							{if \core\RoleUtils::inRole('admin')}
								{$conf->action_root}admin
							{else}
								{$conf->action_root}info
							{/if}
							" class="button alt large icon solid fa-question-circle">
							{if \core\RoleUtils::inRole('admin')}
								Panel admina
							{else}
								Więcej info
							{/if}
						</a></li>
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
										{if count($conf->roles)>0}
											{$conf->action_root}vinylList
										{else}
											{$conf->action_root}loginShow
										{/if}
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
									<p><a href="{$conf->action_wip}" class="button small icon solid fa-arrow-circle-right">Kontakt</a></p>
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
{/block}

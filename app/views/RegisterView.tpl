{extends file="main.tpl"}

{block name="content"}
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
					<form action="{$conf->action_root}register" method="post">
						<div id="content">
							<section class="last">
								<h2>Miło, że chcesz do nas dołączyć!</h2>
								<h4>Login:</h4>
								<input id="id_login" type="text" name="login" placeholder="np. mikoc026" value="{$form->login}">
								<h4>Hasło:</h4>
								<input id="id_pass" type="password" name="pass" placeholder="np. kochampieski123" value="">
                <h4>Imię:</h4>
								<input id="id_imie" type="text" name="imie" placeholder="np. Tomasz" value="">
                <h4>Nazwisko:</h4>
								<input id="id_nazwisko" type="text" name="nazwisko" placeholder="np. W. :)" value="">
                <h4>Adres email:</h4>
								<input id="id_email" type="text" name="email" placeholder="np. tomasz@w.pl" value="">
                <br>
								<input type="hidden" name="id_uzytkownik" value="{$form->id_uzytkownik}">
								<input type="submit" name="Utwórz konto" value="Utwórz konto" class="button icon solid fa-arrow-circle-right">
								<p></p>
								<!--<input type="submit" name="Zaloguj" value="Zaloguj" class="button large icon solid fa-arrow-circle-right">-->
							</section>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

{/block}

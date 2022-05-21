{extends file="main.tpl"}

{block name=content}
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
					<form action="{$conf->action_root}login" method="post">
						<div id="content">
							<section class="last">
								<h2>Witaj! Jak cię zwą?</h2>
								<br>
								<p>Login:</p>
								<input id="id_login" type="text" name="login" placeholder="np. mikoc026" value="{$form->login}">
								<br>
								<p>Hasło:</p>
								<input id="id_pass" type="password" name="pass" placeholder="np. kochampieski123" value="">
								<p></p>
								<input type="submit" name="Zaloguj" value="Zaloguj" class="button icon solid fa-arrow-circle-right">
								<p></p>
								<h5>Nie masz konta?</h5>
								<a href="{$conf->action_root}registerShow" class="button alt icon solid fa-arrow-circle-up">Zarejestruj się</a>
							</section>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<!--
<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="{$form->login}"/>
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
{/block}

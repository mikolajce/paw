{extends file="main.tpl"}

{block name=content}
<!-- Main -->
	<div id="main-wrapper">
		<div class="container">
			<div class="row gtr-200">
				<div class="col-4 col-12-medium">

					<!-- Sidebar -->
          <form action="{$conf->action_root}vinylList" method="post">
            <div id="sidebar">
							<section class="widget thumbnails">
                  <h2>Fitruj</h2>
  								<div class="grid">
  									<div class="row gtr-50">
  										<p>Tytuł:</p>
                      <input id="id_tytul" type="text" name="tytul" value="">
                      <br>
                      <p>Artysta:</p>
                      <input id="id_artysta" type="text" name="artysta" value="">
                      <br>
                      <p>Data wydania:</p>
                      <input id="id_data_wydania" type="text" name="data_wydania" value="">
                      <br>
                      <p>Gatunek</p>
                      <input id="id_gatunek" type="text" name="gatunek" value="">
                      <br>
                      <p>dagfa</p>
                      <input type="submit" name="Filtruj" value="Filtruj" class="button icon solid fa-arrow-circle-right">
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
                    {foreach $plyty as $row}
              				<tr>
              					<td>{$row["tytul"]}</td>
              					<td>{$row["artysta"]}</td>
                        <!--
                        <td>{$row["data_wydania"]}</td>
                        <td>{$row["gatunek"]}</td>
                        -->
                        <td>
                          <a href="{$conf->action_url}vinylEdit/{$row['id_produkt']}" class="button small">Edytuj</a>
                          <a href="{$conf->action_url}vinylEdit/{$row['id_produkt']}" class="button alt small">Usuń</a>
                        </td>
              				</tr>
              			{/foreach}
                  </tbody>
                </table>
              </section>
						</div>
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

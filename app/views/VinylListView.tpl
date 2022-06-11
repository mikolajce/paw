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
                      <input id="id_tytul" type="text" name="tytul" value="{$searchForm->tytul}">
                      <br>
                      <p>Artysta:</p>
                      <input id="id_artysta" type="text" name="artysta" value="{$searchForm->artysta}">
                      <br>
                      <p>Data wydania:</p>
                      <input id="id_data_wydania" type="text" name="data_wydania" value="{$searchForm->data_wydania}">
                      <br>
                      <p>Gatunek</p>
                      <input id="id_gatunek" type="text" name="gatunek" value="{$searchForm->gatunek}">
											<br>
											<p>&nbsp;</p>
                      <br>
											<input id="liczba_plyt" type="hidden" name="liczba_plyt" value="%">
  									</div>
  								</div>
									<input type="submit" name="Filtruj" value="Filtruj" class="button icon fa-arrow-circle-right">
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
													{if \core\RoleUtils::inRole('employee')}
														<a href="{$conf->action_url}vinylEdit/{$row['id_produkt']}" class="button small">Edytuj</a>
														<a href="{$conf->action_url}vinylDelete/{$row['id_produkt']}" class="button alt small">Usuń</a>
													{elseif \core\RoleUtils::inRole('user')}
														<a href="{$conf->action_url}vinylGet/{$row['id_produkt']}" class="button alt small">Wypożycz</a>
													{/if}
                        </td>
              				</tr>
										{foreachelse}
											<h2>Brak wyników dla wyszukiwania :(</h2>
              			{/foreach}
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
								{if \core\RoleUtils::inRole('employee')}
									<h2>Chcesz dodać nowy produkt?</h2>
									<p>Jako <strong>pracownik</strong> możesz dodawać i usuwać produkty z bazy danych.
										<br>Spróbuj!
									</p>
									<a href="{$conf->action_root}vinylEdit" class="button icon solid fa-arrow-circle-right">Dodaj</a>
								{elseif \core\RoleUtils::inRole('admin')}
									<h2>Zarządzaj użytkownikami</h2>
									<p>Jako <strong>administrator</strong> możesz zarządzać bazą użytkowników strony oraz modyfikować ich uprawnienia.
										<br>Nie możesz zarządzać bazą produktów ani zamówieniami.
									</p>
									<a href="{$conf->action_root}admin" class="button icon solid fa-arrow-circle-right">Panel admina</a>
								{elseif \core\RoleUtils::inRole('user')}
									<h2>Zapraszamy do zakupów!</h2>
									<p>Jako <strong>klient</strong> możesz wypożyczać produkty z naszej oferty.
										<br>Spróbuj!
									</p>
								{else}
									<h2>Może do nas dołączysz?</h2>
									<p>Jako <strong>gość</strong> możesz swobodnie przeglądać produkty z naszej oferty.
										<br>Aby móc wypożyczyć produkt, zaloguj się.
									</p>
								{/if}
							</section>
						</div>

				</div>
			</div>
		</div>
	</div>
{/block}

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
					<form action="{$conf->action_root}vinylSave" method="post" id="add">
						<div id="content">
							<section class="last">
								<h2>Jaki produkt chcesz dodać?</h2>
                <h4>Tytuł:</h4>
				<input id="id_tytul" type="text" name="tytul" value="{$form->tytul}">
                <h4>Artysta:</h4>
                <input id="id_artysta" type="text" name="artysta" value="{$form->artysta}">
                <h4>Data wydania:</h4>
                <input id="id_data_wydania" type="text" name="data_wydania" placeholder="np. 2014" value="{$form->data_wydania}">
                <h4>Gatunek:</h4>
                <input id="id_gatunek" type="text" name="gatunek" value="{$form->gatunek}">
                <h4>Liczba płyt:</h4>
                <input id="id_liczba_plyt" type="text" name="liczba_plyt" value="{$form->liczba_plyt}">
                <h4>Długość:</h4>
                <input id="id_dlugosc" type="text" name="dlugosc" placeholder="mm:ss" value="{$form->dlugosc}">
                <h4>Dodatki:</h4>
                <input id="id_dodatki" type="text" name="dodatki" placeholder="opis słowny dodatkowej zawartości" value="{$form->dodatki}">
                <h4>Dostępność:</h4>
                <input id="id_dostepnosc" type="text" name="dostepnosc" value="{$form->dostepnosc}">
                <h4>Wypożyczalnia:</h4>

                <select id="id_wypozyczalnia" name="wypozyczalnia">
                  {foreach $wypoz as $row}
                    <option value="{$row["id_wypozyczalnia"]}" name="{$row["id_wypozyczalnia"]}">
                      {$row["id_wypozyczalnia"]} - {$row["ulica"]}, {$row["miasto"]}
                    </option>
                  {/foreach}
                </select>

                <br>
                

								<input type="hidden" name="id_produkt" value="{$form->id_produkt}">
								
								<input type="submit" name="Dodaj" value="Dodaj" class="button icon solid fa-arrow-circle-right">
								<p></p>
							</section>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

{/block}

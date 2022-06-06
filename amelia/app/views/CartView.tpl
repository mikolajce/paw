{extends file="main.tpl"}

{block name=content}
<!-- Main -->
	<div id="main-wrapper">
		<div class="container">
			<div class="row gtr-200">
        <div class="col-8 col-12-medium imp-medium">

					<!-- Content -->
						<div id="content">
              <section class="last">
                <h2>Koszyk</h2>
                <p>Przejrzyj zawartość swojego koszyka przed finalizacją zamówienia.</p>
                <table>
                  <thead>
                    <th>Produkt</th>
                    <th>Zamówienie</th>
                    <th></th>
                  </thead>
                  <tbody>
                    {foreach $cart as $row}
              				<tr>
              					<td>{$row["id_produkt"]}</td>
                        <td>
														<a href="{$conf->action_url}cartDelete/{$row['id_produkt']}" class="button alt small">Usuń</a>
                        </td>
              				</tr>
										{foreachelse}
											<h2>Jakoś tu pusto...</h2>
                      <p>Przejdź do listy produktów i znajdź coś dla siebie!</p>
              			{/foreach}
                  </tbody>
                </table>
              </section>
						</div>
				</div>
        <div class="col-4 col-12-medium">

					<!-- Sidebar -->
          <form action="{$conf->action_root}vinylList" method="post">
            <div id="sidebar">
							<section class="widget thumbnails">
                  <h2>Zakup</h2>
                  <p>Suma zakupów:&nbsp;<strong>20,00 zł</strong></p>
                  <p>Pamiętaj: kliknięcie Zakup spowoduje jedynie rezerwację wybranych produktów. Można będzie je odebrać osobiście w odpowiednich wypożyczalniach.</p>
  								<div class="grid">
                      <input type="button" name="Filtruj" value="Zakup" class="button icon fa-arrow-circle-right">
  								</div>
							</section>
						</div>
          </form>
				</div>
			</div>
		</div>
	</div>
{/block}

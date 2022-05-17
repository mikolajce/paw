{extends file="main.tpl"}

{block name=content}
<!-- Banner -->
	<div id="banner-wrapper">
		<div id="banner" class="box container">
			<div class="row">
				<div class="col-7 col-12-medium">
					<h2>Strona w budowie!</h2>
					<p>Nie powinieneś tutaj być, wracaj na stronę główną.</p>
				</div>
				<div class="col-5 col-12-medium">
					<ul>
						<li><a href="{$conf->action_root}hello" class="button large icon solid fa-arrow-circle-left">Powrót</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- zaprojektowany widok dla tabeli -->
		<!-- WORK IN PROGRESS, pokombinować z parametrami diva -->
		<div id="banner" class="container">
		<table>
			{foreach $role as $row}
				<tr>
					<td>{$row["id_rola"]}</td>
					<td>{$row["nazwa"]}</td>
					<td>{$row["opis"]}</td>
				</tr>
			{/foreach}
		</table>
		</div>
	</div>
{/block}

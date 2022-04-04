{extends file="main.tpl"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

<h3>Prosty kalkulator</h3>

<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
	<fieldset>
		<label for="x">Kwota kredytu</label>
		<input id="x" type="text" placeholder=" " name="x" value="{$form->x}">

		<label for="y">Liczba lat</label>
		<input id="y" type="text" placeholder="" name="y" value="{$form->y}">

		<label for="z">Oprocentowanie</label>
		<input id="z" type="text" placeholder="%" name="z" value="{$form->z}">

	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $messages->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $messages->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $messages->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $messages->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>

{/block}

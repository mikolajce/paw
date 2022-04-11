{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout" class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<form action="{$conf->action_url}calcCompute" class="pure-form pure-form-aligned bottom-margin" method="post">
<legend>Kalkulatorek</legend>
	<fieldset>
		<div class="pure-control-group">
			<label for="x">Kwota kredytu</label>
			<input id="x" type="text" placeholder=" " name="x" value="{$form->x}">
		</div>
		<div class="pure-control-group">
			<label for="y">Liczba lat</label>
			<input id="y" type="text" placeholder="" name="y" value="{$form->y}">
		</div>
		<div class="pure-control-group">
			<label for="z">Oprocentowanie</label>
			<input id="z" type="text" placeholder="%" name="z" value="{$form->z}">
		</div>
		<div class="pure-controls">
			<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}

{include file="header.tpl"}

{foreach from=$marcas item=$marca }
  <form method="POST" action='editarMarcas/{$marca->id_marcas}'>
 <input  name="marcas_edit" value="{$marca->marcas}"></input>
{/foreach}
</select>
<input type="submit">
</form>
{include file="footer.tpl"}

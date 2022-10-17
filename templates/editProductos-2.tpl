<select name="marcas_edit" class="form-control">
{foreach from=$marcas item=$marca }
 <option value="{$marca->id_marcas}">{$marca->marcas}</option>
{/foreach}
</select>

<input type="submit">
</form>

{include file="footer.tpl"}
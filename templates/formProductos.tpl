{if isset($smarty.session.USER_ID)}
<form method="POST" class="row g-3" action="insertarproductos">
    <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Productos</label>
        <input class="form-control" type="text" placeholder="producto" name="producto">
        <label for="inputPassword2" class="visually-hidden">cantidad</label>
        <input class="form-control" type="number" placeholder="cantidad" name="cantidad">
        <label for="inputPassword2" class="visually-hidden">precio</label>
        <input class="form-control" type="number" placeholder="precio" name="precio">
    </div>
<div class="col-3">
        <div class="form-group">
            <label>Marcas</label>
            <select name="marcas" class="form-control">
            {foreach from=$marcas item=$marca }
                <option value="{$marca->id_marcas}">{$marca->marcas}</option>
            {/foreach}
            </select>
        </div>
            <button type="submit" class="btn btn-warning">insertar</button>
        </div>
</div>
</form>
{/if}
{if isset($smarty.session.USER_ID)}

<form method="POST" class="row g-3" action="insertarMarcas">
    <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Marcas</label>
        <input class="form-control" type="text" placeholder="marcas" name="marcas">
        <button type="submit"  class="btn btn-warning">insertar</button>
    </div>
</form>
{/if}
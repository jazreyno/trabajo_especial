
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
            <label>Prioridad</label>
            <select name="marcas" class="form-control">
                <option value="1">ilolay</option>
                <option value="2">marolio</option>
                <option value="3">casancrem</option>
                <option value="4">lapaulina</option>
                <option value="5">carrefour</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-3">insertar</button>
    </div>
</form>
{include file="header.tpl"}
<h1>MARCAS</h1>
<form method="POST" class="row g-3">
       <div class="col-auto">
              <label for="inputPassword2" class="visually-hidden">Marcas</label>
              <input class="form-control" id="inputPassword2" placeholder="Marcas">
       </div>
       <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">insertar</button>
       </div>
</form>
<table class="table table-success table-striped-columns">
<th> MARCA </th> 
{foreach from=$marcas item=$marca}
     
       <tr> <td>  {$marca->marcas} </td>  
       <td><button type="button" class="btn btn-danger">Eliminar</button></td>
       <td><button type="button" class="btn btn-success">editar</button></td>
       </tr>
        

 {/foreach}
</table>
{include file="footer.tpl"}
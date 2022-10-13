{include file="header.tpl"}
<h1>PRODUCTOS</h1>
{include file="formProductos.tpl"}
<table class="table table-success table-striped-columns">
<th> PRODUCTOS </th>
<th> CANTIDAD </th>
<th> PRECIO </th>

 {foreach from=$productos item=$producto}
     
        <tr> 
              <td>  {$producto->producto} </td> 
              <td>  {$producto->cantidad} </td> 
              <td>  {$producto->precio} </td> 
              <td><button type="button" class="btn btn-danger">Eliminar</button></td>
              <td><button type="button" class="btn btn-success">editar</button></td>
        </tr>
 {/foreach}      
 </table>
 {include file="footer.tpl"}

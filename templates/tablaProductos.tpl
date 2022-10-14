{include file="header.tpl"}
<h1>PRODUCTOS</h1>
{include file="formProductos.tpl"}
<table class="table table-success table-striped-columns" id="tabla">
<th> PRODUCTOS </th>
<th> CANTIDAD </th>
<th> PRECIO </th>

 {foreach from=$productos item=$producto}
     
        <tr> 
              <td>  {$producto->producto} </td> 
              <td>  {$producto->cantidad} </td> 
              <td>  {$producto->precio} </td> 
              <td> <a href='borrarProductos/{$producto->id_productos}'class="btn btn-danger" id="eliminar"> Eliminar </a></td>
              
              
        </tr>
 {/foreach}      
 </table>
 {include file="footer.tpl"}

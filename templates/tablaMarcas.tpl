{include file="header.tpl"}
<h1>MARCAS</h1>
{include file="formMarcas.tpl"}
<table class="table table-success table-striped-columns" id="tabla">
<th> MARCA </th> 
{foreach from=$marcas item=$marca}
     
       <tr> <td>  {$marca->marcas} </td>  
       <td><a href='borrarMarcas/{$marca->id_marcas}'class="btn btn-danger" id="eliminar"> Eliminar </a></td></td>
       <td><button type="button" class="btn btn-success">editar</button></td>
       </tr>
        

 {/foreach}
</table>
{include file="footer.tpl"}
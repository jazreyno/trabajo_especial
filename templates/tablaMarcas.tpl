{include file="header.tpl"}
<h1>MARCAS</h1>
{include file="formMarcas.tpl"}
<table class="table table-success table-striped-columns" id="tabla">
<th> MARCA </th> 
{foreach from=$marcas item=$marca}
   
       <tr> <td>  {$marca->marcas} </td>  
       {if isset($smarty.session.USER_ID)}
       <td><a href='borrarMarcas/{$marca->id_marcas}'class="btn btn-danger" > Eliminar </a></td>
       <td><a href='editarMarcasForm/{$marca->id_marcas}'class="btn btn-success"> Editar </a></td>
       </tr>
        
      {/if}
 {/foreach}
 
</table>
{include file="footer.tpl"}
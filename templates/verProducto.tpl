{include file="header.tpl"}
<table class="table table-success table-striped-columns" id="tabla">
<th> PRODUCTOS </th>
<th> CANTIDAD </th>
<th> PRECIO </th>
{foreach from=$productos item=$producto }
    <tr>
        {if !isset($smarty.session.USER_ID)}
            <td>{$producto->producto}</td>
            <td>{$producto->cantidad}</td>
            <td>{$producto->precio}</td>
            <td><a href='editarProductosForm/{$producto->id_productos}'class="btn btn-danger" id="eliminar" type="sumbit"> Editar</a></td>
        {else} 
            <td>{$producto->producto}</td>
            <td>{$producto->cantidad}</td>
            <td>{$producto->precio}</td>
            <td><a href='editarProductosForm/{$producto->id_productos}'class="btn btn-danger" id="eliminar" type="sumbit"> Editar</a></td>
        {/if}
    </tr>
{/foreach}
</table>



{include file="footer.tpl"}
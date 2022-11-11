{include file="header.tpl"}
<table class="table table-success table-striped-columns" id="tabla">
<h1> DETALLES </h1>
<th> PRODUCTOS </th>
<th> CANTIDAD </th>
<th> PRECIO </th>
<th> MARCAS </th>
{*este foreach me trae cada item de mi tabla productos y tambien lo recorre*}
{foreach from=$productos item=$producto }
    <tr>
            <td>{$producto->producto}</td>
            <td>{$producto->cantidad}</td>
            <td>{$producto->precio}</td>
            <td>{$producto->marcas}</td>
            {if isset($smarty.session.USER_ID)}
            <td><a href='editarProductosForm/{$producto->id_productos}'class="btn btn-success"  type="sumbit"> Editar</a></td>
            {/if}
    </tr>
{/foreach}
</table>



{include file="footer.tpl"}
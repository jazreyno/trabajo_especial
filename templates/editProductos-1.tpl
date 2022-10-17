{include file="header.tpl"}

{foreach from=$productos item=$producto }
         <form method="POST" action='editarProductos/{$producto->id_productos}'>
          <input type="text" name="producto_edit" placeholder="producto" value='{$producto->producto}' required>
          <input type="number" name="cantidad_edit" placeholder="cantidad" value='{$producto->cantidad}' required>
          <input type="number" name="precio_edit" placeholder="precio" value='{$producto->precio}' required>
  {/foreach}


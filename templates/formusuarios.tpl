{include file="header.tpl"}
<h1>Formulario Para Loguearse</h1>
    <form method="POST" action="validar">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" required name="email" aria-describedby="mailHelp" class="form-control">
        </div>
        <div class="form-group">
            <label for="contraseña">Password:</label>
            <input type="password" required name="contraseña" class="form-control">
        </div>

        {if $error} 
            <div>
                {$error}
            </div>
        {/if}
        <button type="submit"class="btn btn-secondary">Entrar</button>
    </form>
{include file="footer.tpl"}


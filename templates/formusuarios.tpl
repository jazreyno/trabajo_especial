{include file="header.tpl"}
<h1>LogIn</h1>
    <form method="POST" action="validar">
        <div class="form-group">
            <label for="email">mail</label>
            <input type="email" required name="email" aria-describedby="mailHelp">
        </div>
        <div class="form-group">
            <label for="contraseña">Password</label>
            <input type="password" required name="contraseña">
        </div>

        {if $error} 
            <div>
                {$error}
            </div>
        {/if}
        <button type="submit">Entrar</button>
    </form>
{include file="footer.tpl"}


<h1>Login</h1>
<form id="login" action="<?php echo url_for("home/validateLogin") ?>" method="post">
    <div class="login-box">
        <div>
            <label>Usuario</label>
            <input type="text" name="username"/>
        </div>
        <div>
            <label>Clave</label>
            <input type="password" name="password"/>
        </div>
        <button class="button">Entrar</button>
    </div>
</form>
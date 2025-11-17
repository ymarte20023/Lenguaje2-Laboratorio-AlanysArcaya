<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>registro</title>
</head>

<body>
    <!--1.2 Formulario de registro-->
    <div class="form">
        <h2>Resgistrase</h2>
        <form action="" method="post">
            <label>Nombre de Usuario</label>
            <input type="text" name="fullname" id="fullname">

            <label>Correo electronico</label>
            <input type="email" id="email" name="email">

            <label>Contraseña</label>
            <input type="password" id="pwd" name="pwd" required="Contraseña">

            <label for="confirm_pwd">Confirmar tu contraseña:</label>
            <input type="password" id="confirm_pwd" name="confirm_pwd" required placeholder="Repita su contraseña">
            <!--Boton para registrase-->
            <button type="submit">Registrase</button>
        </form>
    </div>
</body>
</html>
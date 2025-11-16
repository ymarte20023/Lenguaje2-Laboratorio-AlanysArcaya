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
        <form>
            <label>Nombre de Usuario</label>
            <input type="text" name="fullname" ide="fullname">

            <label>Correo electronico</label>
            <input type="email" id="email" name="email">

            <label>Contraseña</label>
            <input type="password" id="pwd" name="pwd" required>

            <label for="confirm_pwd">Confirmar:</label>
            <input type="password" id="confirm_pwd" name="confirm_pwd" required>
            <!--Boton para crear cuenta-->
            <button type="submit">Crear cuenta</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="registro.css">
</head>
<header>
    <nav class="navbar">
        <div class="logo">Desarrollo de aplicaciones web</div>
        <ul class="nav-links">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="registro.php">Registro</a></li>
        </ul>
    </nav>
</header>
<body>
    <!-- Formulario -->
    <div class="register-container">
        <h1>Registro de Usuario</h1>
                        <form action="registro.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre Completo</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Ingresa tu nombre">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required placeholder="ejemplo@correo.com">
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" required placeholder="••••••••">
            </div>
            <div class="form-group">
                <label for="confirm_contrasena">Confirmar Contraseña</label>
                <input type="password" id="confirm_contrasena" name="confirm_contrasena" required placeholder="••••••••">
            </div>
            <button type="submit" class="btn">Registrarse</button>
            <p class="login-link">¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
        </form>
    </div>
</body>
</html>








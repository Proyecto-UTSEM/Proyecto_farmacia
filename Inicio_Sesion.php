<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio Médico Santamaria - Iniciar Sesión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <!-- Panel Izquierdo -->
        <div class="left-panel">
            <div class="logo">
                <img src="imagenes/medical.png" alt="Logo Consultorio Médico" class="logo-img">
            </div>
            <h2>CONSULTORIO MEDICO SANTAMARIA</h2>
            <p class="subtext">Inicio de sesión seguro para doctores y personal.</p>
            
            <h3>Bienvenido de nuevo</h3>
            <p class="info">Accede con tu correo institucional y contraseña. Esta zona es para personal autorizado.</p>
            <p class="footer-text">Gracias por confiar en nuestros servicios.</p>
        </div>

        <!-- Panel Derecho (Formulario) -->
        <div class="right-panel">
            <h2>Iniciar sesión</h2>
            <form action="login.php" method="POST" class="login-form">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="Ingrese su correo" required>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" minlength="6" required>
                <small>Mínimo 6 caracteres. </small>

                <a href="#" class="link">¿Olvidaste tu contraseña?</a>

                <button type="submit" class="btn" fo>ENTRAR</button>
            </form>

            <p class="register-text">
                ¿No tienes cuenta? 
                <a href="registro.php" class="link">Registrarse</a> | 
                <a href="index.html" class="link">Regresar</a>
            </p>
        </div>
    </div>

    <footer class="footer">
        <p>© 2025 Consultorio Médico Santamaria. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

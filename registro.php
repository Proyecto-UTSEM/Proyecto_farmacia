<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio Médico Santamaria - Registro</title>
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
            <p class="info">Crea tu cuenta con tu correo institucional y contraseña para acceder al sistema.</p>
            <p class="footer-text">Gracias por confiar en nuestros servicios.</p>
        </div>

        <!-- Panel Derecho (Formulario de Registro) -->
        <div class="right-panel">
            <h2>Registrarse</h2>
            <form action="registro.php" method="POST" class="login-form">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="Ingrese su correo" required>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" minlength="6" required>
                <small>Mínimo 6 caracteres. Usa una frase segura para mayor protección.</small>

                <label for="confirm-password">Verificar contraseña</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Repite tu contraseña" minlength="6" required>

                <div class="show-password">
                    <input type="checkbox" id="togglePassword">
                    <label for="togglePassword">Mostrar contraseñas</label>
                </div>

                <button type="submit" class="btn">CREAR CUENTA</button>
            </form>
        </div>
    </div>

    <footer class="footer">
        <p>© 2025 Consultorio Médico Santamaria. Todos los derechos reservados.</p>
    </footer>

    <!-- Script para mostrar/ocultar contraseñas -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirm-password');

        togglePassword.addEventListener('change', () => {
            const type = togglePassword.checked ? 'text' : 'password';
            password.type = type;
            confirmPassword.type = type;
        });
    </script>
</body>
</html>

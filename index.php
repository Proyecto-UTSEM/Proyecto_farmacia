<?php
// index.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultorio Médico Santamaría</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

  <!-- Encabezado -->
  <header>
    <div class="logo">
      <img src="logo.png" alt="Logo Consultorio">
      <h2>CONSULTORIO MÉDICO SANTAMARÍA</h2>
    </div>
    <nav>
      <a href="#">Inicio</a>
      <a href="agendar.php">Agendar cita</a>
      <a href="contacto.php">Contacto</a>
    </nav>
  </header>

  <!-- Contenido principal -->
  <main>
    <div class="contenido">
      <h1>BIENVENIDO/A</h1>
      <p>Somos el Consultorio Médico Santamaría donde cuidamos de tu salud con profesionales calificados.</p>
      
      <h2>RECOMENDACIONES</h2>
      <p>En un esfuerzo por aumentar la esperanza de vida saludable.</p>

      <a href="agendar.php" class="btn-agendar">Agendar cita</a>
    </div>

    <div class="imagen">
      IMAGEN
    </div>
  </main>

  <!-- Pie de página -->
  <footer>
    &copy; <?php echo date("Y"); ?> Consultorio Médico Santamaría - Todos los derechos reservados.
  </footer>

</body>
</html>

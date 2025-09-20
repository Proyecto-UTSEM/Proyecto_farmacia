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

  <header>
    <div class="logo">
      <img src="././imagenes/medical.png" alt="Logo Consultorio">
      <h2>CONSULTORIO MÉDICO SANTAMARÍA</h2>
    </div>
    <nav>
      <a href="#">Inicio</a>
      <a href="agendar.php">Agendar cita</a>
      <a href="contacto.php">Contacto</a>
    </nav>
  </header>
  <main>
    <div class="contenido">
      <h1>BIENVENIDO/A</h1>
      <p>En el Consultorio Médico Santamaría creemos que una vida sana comienza con una atención de calidad.
        Por eso te ofrecemos servicios médicos con profesionalismo, respeto y un compromiso real con tu bienestar,contamos con un equipo de profesionales calificados que te acompañan con atención personalizada y humana en cada etapa de tu vida.</p>

      <h3>ESPECIALIDADES</h3>
      <ul class="especialidades">
        <li>Medicina General</li>
        <li>Pediatría</li>
        <li>Ginecología</li>
        <li>Cardiología</li>
        <li>Dermatología</li>
        <li>Neurología</li>
        <li>Ortopedia</li>
        <li>Psicología</li>
      </ul>

      <h3>RECOMENDACIONES</h3>
      <ul>
        <li>En un esfuerzo por aumentar la esperanza de vida saludable.</li>
        <li>Chequeos médicos regulares para una detección temprana de enfermedades.</li>
        <li>Incentivamos el cuidado de la salud como parte del bienestar integral.</li>
        <li>Apoyamos la importancia de los chequeos médicos constantes.</li>
        <li>Fomentar el hábito de chequeos de salud preventivos.</li>
        <li>Recomendamos mantener un estilo de vida activo.</li>
      </ul>

      <div class="btn-center" style="text-align: center;">
        <a href="agendar.php" class="btn-agendar">Agendar cita</a>
      </div>
    </div>

    <div class="imagen">
      IMAGEN
    </div>
  </main>
  <footer>
    &copy; <?php echo date("Y"); ?> Consultorio Médico Santamaría - Todos los derechos reservados.
  </footer>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio Médico Santamaría</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .formulario-cita {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;

        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            padding: 20px;
        }

        .formulario-paciente {
            display: flex;
            flex-direction: column;
            gap: 20px;
            /* separación entre filas */
        }

        /* Cada fila con 3 columnas */
        .grupo {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            /* 3 columnas iguales */
            gap: 15px;
        }

        /* Para que cada label quede encima del input */
        .grupo label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .grupo input {
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="././imagenes/medical.png" alt="Logo Consultorio">
            <h2>CONSULTORIO MÉDICO SANTAMARÍA</h2>
        </div>
        <nav>
            <a href="agendar.php">INICIO</a>
            <a href="contacto.php">MIS CITAS</a>
        </nav>
    </header>
    <main>
        <div class="formulario-cita">
            <h1>AGENDE SU CITA</h1>
            <p>Ingresa tus datos personales y selecciona una fecha y hora disponible</p>
            <div>
                <fieldset>
                    <div class="formulario-paciente">
                        <div class="grupo fila1">
                            <label for="">Nombre:</label>
                            <input type="text">
                            <label for="">Apellidos:</label>
                            <input type="text">
                            <label for="">CURP:</label>
                            <input type="text">
                        </div>

                        <div class="grupo fila2">
                            <label for="">Edad:</label>
                            <input type="number">
                            <label for="">Número telefónico:</label>
                            <input type="text">
                            <label for="">Motivo de la consulta (opcional):</label>
                            <input type="text">
                        </div>
                    </div>
                    <br>

                    <div style="display: flex; gap: 20px;  align-items: center;">
                        <div>
                            <fieldset>
                                <input type="date" id="fecha" name="fecha">
                            </fieldset>
                        </div>
                        <div>
                            <fieldset>
                                <input type="time" id="hora" name="hora">
                            </fieldset>
                        </div>
                    </div>
                    <div>
                        <a class="btn-agendar">Agendar Cita</a>
                    </div>
                </fieldset>
            </div>
        </div>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> Consultorio Médico Santamaría - Todos los derechos reservados.
    </footer>
</body>

</html>
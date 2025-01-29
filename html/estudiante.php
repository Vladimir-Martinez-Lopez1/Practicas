<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario del Estudiante</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/script.js" defer></script>
</head>
<body>
    <div class="contenedor-panel">
        <!-- Barra Lateral -->
        <aside class="barra-lateral">
            <div class="encabezado-barra">
                <h2>Escuela Secundaria Téc. 66</h2>
                <p>Administrador</p>
            </div>
            <nav class="navegacion-barra">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="estudiante.php">Historial</a></li>
                    <li><a href="reportes.php">Reportes</a></li>
                    <li><a href="trabajo-social.php">Trabajo Social</a></li>
                    <li><a href="horarios.php">Horarios</a></li>
                    <li><a href="login.html">Cerrar Sesión</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Contenido Principal -->
        <main class="contenido-principal">
            <!-- Encabezado -->
            <header class="encabezado-principal">
                <h1>Perfil del Estudiante</h1>
                <p>Instituto Estatal de Educación Pública de Oaxaca</p>
            </header>

            <!-- Información del Estudiante -->
            <section class="informacion-estudiante">
                <div class="tarjeta-estudiante">
                    <img src="recursos/icon-estudiante.jpeg" alt="Foto del estudiante">
                    <h3>Julieta Rojas Luna</h3>
                    <p>Estudiante</p>
                    <ul>
                        <li>Registrar NO: 412413BW</li>
                        <li>Rol: 1</li>
                        <li>Clase: Primero de Secundaria</li>
                        <li>Sección: A</li>
                    </ul>
                </div>

                <div class="botones-acciones">
                    <button>Imprimir</button>
                    <button>Vista previa PDF</button>
                    <button>Editar</button>
                    <button>Enviar PDF al correo</button>
                </div>
            </section>

            <!-- Pestañas Dinámicas -->
            <section class="seccion-informacion">
                <div class="pestanas">
                    <button class="activo" data-target="Historial">Historial de incidencias</button>
                    <button data-target="padres">Padres</button>
                    <button data-target="horario">Horario</button>
                </div>

                <!-- Contenido de las secciones -->
                <div class="contenido" id="perfil">
                    <h2>Perfil</h2>
                    <p>Bienvenido al perfil del estudiante.</p>
                </div>

                <div class="contenido oculto" id="padres">
                    <h2>Padres</h2>
                    <p>Información sobre los padres o tutores legales.</p>
                </div>

                <div class="contenido oculto" id="horario">
                    <h2>Horario</h2>
                    <!-- Tabla del horario aquí -->
                </div>

                <div class="contenido oculto" id="asistencia">
                    <h2>Asistencia</h2>
                    <p>Registro de asistencias del estudiante.</p>
                </div>

                <div class="contenido oculto" id="calificaciones">
                    <h2>Calificaciones</h2>
                    <p>Calificaciones obtenidas en las materias cursadas.</p>
                </div>

                <div class="contenido oculto" id="recibos">
                    <h2>Recibos</h2>
                    <p>Información sobre los recibos de pago.</p>
                </div>

                <div class="contenido oculto" id="documentos">
                    <h2>Documentos</h2>
                    <p>Documentos importantes relacionados con el estudiante.</p>
                </div>

                <!-- Sección de la Gráfica -->
                <div class="contenido oculto" id="grafica">
                    <h2>Gráfica de Ingresos y Gastos</h2>
                    <canvas id="chart" width="400" height="200"></canvas>
                </div>
            </section>
        </main>
    </div>
</body>
</html>

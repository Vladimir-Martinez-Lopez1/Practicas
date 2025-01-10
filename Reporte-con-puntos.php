<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar los datos enviados del formulario
    $nombreAlumno = $_POST['alumno'] ?? '';
    $grado = $_POST['grado'] ?? '';
    $grupo = $_POST['grupo'] ?? '';
    $faltas = isset($_POST['faltas']) ? $_POST['faltas'] : [];
    $faltasOtro = $_POST['faltas_otro'] ?? '';
    $modulo = $_POST['modulo'] ?? '';
    $asignatura = $_POST['asignatura'] ?? '';
    $reporto = $_POST['reporto'] ?? '';
    $observaciones = $_POST['observaciones'] ?? '';

    echo "<div style='text-align: center;'>";
    echo "<h3>Datos recibidos:</h3>";
    echo "<p>Alumno: $nombreAlumno</p>";
    echo "<p>Grado: $grado</p>";
    echo "<p>Grupo: $grupo</p>";
    echo "<p>Faltas: " . (!empty($faltas) ? implode(", ", $faltas) : "Ninguna") . "</p>";
    if (!empty($faltasOtro)) {
        echo "<p>Otro: $faltasOtro</p>";
    }
    echo "<p>Módulo: $modulo</p>";
    echo "<p>Asignatura: $asignatura</p>";
    echo "<p>Reportó: $reporto</p>";
    echo "<p>Observaciones: $observaciones</p>";
    echo "</div>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Incidencias de Alumnos</title>
</head>
<body style="text-align: center;">
    <h1>ESCUELA SECUNDARIA TÉCNICA NÚM. 66</h1>
    <h2>REPORTE DE INCIDENCIAS DE ALUMNOS</h2>

    <!-- Asegúrate de que el formulario apunte al mismo archivo -->
    <form method="post" style="display: inline-block; text-align: left;">
        <p>Cuilapam de Guerrero, Oax., A 
            <select name="dia">
                <?php for ($i = 1; $i <= 31; $i++) echo "<option>$i</option>"; ?>
            </select>
            DE 
            <select name="mes">
                <?php 
                $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                foreach ($meses as $mes) echo "<option>$mes</option>"; 
                ?>
            </select>
            DEL PRESENTE AÑO
            <select name="anio">
                <?php for ($i = 2025; $i <= 2035; $i++) echo "<option>$i</option>"; ?>
            </select>
        </p>

        <p>Del
            <select name="grado">
                <?php for ($i = 1; $i <= 3; $i++) echo "<option>$i</option>"; ?>
            </select>
            grado, grupo
            <select name="grupo">
                <?php foreach (['A', 'B', 'C', 'D'] as $grupo) echo "<option>$grupo</option>"; ?>
            </select>
        </p>

        <p>Comunico a usted que el alumno(a):
            <input type="text" name="alumno" style="width: 300px;" required>
        </p>

        <p>Incurrió en la(s) siguiente(s) falta(s):</p>
        <ul style="list-style-type: none; padding: 0;">
            <li><input type="checkbox" name="faltas[]" value="No se presentó a clases"> No se presentó a clases</li>
            <li><input type="checkbox" name="faltas[]" value="Falta de respeto al personal"> Falta de respeto al personal</li>
            <li><input type="checkbox" name="faltas[]" value="Por indisciplina en el salón"> Por indisciplina en el salón</li>
            <li><input type="checkbox" name="faltas[]" value="No portar adecuadamente el uniforme"> No portar adecuadamente el uniforme</li>
            <li><input type="checkbox" name="faltas[]" value="Agredir verbalmente a sus compañeros"> Agredir verbalmente a sus compañeros</li>
            <li><input type="checkbox" name="faltas[]" value="Destruir el material de sus compañeros"> Destruir el material de sus compañeros</li>
            <li><input type="checkbox" name="faltas[]" value="Presentar trabajos de mala calidad"> Presentar trabajos de mala calidad</li>
            <li><input type="checkbox" name="faltas[]" value="No cumple con sus tareas"> No cumple con sus tareas</li>
            <li><input type="checkbox" name="faltas[]" value="Se retira de la escuela"> Se retira de la escuela</li>
            <li><input type="checkbox" name="faltas[]" value="Pintar en el inmueble"> Pintar en el inmueble</li>
            <li><input type="checkbox" name="faltas[]" value="Portar, usar el celular"> Portar, usar el celular</li>
            <li><input type="checkbox" name="faltas[]" value="Traer revistas inadecuadas"> Traer revistas inadecuadas</li>
            <li><input type="checkbox" name="faltas[]" value="Indisciplina en actos cívicos"> Indisciplina en actos cívicos</li>
            <li><input type="checkbox" name="faltas[]" value="Traer aliento alcohólico o fumar"> Traer aliento alcohólico o fumar</li>
            <li><input type="checkbox" name="faltas[]" value="No trae material de trabajo"> No trae material de trabajo</li>
            <li><input type="checkbox" name="faltas[]" value="Golpear a su compañero"> Golpear a su compañero</li>
            <li><input type="checkbox" name="faltas[]" value="Impuntualidad constante"> Impuntualidad constante</li>
            <li><input type="checkbox" name="faltas[]" value="No asistir al homenaje"> No asistir al homenaje</li>
            <li>Otro: <input type="text" name="faltas_otro" style="width: 300px;"></li>
        </ul>

        <p>En el módulo de:
            <input type="text" name="modulo" style="width: 300px;">
        </p>

        <p>En la asignatura:
            <input type="text" name="asignatura" style="width: 300px;">
        </p>

        <p>Reportó:
            <input type="text" name="reporto" style="width: 300px;">
        </p>

        <p>Observaciones:
            <textarea name="observaciones" rows="4" cols="50"></textarea>
        </p>

        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</body>
</html>

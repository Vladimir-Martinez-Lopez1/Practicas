<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar los datos enviados del formulario
    $nombreAlumno = $_POST['nombre_alumno'];
    $grado = $_POST['grado'];
    $grupo = $_POST['grupo'];
    $asistiraCon = $_POST['asistira_con'];
    $razones = $_POST['razones'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];

    echo "<div align='center'>";
    echo "<h3>Datos recibidos:</h3>";
    echo "<p>Alumno: $nombreAlumno</p>";
    echo "<p>Grado: $grado</p>";
    echo "<p>Grupo: $grupo</p>";
    echo "<p>Asistirá con: $asistiraCon</p>";
    echo "<p>Razones: $razones</p>";
    echo "<p>Día: $dia</p>";
    echo "<p>Mes: $mes</p>";
    echo "<p>Año: $anio</p>";
    echo "</div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Trabajo Social</title>
</head>
<body align="center">
    <h1>ESCUELA SECUNDARIA TÉCNICA NÚM. 66</h1>
    <h2>COORDINACIÓN DE SERVICIOS EDUCATIVOS COMPLEMENTARIOS</h2>
    <h3>TRABAJO SOCIAL</h3>

    <form method="POST">
        <p>POR ESTE MEDIO EL DEPARTAMENTO DE TRABAJO SOCIAL INFORMA A USTED QUE EL ALUMNO: 
            <input type="text" name="nombre_alumno" required>
        </p>

        <p>DEL
            <select name="grado">
                <?php for ($i = 1; $i <= 3; $i++) echo "<option>$i</option>"; ?>
            </select>
            GRADO, GRUPO
            <select name="grupo">
                <?php foreach (['A', 'B', 'C', 'D'] as $grupo) echo "<option>$grupo</option>"; ?>
            </select>
        </p>

        <p>ASISTIRÁ CON
            <input type="text" name="asistira_con" required>
        </p>

        <p>POR RAZONES DE
            <input type="text" name="razones" required>
        </p>

        <p>EL DÍA
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

        <p>ATTE<br>
        ENRIQUE ESQUIVEL<br>
        TRABAJADOR SOCIAL</p>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>

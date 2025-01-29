<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar los datos enviados del formulario
    $nombreAlumno = $_POST['nombre_alumno'];
    $grado = $_POST['grado'];
    $grupo = $_POST['grupo'];
    $motivo = $_POST['motivo'];
    $capitulo = $_POST['capitulo'];
    $articulo = $_POST['articulo'];
    $fraccion = $_POST['fraccion'];
    $inciso = $_POST['inciso'];
    $diasSuspension = $_POST['dias_suspension'];
    $diaInicio = $_POST['inicio_dia'];
    $mesInicio = $_POST['inicio_mes'];
    $anioInicio = $_POST['inicio_anio'];
    $diaFin = $_POST['fin_dia'];
    $mesFin = $_POST['fin_mes'];
    $anioFin = $_POST['fin_anio'];
    $nombreTutor = $_POST['nombre_tutor'];

    echo "<h3>Datos recibidos:</h3>";
    echo "<p>Nombre del alumno: $nombreAlumno</p>";
    echo "<p>Grado: $grado</p>";
    echo "<p>Grupo: $grupo</p>";
    echo "<p>Motivo: $motivo</p>";
    echo "<p>Capítulo: $capitulo</p>";
    echo "<p>Artículo: $articulo</p>";
    echo "<p>Fracción: $fraccion</p>";
    echo "<p>Inciso: $inciso</p>";
    echo "<p>Días de suspensión: $diasSuspension</p>";
    echo "<p>Inicio de la suspensión: $diaInicio de $mesInicio del $anioInicio</p>";
    echo "<p>Fin de la suspensión: $diaFin de $mesFin del $anioFin</p>";
    echo "<p>Nombre del tutor: $nombreTutor</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Suspensión de Clases</title>
</head>
<body>
    <h1 style="text-align: center;">ESCUELA SECUNDARIA TÉCNICA NÚM. 66</h1>
    <h2 style="text-align: center;">REPORTE DE INCIDENCIAS DE ALUMNOS</h2>
    <h3 style="text-align: center;">ASUNTO: SUSPENSIÓN DE CLASES</h3>
    
    <form method="POST">
        <p>Cuilapam de Guerrero, Oax., a 
            <select name="dia">
                <?php for ($i = 1; $i <= 31; $i++) echo "<option>$i</option>"; ?>
            </select>
            de
            <select name="mes">
                <?php 
                $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                foreach ($meses as $mes) echo "<option>$mes</option>"; 
                ?>
            </select>
            de
            <select name="anio">
                <?php for ($i = 2025; $i <= 2035; $i++) echo "<option>$i</option>"; ?>
            </select>.
        </p>

        <p>C. <br>
        NOMBRE DEL (A) PADRE, MADRE O TUTOR (A): 
        <input type="text" name="nombre_tutor" required></p>

        <p>La Coordinación de Servicios Educativos Complementarios, en coordinación con la Dirección de la Escuela Secundaria Técnica No. 66 con clave 20DST00621, por medio del presente comunica a usted que el alumno (a): 
            <input type="text" name="nombre_alumno" required>.
        </p>

        <p>Del 
            <select name="grado">
                <?php for ($i = 1; $i <= 3; $i++) echo "<option>$i</option>"; ?>
            </select> 
            grado, grupo 
            <select name="grupo">
                <?php foreach (['A', 'B', 'C', 'D'] as $grupo) echo "<option>$grupo</option>"; ?>
            </select>.
        </p>

        <p>Violó el Reglamento Interno fundamentado en el acuerdo 97, donde se establece la organización y funcionamiento de la escuela, al que se sujetará el alumnado, por el motivo: 
            <input type="text" name="motivo" required>.
        </p>

        <p>Que lo establece el Capítulo: 
            <input type="text" name="capitulo" required>, Artículo: 
            <input type="text" name="articulo" required>, Fracción: 
            <input type="text" name="fraccion" required>, Inciso: 
            <input type="text" name="inciso" required>.
        </p>

        <p>Se hace acreedor a una sanción disciplinaria correspondiente a 
            <input type="number" name="dias_suspension" min="1" required> día(s) hábil(es) de SUSPENSIÓN DE CLASES siendo los siguientes: 
            del 
            <select name="inicio_dia">
                <?php for ($i = 1; $i <= 31; $i++) echo "<option>$i</option>"; ?>
            </select>
            de
            <select name="inicio_mes">
                <?php 
                foreach ($meses as $mes) echo "<option>$mes</option>"; 
                ?>
            </select>
            del 
            <select name="inicio_anio">
                <?php for ($i = 2025; $i <= 2035; $i++) echo "<option>$i</option>"; ?>
            </select>
            al
            <select name="fin_dia">
                <?php for ($i = 1; $i <= 31; $i++) echo "<option>$i</option>"; ?>
            </select>
            de
            <select name="fin_mes">
                <?php 
                foreach ($meses as $mes) echo "<option>$mes</option>"; 
                ?>
            </select>
            del 
            <select name="fin_anio">
                <?php for ($i = 2025; $i <= 2035; $i++) echo "<option>$i</option>"; ?>
            </select>.
        </p>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>

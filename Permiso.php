<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreAlumno = $_POST['nombre_alumno'];
    $grado = $_POST['grado'];
    $grupo = $_POST['grupo'];
    $motivo = $_POST['motivo'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $materias = isset($_POST['materias']) ? implode(', ', $_POST['materias']) : 'Ninguna';
    $firmas = isset($_POST['firmas']) ? implode(', ', $_POST['firmas']) : 'Ninguna';

    echo "<div style='text-align: center;'>";
    echo "<h3>Datos recibidos:</h3>";
    echo "<p>Alumno: $nombreAlumno</p>";
    echo "<p>Grado: $grado</p>";
    echo "<p>Grupo: $grupo</p>";
    echo "<p>Motivo: $motivo</p>";
    echo "<p>Día: $dia</p>";
    echo "<p>Mes: $mes</p>";
    echo "<p>Año: $anio</p>";
    echo "<p>Materias seleccionadas: $materias</p>";
    echo "<p>Firmas seleccionadas: $firmas</p>";
    echo "</div>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario Escuela</title>
</head>
<body style="text-align: center;">
    <h1>INSTITUTO ESTATAL DE EDUCACIÓN PÚBLICA DE OAXACA</h1>
    <h2>DEPARTAMENTO DE EDUCACIÓN SECUNDARIA</h2>
    <h3>ESCUELA SECUNDARIA TÉCNICA NÚM. 66</h3>
    <p>CLAVE 20DST00621</p>

    <form method="POST" style="display: inline-block; text-align: left;">
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
            </select>
        </p>

        <p>El Departamento de Trabajo Social se permite comunicar a usted que el alumno(a): 
            <input type="text" name="nombre_alumno" required style="width: 300px;">
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

        <p>Por motivo
            <input type="text" name="motivo" required style="width: 300px;">
        </p>

        <p>tendrá permiso el (los) día(s)
            <select name="dia_permiso">
                <?php for ($i = 1; $i <= 31; $i++) echo "<option>$i</option>"; ?>
            </select>
            de
            <select name="mes_permiso">
                <?php foreach ($meses as $mes) echo "<option>$mes</option>"; ?>
            </select>
            del presente año
        </p>

        <h4>Materias:</h4>
        <ul style="list-style-type: none; padding: 0;">
            <li><input type="checkbox" name="materias[]" value="Español"> Español</li>
            <li><input type="checkbox" name="materias[]" value="Matemáticas"> Matemáticas</li>
            <li><input type="checkbox" name="materias[]" value="Inglés"> Inglés</li>
            <li><input type="checkbox" name="materias[]" value="Ciencias"> Ciencias</li>
            <li><input type="checkbox" name="materias[]" value="Sociales"> Sociales</li>
            <li><input type="checkbox" name="materias[]" value="Artes"> Artes</li>
            <li><input type="checkbox" name="materias[]" value="E. Física"> E. Física</li>
            <li><input type="checkbox" name="materias[]" value="Tecnología"> Tecnología</li>
        </ul>

        <h4>Firmas:</h4>
        <p>
            <input type="checkbox" name="firmas[]" value="Padre o Tutor"> <strong>PADRE O TUTOR:</strong>
            ____________________________________________
        </p>

        <p>
            <input type="checkbox" name="firmas[]" value="Trabajo Social"> <strong>TRABAJO SOCIAL:</strong>
            Enrique J. Esquivel Hernández
        </p>

        <p>
            <input type="checkbox" name="firmas[]" value="Subdirección de la Escuela"> <strong>SUBDIRECCIÓN DE LA ESCUELA:</strong>
            Prof. Rolando Pérez Castellanos
        </p>

        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</body>
</html>

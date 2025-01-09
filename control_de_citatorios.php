<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citación Escolar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            width: 80%;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .center-title {
            text-align: center;
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        .right-title {
            text-align: right;
            margin-bottom: 20px;
        }
        input, select, textarea {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            box-sizing: border-box;
        }
        .inline {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .inline input {
            width: auto;
            flex-grow: 1;
        }
        .form-footer {
            text-align: center;
            margin-top: 20px;
        }
        .form-footer input {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .form-footer input:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="center-title">
            ESCUELA SECUNDARIA TÉCNICA N° 66
        </div>
        <div class="center-title">
            CLAVE: 20DST00612
        </div>
        <div class="center-title">
            CUILÁPAM DE GUERRERO, OAX
        </div>
        <div class="right-title">
            Cuilápam de Guerrero, Oax, 
            <input type="text" name="dia" placeholder="Día" style="width: 60px;" required> 
            de 
            <input type="text" name="mes" placeholder="Mes" style="width: 120px;" required> 
            de 20
            <input type="text" name="anio" placeholder="Año" style="width: 60px;" required>.
        </div>

        <form action="procesar_citacion.php" method="POST">
            <p>
                C. <input type="text" name="nombre_tutor" placeholder="Nombre del Padre o Tutor" style="width: 250px;" required>,
            </p>

            <p>
                Por medio del presente, la titular de la Coordinación de Servicios Educativos Complementarios, en coordinación con la Dirección de la Escuela, de la manera más atenta, le citan con el objetivo de tratar asuntos relacionados con el aprovechamiento académico y conductual de su hijo(a):
                <input type="text" name="nombre_alumno" placeholder="Nombre del Alumno(a)" style="width: 250px;" required>, del 
                <select name="grado" style="width: 60px;" required>
                    <option value="">Seleccione el grado</option>
                    <option value="1">1°</option>
                    <option value="2">2°</option>
                    <option value="3">3°</option>
                </select> grado, grupo 
                <input type="text" name="grupo" placeholder="Grupo" style="width: 60px;" required>.
            </p>

            <p>
                Le solicitamos su puntual asistencia a las 
                <input type="text" name="hora" placeholder="Hora" style="width: 100px;" required>, del día 
                <input type="text" name="dia_cita" placeholder="Día" style="width: 60px;" required> de 
                <input type="text" name="mes_cita" placeholder="Mes" style="width: 120px;" required> de 20
                <input type="text" name="anio_cita" placeholder="Año" style="width: 60px;" required>.
            </p>

            <p>
                Agradecemos de antemano su atención y quedamos a su disposición para cualquier duda o aclaración.
            </p>

            <div class="form-footer">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>

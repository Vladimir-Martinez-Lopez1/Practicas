<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Escolar</title>
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
        }
        .center-title {
            text-align: center;
            font-weight: bold;
            font-size: 1.2em;
        }
        .right-title {
            text-align: right;
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
        .signatures {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .signatures div {
            text-align: center;
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="center-title">
            ESCUELA SECUNDARIA TÉCNICA N° 66
        </div>
        <div class="center-title">
            ASUNTO: INFORMACIÓN DE SALUD
        </div>
        <div class="right-title">
            Cuilápam de Guerrero, Oax, 
            <input type="text" name="dia" placeholder="Día" style="width: 60px;" required> 
            de 
            <input type="text" name="mes" placeholder="Mes" style="width: 120px;" required> 
            de 20 
            <input type="text" name="anio" placeholder="Año" style="width: 60px;" required>.
        </div>
        
        <form action="procesar_informacion.php" method="POST">
            <p>
                Por medio del presente le comunico que el (la) alumno (a) 
                <input type="text" name="nombre_alumno" placeholder="Nombre del Alumno(a)" style="width: 250px;" required>, 
                del 
                <select name="grado" style="width: 60px;" required>
                    <option value="">Seleccione el grado</option>
                    <option value="1">1°</option>
                    <option value="2">2°</option>
                    <option value="3">3°</option>
                </select> 
                grado, grupo 
                <input type="text" name="grupo" placeholder="Grupo" style="width: 60px;" required>.
            </p>
            
            <p>
                Actualmente presenta como diagnóstico:
                <textarea name="diagnostico" placeholder="Escriba el diagnóstico" rows="3" required></textarea>
            </p>
            
            <p>
                Motivo por el cual 
                <textarea name="motivo" placeholder="Motivo" rows="3" required></textarea>, 
                por lo que solicitamos su comprensión y apoyo a partir del 
                <input type="text" name="fecha_inicio" placeholder="Fecha de inicio" style="width: 150px;" required> 
                hasta nueva orden.
            </p>
            
            <p>
                <strong>RECOMENDACIONES:</strong> 
                <textarea name="recomendaciones" placeholder="Escriba las recomendaciones" rows="3"></textarea>
            </p>
            
            <p>
                Agradeciendo de antemano la atención prestada al presente y haciendo de conocimiento, aprovechamos para enviarle un cordial saludo.
            </p>
            
            <div class="signatures">
                <div>
                    <strong>SERVICIO MÉDICO</strong><br>
                    <input type="text" name="firma_doctora" placeholder="Nombre de la Doctora" style="width: 80%;" required>
                </div>
                <div>
                    <strong>DIRECTOR DE LA ESCUELA</strong><br>
                    <input type="text" name="firma_director" value=" MTRO.Ultiminio Gallo González" readonly style="width: 80%;">
                </div>
            </div>
            
            <div class="form-footer">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>

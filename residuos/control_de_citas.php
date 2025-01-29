<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Citas Médicas</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        th {
            background-color: #f4f4f4;
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
            CONTROL DE CITAS
        </div>
        <div class="right-title">
            Cuilápam de Guerrero, Oax.
        </div>
        
        <form action="procesar_citas.php" method="POST">
            <p>
                <strong>Médico:</strong> 
                <input type="text" name="medico" placeholder="Nombre del Médico" required>
            </p>
            <p>
                <strong>Servicio Médico:</strong> 
                <input type="text" name="servicio_medico" placeholder="Nombre del Servicio Médico" required>
            </p>

            <table>
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora de Consulta</th>
                        <th>Nombre</th>
                        <th>M</th>
                        <th>F</th>
                        <th>Observación</th>
                        <th>Diagnóstico</th>
                    </tr>
                </thead>
                <tbody id="citas-table-body">
                    <tr>
                        <td><input type="date" name="fecha[]" required></td>
                        <td><input type="time" name="hora[]" required></td>
                        <td><input type="text" name="nombre[]" placeholder="Nombre del Paciente" required></td>
                        <td><input type="radio" name="sexo[0]" value="M" required></td>
                        <td><input type="radio" name="sexo[0]" value="F" required></td>
                        <td><input type="text" name="observacion[]" placeholder="Observación"></td>
                        <td><input type="text" name="diagnostico[]" placeholder="Diagnóstico"></td>
                    </tr>
                </tbody>
            </table>
            
            <div style="text-align: center; margin: 20px 0;">
                <button type="button" onclick="agregarFila()">Agregar otra cita</button>
            </div>
            
            <div class="form-footer">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>

    <script>
        function agregarFila() {
            const tableBody = document.getElementById('citas-table-body');
            const rowCount = tableBody.rows.length;
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td><input type="date" name="fecha[]" required></td>
                <td><input type="time" name="hora[]" required></td>
                <td><input type="text" name="nombre[]" placeholder="Nombre del Paciente" required></td>
                <td><input type="radio" name="sexo[${rowCount}]" value="M" required></td>
                <td><input type="radio" name="sexo[${rowCount}]" value="F" required></td>
                <td><input type="text" name="observacion[]" placeholder="Observación"></td>
                <td><input type="text" name="diagnostico[]" placeholder="Diagnóstico"></td>
            `;
            tableBody.appendChild(newRow);
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pase de Salida</title>
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
      .header {
          text-align: center;
          font-weight: bold;
          margin-bottom: 20px;
      }
      p {
          margin: 10px 0;
      }
      input[type="text"], input[type="date"], select {
          display: inline-block;
          padding: 5px 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          margin-left: 10px;
      }
      .form-footer {
          text-align: center;
          margin-top: 20px;
      }
      .form-footer input[type="submit"] {
          padding: 10px 20px;
          background-color: #007BFF;
          color: white;
          border: none;
          border-radius: 5px;
          cursor: pointer;
      }
      .form-footer input[type="submit"]:hover {
          background-color: #0056b3;
      }
      .signature-section {
          margin-top: 30px;
      }
      .signature-row {
          display: flex;
          justify-content: space-between;
          align-items: center;
          margin-top: 20px;
      }
      .signature {
          text-align: center;
          width: 30%;
      }
      .signature input[type="text"] {
          width: 90%;
      }
   </style>
</head>
<body>

    <div class="form-container">
        <p class="header">ESCUELA SECUNDARIA TÉCNICA NÚM. 66</p>
        <p class="header">20DST00621</p>
        <p class="header">=PASE DE SALIDA=</p>

        <form action="procesar_formulario.php" method="POST">
            <p>NOMBRE DEL ALUMNO (A):
                <input type="text" id="alumno" name="alumno" placeholder="Nombre del alumno" required>
            </p>
            <p>GRADO:
                <select id="grado" name="grado" required>
                    <option value="">Seleccione</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                GRUPO:
                <select id="grupo" name="grupo" required>
                    <option value="">Seleccione</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                </select>
                 MOTIVO:
                <input type="text" id="motivo" name="motivo" placeholder="Motivo de la salida" required>
            </p>
            <p>HORA DE SALIDA:
                <input type="text" id="hora_salida" name="hora_salida" placeholder="Ejemplo: 10:30 AM" required>
               HORA DE REGRESO:
                <input type="text" id="hora_regreso" name="hora_regreso" placeholder="Ejemplo: 12:30 PM" required>
            </p>
            <p>CUILAPAN DE GUERRERO, OAXACA, OAX. A:
                <input type="date" id="fecha" name="fecha" required> .
            </p>

            <div class="signature-section">
                <div class="signature-row">
                    <div class="signature">
                        <p>EL SOLICITANTE</p>
                        <p>. </p>
                        <p>C. <input type="text" id="solicitante" name="solicitante" placeholder="Nombre del solicitante" required></p>
                    </div>
                    <div class="signature">
                        <p>TRABAJO SOCIAL</p>
                        <p>. </p>
                        <p>ENRIQUE J ESQUIVEL HERNÁNDEZ</p>
                    </div>
                    <div class="signature">
                        <p>SUBDIRECCIÓN DE LA ESCUELA</p>
                        <p>. </p>
                        <p>ROLANDO PÉREZ CASTELLANOS</p>
                    </div>
                </div>
            </div>

            <div class="form-footer">
                <input type="submit" value="Generar Pase">
            </div>
        </form>
    </div>

</body>
</html>
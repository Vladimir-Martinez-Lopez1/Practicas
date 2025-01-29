<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Justificante de Retardo</title>
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
      .center-text {
          text-align: center;
          font-weight: bold;
          margin-bottom: 20px;
      }
   </style>
</head>
<body>

    <div class="form-container">
        <p class="center-text">ESCUELA SECUNDARIA TÉCNICA NÚM. 66</p>
        <p class="center-text">COORDINACIÓN DE SERVICIOS EDUCATIVOS COMPLEMENTARIOS</p>
        <p class="center-text">TRABAJO SOCIAL</p>

        <form action="procesar_formulario.php" method="POST">
            <p>POR ESTE MEDIO SOLICITO DE SU APOYO PARA QUE EL ALUMNO:
                <input type="text" id="alumno" name="alumno" placeholder="Nombre del alumno" required>.
            DEL
                <select id="grado" name="grado" required>
                    <option value="">Seleccione</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                GRUPO
                <select id="grupo" name="grupo" required>
                    <option value="">Seleccione</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                </select>.
            </p>
            <p>SE LE JUSTIFIQUE EL RETARDO, DEBIDO A QUE ATENDIÓ UN LLAMADO QUE LE SOLICITÓ EL DEPARTAMENTO DE TRABAJO SOCIAL, EL DÍA:
                <input type="date" id="fecha" name="fecha" required>.
            </p>
            <center><p>
                <input type="text" id="campo1" name="campo1" placeholder="Campo adicional" required>  :
                <input type="text" id="campo2" name="campo2" placeholder="Otro campo adicional" required>.
            </p></center>

            <p class="center-text">ATENTAMENTE</p>
            <p class="center-text">ENRIQUE ESQUIVEL</p>
            <p class="center-text">TRABAJADOR SOCIAL</p>

            <div class="form-footer">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>

</body>
</html>
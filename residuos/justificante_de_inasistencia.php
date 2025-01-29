<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      body {
          font-family: Arial, sans-serif;
          margin: 20px;
      }
      .header {
          text-align: center;
          margin-bottom: 20px;
      }
      .header img {
          height: 80px;
          margin: 0 10px;
      }
      .form-container {
          width: 80%;
          margin: auto;
          border: 1px solid #ccc;
          padding: 20px;
          border-radius: 10px;
      }
      .form-group {
          margin-bottom: 15px;
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
   </style>
</head>
<body>

    <div class="form-container">
        <p>SERVICIOS COMPLEMENTARIOS (TRABAJO SOCIAL)  <p align="right">ASUNTO: JUSTIFICANTE DE INASISTENCIA</p> PRESENTE. </p> 
        <form action="procesar_formulario.php" method="POST">
            <p>Por medio de la presente el servicio de la institución, le solicita de la manera más atenta y respetuosa que JUSTIFIQUE la inasistencia del alumno (a)
                <input type="text" id="nombre" name="nombre" placeholder="Escriba el nombre completo" required>
            del grado:
                <select id="grado" name="grado" required>
                    <option value="">Seleccione</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            y grupo:
                <select id="grupo" name="grupo" required>
                    <option value="">Seleccione</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                </select>
             correspondiente al (os) módulos
                <input type="text" id="modulos" name="modulos" placeholder="Escriba los módulos" required>
             del día:
                <input type="date" id="fecha" name="fecha" required>
             , ya que será retirado de la institución por problemas de salud.</p>

            <p>Por la atención a la presente, les reiteramos nuestro agradecimiento.</p>
             <center> <p><strong>ATENTAMENTE</strong></p> </center>

            <p>Dra. <input type="text" id="dra" name="dra" placeholder="Escriba el nombre de la Dra.">
               Enfermera. <input type="text" id="enfermera" name="enfermera" placeholder="Escriba el nombre de la Enfermera">
            </p>

            <div class="form-footer">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>
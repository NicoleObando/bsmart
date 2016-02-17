<?php
 session_start();
 include_once('NotasCollector.php');
 //$id = $_POST['ID'];
 
 
 $anio = $_POST['anio'];
 $nota1 = $_POST['nota1'];
 $nota2 = $_POST['nota2'];
 $nota3 = $_POST['nota3'];
 $nota4 = $_POST['nota4'];
 $promedio = $_POST['promedio'];
 $recuperacion = $_POST['recuperacion'];
 
 $NotasCollectorObj = new NotasCollector();
 $NotasCollectorObj->insertNotas($anio, (int)$nota1, (int)$nota2, (int)$nota3, (int)$nota4, (int)$promedio, (int)$recuperacion);

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>B-Smart</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
     
   <h3>Ingresado Exitosamente</h3>
   </head>
<body>
  
      <form action="Notas_list.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>

<?php
session_start();

 include_once('ActividadCollector.php');
 include_once('Actividad.php');

 $id = $_GET['id'];
 $ActividadCollectorObj = new ActividadCollector();
 $ActividadCollectorObj->deleteActividad($id);
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>B-Smart</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
   
   <h3>Eliminacion Exitosa</h3>
   </head>
<body>
  
      <form action="Actividad_list.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>

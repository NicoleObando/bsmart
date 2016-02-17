<?php
session_start();
 include_once('ActividadCollector.php');
 //include_once('Docente.php');

 $id_actividad = $_POST['id_actividad'];
 $nombre = $_POST['nombre'];
 $descripcion = $_POST['descripcion'];
 $estado = $_POST['estado'];
 $fecha = $_POST['fecha'];

//echo  $cargo;		

 $ActividadCollectorObj = new ActividadCollector();
 $ActividadCollectorObj->updateActividad($id_actividad, $nombre, $descripcion, $estado, $fecha);

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0"> 
<title>B-Smart</title>
    <!-- Estilos CSS vinculados -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
   
   <h3>Actualizacion Exitosamente</h3>
   </head>
<body>
  
      <form action="Actividad_list.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>

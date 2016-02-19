<?php
session_start();
 include_once('SesionCollector.php');
 //include_once('Sesion.php');

 $id_sesion = $_POST['id_sesion'];
 $usuario = $_POST['usuario'];
 $pasw = $_POST['pasw'];
 

//echo  $cargo;		

 $SesionCollectorObj = new SesionCollector();
 $SesionCollectorObj->updateSesion($id_sesion,$usuario,$pasw);

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
  
      <form action="Sesion_list.php" method="Post">
         <div>
         <input type="submit" class="btn btn-primary" name="Regresar al inicio" value="Retornar">
         </div>

      </form>
   </body>
</html>

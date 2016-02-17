<?php		

include_once('Actividad.php');
include_once('Collector.php');

class ActividadCollector extends Collector
{
  
  function showActividad() {
    $rows = self::$db->getRows("SELECT * FROM actividad ");        
    $arrayActividad= array();        
    foreach ($rows as $c){
      $aux = new Actividad($c{'id_actividad'},$c{'nombre'},$c{'descripcion'},$c{'estado'},$c{'fecha'});

      array_push($arrayActividad, $aux);
    }
    return $arrayActividad;        
  }

  function showActividadId($id) {

    $row = self::$db->getRow("SELECT * FROM actividad where id_actividad = '$id'");   
    
    $Actividad = new Actividad($row{'id_actividad'},$row{'nombre'},$row{'descripcion'},$row{'estado'},$row{'fecha'});
    return $Actividad;        
  }


 
  function updateActividad($id_actividad, $nombre, $descripcion, $estado, $fecha) {
	
	//echo $cargo;
    $update = self::$db->getRow("Update actividad set nombre='$nombre',descripcion='$descripcion',estado='$estado',fecha='$fecha' where id_actividad='$id_actividad'");             
 return 1;  
  }

  function deleteActividad($id) {

 $delete = self::$db->getRow("Delete from actividad where id_actividad= '$id'");   
   return 1;          
  }

  function insertActividad($nombre, $descripcion, $estado, $fecha) {
    $new_row = self::$db->getRow("Insert into actividad (nombre, descripcion, estado, fecha) values ('$nombre','$descripcion','$estado','$fecha')");
 return 1;               
  }



}
?>


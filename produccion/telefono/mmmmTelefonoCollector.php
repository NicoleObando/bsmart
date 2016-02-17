<?php		

include_once('Telefono.php');
include_once('Collector.php');

class TelefonoCollector extends Collector
{
  
  function showTelefono() {
    $rows = self::$db->getRows("SELECT * FROM telefono ");        
    $arrayTelefono= array();        
    foreach ($rows as $c){
      $aux = new Telefono($c{'id_telefono'},$c{'codigo_pais'},$c{'codigo_ciudad'},$c{'numero_telefono'},$c{'tipo_telefono'});

      array_push($arrayTelefono, $aux);
    }
    return $arrayTelefono;        
  }

  function showTelefonoId($id) {

    $row = self::$db->getRow("SELECT * FROM telefono where id_telefono = '$id'");   
    
    $Telefono = new Telefono($row{'id_telefono'},$row{'codigo_pais'},$row{'codigo_ciudad'},$row{'numero_telefono'},$row{'tipo_telefono'});
    return $Telefono;        
  }


 
  function updateTelefono($id_telefono, $codigo_pais, $codigo_ciudad, $numero_telefono, $tipo_telefono) {
	
	//echo $cargo;
    $update = self::$db->getRow("Update telefono set codigo_pais='$codigo_pais',codigo_ciudad='$codigo_ciudad',numero_telefono='$numero_telefono',tipo_telefono='$tipo_telefono' where id_actividad='$id_actividad'");             
 return 1;  
  }

  function deleteTelefono($id) {

 $delete = self::$db->getRow("Delete from telefono where id_telefono= '$id'");   
   return 1;          
  }

  function insertTelefono($codigo_pais, $codigo_ciudad, $numero_telefono, $tipo_telefono) {
    $new_row = self::$db->getRow("Insert into telefono (codigo_pais, codigo_ciudad, numero_telefono, tipo_telefono) values ('$codigo_pais','$codigo_ciudad','$numero_telefono','$tipo_telefono')");
 return 1;               
  }



}
?>


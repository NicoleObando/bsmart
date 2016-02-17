<?php		

include_once('Direccion.php');
include_once('Collector.php');

class DireccionCollector extends Collector
{
  
  function showDireccion() {
    $rows = self::$db->getRows("SELECT * FROM direccion ");        
    $arrayDireccion= array();        
    foreach ($rows as $c){
      $aux = new Direccion($c{'id_direccion'},$c{'direccion_principal'},$c{'direccion_secundaria'},$c{'direccion_transversal'});

      array_push($arrayDireccion, $aux);
    }
    return $arrayDireccion;        
  }

  function showDireccionId($id) {

    $row = self::$db->getRow("SELECT * FROM direccion where id_direccion = '$id'");   
    
    $Direccion = new Direccion($row{'id_direccion'},$row{'direccion_principal'},$row{'direccion_secundaria'},$row{'direccion_transversal'});
    return $Direccion;        
  }


 
  function updateDireccion($id_direccion, $direccion_principal, $direccion_secundaria, $direccion_transversal) {
	
	//echo $cargo;
    $update = self::$db->getRow("Update direccion set direccion_principal='$direccion_principal',direccion_secundaria='$direccion_secundaria',direccion_transversal='$direccion_transversal' where id_direccion='$id_direccion'");             
 return 1;  
  }

  function deleteDireccion($id) {

 $delete = self::$db->getRow("Delete from direccion where id_direccion= '$id'");   
   return 1;          
  }

  function insertDireccion($direccion_principal, $direccion_secundaria, $direccion_transversal) {
    $new_row = self::$db->getRow("Insert into direccion (direccion_principal, direccion_secundaria, direccion_transversal) values ('$direccion_principal','$direccion_secundaria','$direccion_transversal')");
 return 1;               
  }



}
?>

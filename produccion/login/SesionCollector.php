<?php

include_once ('Sesion.php');
include_once ('Collector.php');

class SesionCollector extends Collector
{
	
	function showSesion() 	{
		$rows = self::$db->getRows("SELECT * FROM sesion ");
		$arraySesion = array();
		foreach ($rows as $c) {
			$aux = new Sesion($c{'id_sesion'}, $c{'usuario'}, $c{'pasw'});
			array_push($arraySesion, $aux);
		}
		return $arraySesion;
	}
	

function showSesionId($id) {

    $row = self::$db->getRow("SELECT * FROM sesion where id_sesion = '$id'");   
    
    $Sesion = new Sesion($row{'id_sesion'},$row{'usuario'},$row{'pasw'});
    return $Sesion;        
  }
	

 


  function updateSesion($id_sesion,$usuario,$pasw) {
	
	//echo $cargo;
    $update = self::$db->getRow("Update sesion set usuario='$usuario', pasw='$pasw' where id_sesion='$id_sesion'");             
 return 1;  
  }

  function deleteSesion($id) {

 $delete = self::$db->getRow("Delete from sesion where id_sesion= '$id'");   
   return 1;          
  }


	function insertSesion($usuario, $pasw) {
    $new_row = self::$db->getRow("Insert into sesion (usuario, pasw) values ('$usuario','$pasw')");
 	return 1;               
  }

	
}




?>

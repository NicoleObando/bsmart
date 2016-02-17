<?php		

include_once('Docente.php');
include_once('conexion.php');

class DocenteCollector extends conexion
{
  
  function showDocente() {
    $rows = self::$db->getRows("SELECT * FROM profesor ");        
    $arrayDocente= array();        
    foreach ($rows as $c){
      $aux = new Docente($c{'id_profesor'},$c{'nombre'},$c{'apellido'},$c{'edad'},$c{'cedula'},$c{'genero'},$c{'cargo'},$c{'email'});

      array_push($arrayDocente, $aux);
    }
    return $arrayDocente;        
  }
 
  function showDocenteId($id) {

    $row = self::$db->getRow("SELECT * FROM profesor where id_profesor = '$id'");   
    
    $Docente = new Docente($row{'id_profesor'},$row{'nombre'},$row{'apellido'},$row{'edad'},$row{'cedula'},$row{'genero'},$row{'cargo'},$row{'email'});
    return $Docente;        
  }


 


  function updateDocente($ruc,$nombre,$direccion,$telefono1,$telefono2,$numcelular1,$numcelular2) {
	
	//echo $numcelular2;
    $update = self::$db->getRow("Update Docente set nombre='$nombre',direccion='$direccion',telefono1='$telefono1',telefono2='$telefono2',numcelular1='$numcelular1',numcelular2='$numcelular2' where ruc='$ruc'");             
 return 1;  
  }

  function deleteDocente($id) {

 $delete = self::$db->getRow("Delete from Docente where ruc= '$id'");   
   return 1;          
  }

  function insertDocente($ruc,$nombre,$direccion,$telefono1,$telefono2,$numcelular1,$numcelular2) {
    $new_row = self::$db->getRow("Insert into Docente (ruc,nombre,direccion,telefono1,telefono2,numcelular1,numcelular2) values ('$ruc','$nombre','$direccion','$telefono1','$telefono2','$numcelular1','$numcelular2')");
 return 1;               
  }



}
?>


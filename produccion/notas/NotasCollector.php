<?php		

include_once('Notas.php');
include_once('Collector.php');

class NotasCollector extends Collector
{
  
  function showNotas() {
    $rows = self::$db->getRows("SELECT * FROM nota ");        
    $arrayNotas= array();        
    foreach ($rows as $c){
      $aux = new Notas($c{'id_nota'},$c{'anio'},$c{'nota1'},$c{'nota2'},$c{'nota3'},$c{'nota4'},$c{'promedio'},$c{'recuperacion'});

      array_push($arrayNotas, $aux);
    }
    return $arrayNotas;        
  }

  function showNotasId($id) {

    $row = self::$db->getRow("SELECT * FROM nota where id_nota = '$id'");   
    
    $Notas = new Notas($row{'id_nota'},$row{'anio'},$row{'nota1'},$row{'nota2'},$row{'nota3'},$row{'nota4'},$row{'promedio'},$row{'recuperacion'});
    return $Notas;        
  }


 


  function updateNotas($id_nota,$anio,$nota1,$nota2,$nota3,$nota4,$promedio,$recuperacion) {
	
	//echo $cargo;
    $update = self::$db->getRow("Update nota set anio='$anio',nota1='$nota1',nota2='$nota2',nota3='$nota3',nota4='$nota4',promedio='$promedio',recuperacion='$recuperacion' where id_nota='$id_nota'");             
 return 1;  
  }

  function deleteNotas($id) {

 $delete = self::$db->getRow("Delete from nota where id_nota= '$id'");   
   return 1;          
  }

  function insertNotas($anio,$nota1,$nota2,$nota3,$nota4,$promedio,$recuperacion) {
    $new_row = self::$db->getRow("Insert into nota (anio,nota1,nota2,nota3,nota4,promedio,recuperacion) values ('$anio','$nota1','$nota2','$nota3','$nota4','$promedio','$recuperacion')");
 return 1;               
  }



}
?>

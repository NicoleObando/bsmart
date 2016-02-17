<?php   

include_once('Curso.php');
include_once('Collector.php');

class CursoCollector extends Collector
{
  



function showCurso() {
    $rows = self::$db->getRows("SELECT * FROM curso ");        
    $arrayCurso= array();        
    foreach ($rows as $c){
      $aux = new Curso($c{'id_curso'},$c{'nombre'},$c{'nombre_curso'},$c{'descripcion'},$c{'estado'});

      array_push($arrayCurso, $aux);
    }
    return $arrayCurso;        
  }

  function showCursoId($id) {

    $row = self::$db->getRow("SELECT * FROM curso where id_curso = '$id'");   
    
    $Curso = new Curso($row{'id_curso'},$row{'nombre'},$row{'nombre_curso'},$row{'descripcion'},$row{'estado'});
    return $Curso;        
  }



 
  function updateCurso($id_curso, $nombre, $nombre_curso, $descripcion, $estado) {
  
  //echo $cargo;
    $update = self::$db->getRow("Update curso set nombre='$nombre', nombre_curso='$nombre_curso,'descripcion='$descripcion',estado='$estado', where id_curso='$id_curso'");             
 return 1;  
  }

  function deleteCurso($id) {

 $delete = self::$db->getRow("Delete from curso where id_curso= '$id'");   
   return 1;          
  }

  function insertCurso($nombre, $nombre_curso, $descripcion, $estado) {
    $new_row = self::$db->getRow("Insert into Curso (nombre, nombre_curso, descripcion, estado) values ('$nombre','$nombre_curso','$descripcion','$estado')");
 return 1;               
  }



}
?>




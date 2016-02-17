<?php

class Curso
{
    private $id_curso;
    private $nombre;
    private $nombre_curso;
    private $descripcion; 
    private $estado;    
    
 
    function __construct($id_curso, $nombre,$nombre_curso, $descripcion, $estado) {
       $this->id_curso = $id_curso;
       $this->nombre = $nombre;
       $this->nombre_curso = $nombre_curso;
       $this->descripcion = $descripcion;
       $this->estado = $estado;  
       

     }

   
     function setid_curso($id_curso){
       $this->id_curso = $id_curso;
     }
 
     function getid_curso(){
       return $this->id_curso;
     } 

     function setnombre($nombre){
       $this->nombre = $nombre;
     } 

     function getnombre(){
       return $this->nombre;
     } 


     function setnombre_curso($nombre_curso){
       $this->nombre_curso = $nombre_curso;
     } 

     function getnombre_curso(){
       return $this->nombre_curso;
     }  


   function setdescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 

     function getdescripcion(){
       return $this->descripcion;
     } 

 function setestado($estado){
       $this->estado = $estado;
     } 

     function getestado(){
       return $this->estado;
     } 

 
}

?> 

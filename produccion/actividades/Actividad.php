<?php

class Actividad
{
    private $id_actividad;
    private $nombre;
    private $descripcion;
    private $estado;
    private $fecha; 
    
 
    function __construct($id_actividad, $nombre, $descripcion, $estado, $fecha) {
       $this->id_actividad = $id_actividad;
       $this->nombre = $nombre;
       $this->descripcion = $descripcion;
       $this->estado = $estado;  
       $this->fecha = $fecha;  

     }

   
     function setid_actividad($id_actividad){
       $this->id_actividad = $id_actividad;
     }
 
     function getid_actividad(){
       return $this->id_actividad;
     } 

     function setnombre($nombre){
       $this->nombre = $nombre;
     } 

     function getnombre(){
       return $this->nombre;
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

     function setfecha($fecha){
       $this->fecha = $fecha;
     } 

     function getfecha(){
       return $this->fecha;
     } 

 
}

?> 

<?php

class Telefono
{
    private $id_telefono;
    private $codigo_pais;
    private $codigo_ciudad;
    private $numero_telefono;
    private $tipo_telefono; 
    
 
    function __construct($id_telefono, $codigo_pais, $codigo_ciudad, $numero_telefono, $tipo_telefono) {
       $this->id_telefono = $id_telefono;
       $this->codigo_pais = $codigo_pais;
       $this->codigo_ciudad = $codigo_ciudad;
       $this->numero_telefono = $numero_telefono;  
       $this->tipo_telefono = $tipo_telefono;  

     }

   
     function setid_telefono($id_telefono){
       $this->id_telefono = $id_telefono;
     }
 
     function getid_telefono(){
       return $this->id_telefono;
     } 

     function setcodigo_pais($codigo_pais){
       $this->codigo_pais = $codigo_pais;
     } 

     function getcodigo_pais(){
       return $this->codigo_pais;
     } 

   function setcodigo_ciudad($codigo_ciudad){
       $this->codigo_ciudad = $codigo_ciudad;
     } 

     function getcodigo_ciudad(){
       return $this->numero_telefono;
     } 

 function setnumero_telefono($numero_telefono){
       $this->numero_telefono = $numero_telefono;
     } 

     function getnumero_telefono(){
       return $this->estado;
     } 

     function settipo_tlefono($tipo_telefono){
       $this->tipo_telefono = $tipo_telefono;
     } 

     function gettipo_telefono(){
       return $this->tipo_telefono;
     } 

 
}

?> 

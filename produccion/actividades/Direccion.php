<?php

class Actividad
{
    private $id_direccion;
    private $direccion_principal;
    private $direccion_secundaria;
    private $direccion_transversal;
 
    function __construct($id_direccion, $direccion_principal, $direccion_secundaria, $direccion_transversal) {
       $this->id_direccion = $id_direccion;
       $this->direccion_principal = $direccion_principal;
       $this->direccion_secundaria = $direccion_secundaria;
       $this->direccion_transversal = $direccion_transversal; 

     }

   
     function setid_direccion($id_direccion){
       $this->id_direccion = $id_direccion;
     }
 
     function getid_direccion(){
       return $this->id_direccion;
     } 

     function setdireccion_principal($direccion_principal){
       $this->direccion_principal = $direccion_principal;
     } 

     function getdireccion_principal(){
       return $this->direccion_principal;
     } 

   function setdireccion_secundaria($direccion_secundaria){
       $this->direccion_secundaria = $direccion_secundaria;
     } 

     function getdireccion_secundaria(){
       return $this->direccion_secundaria;
     } 

 function setdireccion_transversal($direccion_transversal){
       $this->direccion_transversal = $direccion_transversal;
     } 

     function getdireccion_transversal(){
       return $this->direccion_transversal;
     } 
 
}

?> 

<?php

class Notas
{
    private $id_nota;
    private $anio;
    private $nota1;
    private $nota2;
    private $nota3;	
    private $nota4;
    private $promedio;
    private $recuperacion;

 
    function __construct($id_nota, $anio,$nota1,$nota2,$nota3,$nota4,$promedio,$recuperacion) {
       $this->id_nota = $id_nota;
       $this->anio = $anio;
       $this->nota1 = $nota1;
       $this->nota2 = $nota2;
       $this->nota3 = $nota3;
       $this->nota4 = $nota4;
       $this->promedio = $promedio;
       $this->recuperacion = $recuperacion;
       

     }

   
     function setid_nota($id_nota){
       $this->id_nota = $id_nota;
     }
 
     function getid_nota(){
       return $this->id_nota;
     } 

     function setanio($anio){
       $this->anio = $anio;
     } 

     function getanio(){
       return $this->anio;
     } 

   function setnota1($nota1){
       $this->nota1 = $nota1;
     } 

     function getnota1(){
       return $this->nota1;
     } 

 function setnota2($nota2){
       $this->nota2 = $nota2;
     } 

     function getnota2(){
       return $this->nota2;
     } 

 function setnota3($nota3){
       $this->nota3 = $nota3;
     } 

     function getnota3(){
       return $this->nota3;
     } 


   function setnota4($nota4){
       $this->nota4 = $nota4;
     } 

     function getnota4(){
       return $this->nota4;
     } 

  function setpromedio($promedio){
       $this->promedio = $promedio;
     } 

     function getpromedio(){
       return $this->promedio;
     }


   function setrecuperacion($recuperacion){
       $this->recuperacion = $recuperacion;
     } 

     function getrecuperacion(){
       return $this->recuperacion;
     } 

   
       
 
}

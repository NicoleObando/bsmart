<?php

class Sesion
{
    private $id_sesion;
    private $usuario;
    private $pasw;
    
     function __construct($id_sesion, $usuario, $pasw) {
       $this->id_sesion = $id_sesion;
       $this->usuario = $usuario;
       $this->pasw = $pasw;
     }
    
     function setid_sesion($id_sesion){
       $this->id_sesion = $id_sesion;
     } 
     function getid_sesion(){
       return $this->id_sesion;
     } 
     function setusuario($usuario){
       $this->usuario = $usuario;
     } 
     function getusuario(){
       return $this->usuario;
     } 
     function setpasw($pasw){
       $this->pasw = $pasw;
     } 
     function getpasw(){
       return $this->pasw;
     } 
}

?> 
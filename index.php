<?php

function conexiondb(){

  $database ="pepito";
  $username ="root";
  $password ="1234";
  $server ="https://www.google.com";
  
  $cadena_conexion = new mysqli($server,$username,$password,$database);
  
  return $cadena_conexion;



}


?>

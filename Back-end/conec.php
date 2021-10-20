<?php
/* Cadena de conexion */
try {
    $cadena=new PDO('mysql:host=localhost;  dbname=empresa', 'root', '');
    
} catch (Exeption $e) {
   die ('ERROR!!! Revise su conexion a la base de datos.'.$e->getMessage()); 
}
?>
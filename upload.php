<?php
$dato=$_FILES['document']['name'];
echo $dato;
if((strncasecmp($dato, "factura", 7) === 0) || (strncasecmp($dato, "Factura", 7) === 0) || (strncasecmp($dato, "FACTURA", 7) === 0)){
    move_uploaded_file($_FILES['document']['tmp_name'], "factura");
  }else if((strncasecmp($dato, "cedula", 6) === 0)) {
    echo "Es una cedula";
     }else if ((strncasecmp($dato, "recibo", 6) === 0)) {
        echo "Es una reciba";
     }else if ((strncasecmp($dato, "diferente", 6) === 0)) {
        echo "Es un archivo diferente";
     };





/* $directorio = 'cedulas/';
$subir_archivo = $directorio.basename($_FILES['document']['name']);
echo "<div>";
if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) {
      echo "El archivo es válido y se cargó correctamente.<br><br>";
	   echo"<a href='".$subir_archivo."' target='_blank'><img src='".$subir_archivo."' width='150'></a>";
    } else {
       echo "El documento no ha sido guardado.";
    }; */
?>
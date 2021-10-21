
<?php

/* $dir_subida=$_FILES['document']['name'];

if((strncasecmp($dir_subida, "factura", 7) === 0)) {
$dir_subida = 'facturas/'.$_FILES['document']['name'];
move_uploaded_file($_FILES['document']['tmp_name'], $dir_subida);

    }else if ((strncasecmp($dir_subida, "orden", 6) === 0)) {
      $dir_subida = 'orden_remision/'.$_FILES['document']['name'];
      move_uploaded_file($_FILES['document']['tmp_name'], $dir_subida);  
    }; */
    $formato=array('.pdf');
    $nombre=$_FILES['document']['name'];
    $tipo=$_FILES['document']['tmp_name'];
    $exten=substr($nombre, strrpos($nombre, '.'));

    if (in_array($exten, $formato) && (strncasecmp($nombre, "factura", 7) === 0) || (strncasecmp($nombre, "Factura", 7) === 0) || (strncasecmp($nombre, "FACTURA", 7) === 0)) {
        if (move_uploaded_file($tipo,"facturas/$nombre")) {
            echo "Archivo subido";
        }else{
            echo "Error!!!";
        }
    }else if (in_array($exten, $formato) && (strncasecmp($nombre, "orden", 5) === 0) || (strncasecmp($nombre, "Orden", 5) === 0) ||    (strncasecmp($nombre, "ORDEN", 5) === 0)) {
      if (move_uploaded_file($tipo,"orden_pedido/$nombre")) {
          echo "Archivo subido";
      }else{
          echo "Error!!!";
      }
    }else if(in_array($exten, $formato) && (strncasecmp($nombre, "epi", 3) === 0) || (strncasecmp($nombre, "Epi", 3) === 0) || (strncasecmp($nombre, "EPI", 3) === 0)) {
      if (move_uploaded_file($tipo,"epi_crisis/$nombre")) {
          echo "Archivo subido";
      }else{
          echo "Error!!!";
      }
    }else if(in_array($exten, $formato) && (strncasecmp($nombre, "credito", 7) === 0) || (strncasecmp($nombre, "Credito", 7) === 0) || (strncasecmp($nombre, "CREDITO", 7) === 0)) {
      if (move_uploaded_file($tipo,"factura_credito/$nombre")) {
          echo "Archivo subido";
      }else{
          echo "Error!!!";
      }
   }
?>
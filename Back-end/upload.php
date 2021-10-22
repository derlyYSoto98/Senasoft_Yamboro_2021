<?php

    $formato=array('.pdf'); /* Se establece que solo sean en formato pdf */
    $nombre=$_FILES['document']['name'];/* Se reciben los datos de la caja de texto del file */
    $tipo=$_FILES['document']['tmp_name'];
    $exten=substr($nombre, strrpos($nombre, '.'));
 /* Se generan las condiciones para determinar la ubicacion de cada archivo mediante diversas condiciones*/
    if (in_array($exten, $formato) && (strncasecmp($nombre, "factura", 7) === 0) || (strncasecmp($nombre, "Factura", 7) === 0) || (strncasecmp($nombre, "FACTURA", 7) === 0)) {
        if (move_uploaded_file($tipo,"facturas/$nombre")) /* Se le asigna la ubicacion */ {
            ?>
            <script laguage="javascript">window.alert('La factura se guardo con exito en el sistema!!');
            window.location='documentos.php'; /* Confirmacion de la oprecion exitosa */
           </script>
            <?php
        }else{
            echo "Error!!!";
        } /* Negacion de lo anterior */
    }else if (in_array($exten, $formato) && (strncasecmp($nombre, "orden_pedido", 12) === 0) || (strncasecmp($nombre, "Orden
    _pedido", 12) === 0) ||    (strncasecmp($nombre, "ORDEN_PEDIDO", 12) === 0)) {
      if (move_uploaded_file($tipo,"orden_pedido/$nombre")) {
        ?>
        <script laguage="javascript">window.alert('La orden de pedido se guardo con exito en el sistema!!');
        window.location='documentos.php';
       </script>
        <?php
      }else{
          echo "Error!!!";
      }
    }else if(in_array($exten, $formato) && (strncasecmp($nombre, "epi", 3) === 0) || (strncasecmp($nombre, "Epi", 3) === 0) || (strncasecmp($nombre, "EPI", 3) === 0)) {
      if (move_uploaded_file($tipo,"epi_crisis/$nombre")) {
        ?>
        <script laguage="javascript">window.alert('El Epi Crisis se guardo con exito en el sistema!!');
        window.location='documentos.php';
       </script>
        <?php
      }else{
          echo "Error!!!";
      }
    }else if(in_array($exten, $formato) && (strncasecmp($nombre, "credito_factura", 15) === 0) || (strncasecmp($nombre, "Credito_Factura", 15) === 0) || (strncasecmp($nombre, "CREDITO_FACTURA", 15) === 0) || (strncasecmp($nombre, "Credito_factura", 15) === 0)) {
      if (move_uploaded_file($tipo,"factura_credito/$nombre")) {
        ?>
        <script laguage="javascript">window.alert('La factura de credito se guardo con exito en el sistema!!');
        window.location='documentos.php';
       </script>
        <?php
      }else{
          echo "Error!!!";
      }
   }else if(in_array($exten, $formato) && (strncasecmp($nombre, "debito_factura", 14) === 0) || (strncasecmp($nombre, "Debito_Factura", 14) === 0) || (strncasecmp($nombre, "DEBITO_FACTURA", 14) === 0) || (strncasecmp($nombre, "Debito_factura", 14) === 0)) {
    if (move_uploaded_file($tipo,"factura_debito/$nombre")) {
        ?>
        <script laguage="javascript">window.alert('La factura debito se guardo con exito en el sistema!!');
        window.location='documentos.php';
       </script>
        <?php
    }else{
        echo "Error!!!";
    }
  }else if(in_array($exten, $formato) && (strncasecmp($nombre, "historia", 8) === 0) || (strncasecmp($nombre, "Historia", 8) === 0) || (strncasecmp($nombre, "HISTORIA", 8) === 0)) {
    if (move_uploaded_file($tipo,"historias_clinicas/$nombre")) {
        ?>
            <script laguage="javascript">window.alert('La historia clinica se guardo con exito en el sistema!!');
            window.location='documentos.php';
           </script>
            <?php
    }else{
        echo "Error!!!";
    }
  }else if(in_array($exten, $formato) && (strncasecmp($nombre, "orden_remision", 14) === 0) || (strncasecmp($nombre, "Orden_Remision", 14) === 0) || (strncasecmp($nombre, "ORDEN_REMISION", 14) === 0)) {
    if (move_uploaded_file($tipo,"orden_remision/$nombre")) {
        ?>
            <script laguage="javascript">window.alert('La orden de remision se guardo con exito en el sistema!!');
            window.location='documentos.php';
           </script>
            <?php
    }else{
        echo "Error!!!";
    }
  }else{
        ?>
            <script laguage="javascript">window.alert('El archivo adjunto no concuerda con los parametros establecidos!!');
            window.location='documentos.php';
           </script>
            <?php 
    }
?>
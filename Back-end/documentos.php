<!-- Se incluye la cadena de conexion y la session para la funcionalidad -->
<?php  
    include_once ('conec.php');
        session_start();
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro usuario</title>
    <link rel="stylesheet" href="../css/subir_document.css">
</head>
<body>
    <!-- Si se decea se aplica una session para determinar la accesibilidad a la pagina -->
    <div>
        <?php
            if (isset($_SESSION['nombre'])) {
                $nombre=$_SESSION['nombre'];


            }else{
                $nombre="";
            }
            if ($nombre=="") {
                echo "<script>window.location='index.html'</script>";
            }else{
                echo "Usuario : $nombre";
            }
        ?>
        
    </div>
    <a href="cerrar_sesion.php">cerrar sesión</a>
<form action="upload.php" method="POST" enctype="multipart/form-data" name="form1">  
    <fieldset>
     <legend>SUBIR ARCHIVOS</legend> 
     <h1> Seleccione el archivo para determinar su ubicación correspondiente</h1>  <br>
     <tr> 
        <td><input type="file" name="document"></td>   <br><br>
        <td><input type="submit" name="btn1" value="Guardar archivo"></td> 
     </tr>  
    </fieldset>
</form>

</body>
</html>
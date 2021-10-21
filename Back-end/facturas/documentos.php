<?php  
    include_once ('conec.php');
        session_start();
            if (isset($_SESSION['nombre'])) {
                $nombre=$_SESSION['nombre'];


            }else{
                $nombre="";
            }
            if ($nombre=="") {
                echo "<script>window.location='inicio.php'</script>";
            }else{
                echo "usuario : $nombre";
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Documentos</title>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data" name="form1">       
     <h2>SUBIR ARCHIVOS</h2>   
     <tr> 
        <td><input type="file" name="document"></td>   <br><br>
        <td><input type="submit" name="btn1" value="Guardar archivo"></td> 
     </tr>   
</form>
<a href="cerrar_sesion.php">cerrar secion</a>
</body>
</html>
<!-- $dato=$_FILES['document']['name'];
if((strncasecmp($dato, "factura", 7) === 0) || (strncasecmp($dato, "Factura", 7) === 0) || (strncasecmp($dato, "FACTURA", 7) === 0)){
    move_uploaded_file([$dato] ['tmp_name'], "factura/");

  }else if((strncasecmp($dato, "cedula", 6) === 0)) {
    echo "Es una cedula";

     }else if ((strncasecmp($dato, "recibo", 6) === 0)) {
        echo "Es una reciba";
        
     }else if ((strncasecmp($dato, "diferente", 6) === 0)) {
        echo "Es un archivo diferente";
     }; -->
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

</body>
</html>
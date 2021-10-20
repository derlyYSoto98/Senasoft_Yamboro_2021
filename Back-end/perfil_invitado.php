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
    <title>registro usuario</title>
</head>
<body>
    <a href="cerrar_sesion.php">cerrar secion</a>
    <!-- Hola mundo  -->
</body>
</html>
<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_codigo.css">
</head>
<body>
<h1>Facturas de Débito</h1>
    <a href="../index.html">volver</a>
    <div>
        <?php
        include("funcion.php");
        ?>
            Facturas alojadas en el repositorio local "facturas de débito"
        <?php
        obtener_estructura_directorios("factura_debito");
        ?>
    </div>

</body>
</html>
=======
<?php
include("funcion.php");

obtener_estructura_directorios("factura_debito");
>>>>>>> 4dc2759b53d0ce2d3a433c57a766e62eb1ef75d5

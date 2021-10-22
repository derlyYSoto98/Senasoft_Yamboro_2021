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
    <h1>Orden de Pedido</h1>
    <a href="../index.html">volver</a>
    <div>
<!-- Se incluye la funcion que determna que se muestren los archivos cargados -->
<?php
include("funcion.php");
?>
            Facturas alojadas en el repositorio local "Orden de Pedido"
        <?php
obtener_estructura_directorios("orden_pedido");
?>
</div>

</body>
</html>

<!-- Se incluye la cadena de conexion para iniciar la insercion de datos en la base de datos. -->
<?php
include 'conec.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE USUARIO</title>
</head>
<body>
    <!-- Se crea el formulario basico  -->
    <form action="" name="form1" method="POST">
        <table>
            <tr>
                <td><input type="text" name="txtn" id="txtn" placeholder="Nombre y apellidos" require ></td>
            </tr>
            <tr>
                <td><input type="text" name="txti" id="txti" placeholder="Numero de Identificacion" require></td>
            </tr>
            <tr>
                <td><input type="text" name="txtt" id="txtt" placeholder="Telefono" require></td>
            </tr>
            <tr>
                <td><input type="text" name="txtc" id="txtc" placeholder="contraseña" require></td>
            </tr>
            <tr>
                <td><input type="submit" value="Guardar" name="btn1"> </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['btn1'])){
        $nombre  =$_POST['txtn'];
        $ident   =$_POST['txti'];
        $telefono=$_POST['txtt'];
        $contra  =$_POST['txtc'];
       /*  Se inicia la interacion con la base de datos */
        try {
            $sql="INSERT INTO invitado(`id_usuario`, `nombre_u`, `identificacion_u`, `telefono_u`, `contrasena_u`) VALUES('', :mnom, :mide, :mtel, :mcon)";
           /*  se instancia la cadena de conexion de la base de datos */
            $resultado=$cadena->prepare($sql);
            $resultado -> execute(array(":mnom"=>$nombre, ":mide"=>$ident, ":mtel"=>$telefono, ":mcon"=>$contra));
            ?>
            <script lenguage="javascript">window.alert('Nuevo usuario registrado con exito!!')</script> 
            <?php
        } catch (Exeption $e) {
            die ('ERROR!!! Revise su conexion a la base de datos.'.$e->getMessage()); 
        }
    }
    ?>
</body>
</html>
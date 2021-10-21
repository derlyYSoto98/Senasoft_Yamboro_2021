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
    <link rel="stylesheet" href="../css/registro_style.css">
</head>
<body>
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
                echo "Administrador : $nombre";
            }
        ?>
        
    </div>
    <a href="cerrar_sesion.php">cerrar sesión</a>
     <!-- Se crea el formulario basico  -->
     <h1>Registro de Usuarios</h1>
     <form action="" name="form1" method="POST">
        <table >
            <tr>
                <td><input type="text" name="txtn" id="txtn" placeholder="Nombre y apellidos" required></td>
            </tr>
            <tr>
                <td><input type="text" name="txti" id="txti" placeholder="Numero de Identificacion" required></td>
            </tr>
            <tr>
                <td><input type="text" name="txtt" id="txtt" placeholder="Telefono" required></td>
            </tr>
            <tr>
                <td><input type="text" name="txtc" id="txtc" placeholder="contraseña" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Guardar" class="boton" name="btn1"> </td>
            </tr>
        </table>
    </form>
    <?php
       
    if(isset($_POST['btn1'])){
        $nombre  =$_POST['txtn'];
        $ident   =$_POST['txti'];
        $telefono=$_POST['txtt'];
        $contra  =$_POST['txtc'];
        if (empty($nombre) || empty($ident) || empty($telefono) || empty($contra)) {	
            ?>
                <script leguage="javascript">window.alert('campos de texto y contraseña son obligatorios')</script>
            <?php
        }else{
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
    }

    ?>
 
    <!-- Hola mundo  -->
</body>
</html>
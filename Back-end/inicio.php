<?php
    include 'conec.php';//llamamos la cadena de conexion con la base de datos
    session_start();	// iniciamos la sesion 
    if (isset($_POST['ingresar'])) { 	// si se da click en el imput ingresar hagase lo siguiente
        if (empty($_POST['cedula']) || empty($_POST['passwor'])) {	// preguntamos que si los campos de texto y password estan vacios 
            ?>
                <script leguage="javascript">window.alert('campos de texto son obligatorios')</script> <!-- si las cajas estan vacias le arroja una alerta que estan los campos vacios -->
            <?php
        }else{	//y la negacion seria que sino estan vacias la cajas de ingreso al administrador
            $sql="SELECT * FROM administrador WHERE cedula_admi=:cedula AND contra_admi=:passwor";	// valla a la base de datos y busque la cedula y contraseña 
            $resultado=$cadena->prepare($sql);	// que me prepare la cadena de conexion para la ejecucion
            $resultado->execute(array(":cedula"=>$_POST['cedula'],":passwor"=>$_POST['passwor']));	 //que me recorra la base de datos y me busque los elementos cedula y password
            while ($consulta=$resultado->fetch(PDO::FETCH_ASSOC) ) {	//para consultar en la base de datos si la informacion es verdadera y deje iniciar la secion 
                $_SESSION['nombre']=$consulta['nombre_admi'];	//declara la vairiable sesion para llamarla en otra pantalla
            }
            $verificar = $resultado -> rowCount();	// retorna un numero diferente a 0 si el numero es mayor se ejecuta la sentecia $sql y se guarda en la variable $verificar
            if ($verificar > 0) {	// se ejecuta la  variable y si es mayor a 0 se erdirecciona a perfil o index principal 
                header("location:perfil.php");
            }else{	// si la variable $verificar es 0 entonces no lo deja ingresar 
                ?>
                <script leguage="javascript">window.alert("Los datos del usuario son erroneos !!")</script> <!-- si los datos de la base de datos no concuerdad arroja otro mensaje emergente que los datos no concuerdan -->
                <?php
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>inicio</title>
    <link rel="stylesheet" href="../icons/all.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="main-content">
        <form class="login-content" action="" method="POST">
            <h2>Iniciar Sesión</h2>
            <i class="fas fa-user-circle"></i>
            <div class="input-name">
                <i class="fas fa-user"></i>
                <input type="text" name="cedula" placeholder="Ingrese su Identificacion">
            </div>
            <div class="input-pass">
                <i class="fas fa-lock"></i>
                <input type="password" name="passwor"placeholder="Ingrese su contraseña">
            </div>
            <!-- <button><script language="javascript">window.alert('comuniquese con el administrador');</script>Olvidaste contraseña ?</button> -->
            <input type="submit" name="ingresar" value="Ingresar">
        </form>
    </div>
</body>
</html>
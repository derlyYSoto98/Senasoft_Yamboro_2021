<?php
    include 'conec.php';//llamamos la cadena de conexion con la base de datos
    session_start();	// iniciamos la sesion 
    if (isset($_POST['ingresar'])) { 	// si se da click en el imput ingresar hagase lo siguiente
        if (empty($_POST['cedula']) || empty($_POST['passwor'])) {	// preguntamos que si los campos de texto y password estan vacios 
            ?>
                <script leguage="javascript">window.alert('campos de texto y contraseña son obligatorios')</script> <!-- si las cajas estan vacias le arroja una alerta que estan los campos vacios -->
            <?php
        }else{	//y la negacion seria que sino estan vacias la cajas de ingreso al administrador
            $sql="SELECT * FROM invitado WHERE identificacion_u=:cedula AND contrasena_u=:passwor";	// valla a la base de datos y busque la cedula y contraseña 
            $resultado=$cadena->prepare($sql);	// que me prepare la cadena de conexion para la ejecucion
            $resultado->execute(array(":cedula"=>$_POST['cedula'],":passwor"=>$_POST['passwor']));	 //que me recorra la base de datos y me busque los elementos cedula y password
            while ($consulta=$resultado->fetch(PDO::FETCH_ASSOC) ) {	//para consultar en la base de datos si la informacion es verdadera y deje iniciar la secion 
                $_SESSION['nombre']=$consulta['nombre_u'];	//declara la vairiable sesion para llamarla en otra pantalla
            }
            $verificar = $resultado -> rowCount();	// retorna un numero diferente a 0 si el numero es mayor se ejecuta la sentecia $sql y se guarda en la variable $verificar
            if ($verificar > 0) {	// se ejecuta la  variable y si es mayor a 0 se erdirecciona a perfil o index principal 
                header("location:perfil_invitado.php");
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
</head>
<body>
	<form method="POST"> 
		<table>
			<tr>
				<td colspan="2">Invitado</td>
			</tr>
			<tr>
				<td>Identificacion</td>
				<td><input type="text" name="cedula" placeholder="Ingrese su Identificacion"></td>
			</tr>
			<tr>
				<td>Contraseña</td>
				<td><input type="password" name="passwor"placeholder="Ingrese su contraseña"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="ingresar" value="Ingresar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
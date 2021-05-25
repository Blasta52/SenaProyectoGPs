<!--archivo que muestra el formulario de inicio de sesion del cliente-->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$tituloPagina = "Crear Cuenta";
include  '../../sitioweb/head/head.php';
include '../../sitioweb/contenido/MenuHorizontal.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php $tituloPagina ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
</head>
<body>


    <form method="post">
    	<h2>Crear cuenta !</h2>
        <hr>
        <select id="caja_seleccion" name="Genero">
            <option>Masculino</option>
            <option>Femenino</option>
            <option selected>No definido </option>
        </select>
    	<input type="text" name="name" placeholder="Nombre completo">
        <input type="text" name="lastname" placeholder="Apellidos">

        <select id="caja_seleccion" name="tipodocumento">
            <option>Cedula de ciudadania</option>
            <option>Cedula de ciudadania</option>
            <option>Pasaporte</option>
            <option>Targeta de extrangeria</option>
        </select>


        <input type="text" name="cedula" placeholder="Cedula">
    	<input type="email" name="email" placeholder="Correo Electronico">
        <input type="text" name="contrasena" placeholder="contraseña">
    	<input type="submit" name="registrar" title="Crear Cuenta"><a ></a>
        <?php
        include '../../controladores/usuario/CrearNuevoUsuario.php';
        ?>
    </form>

</body>
</html>

<?php
include '../../sitioweb/footer/footer.php';
?>
<!--archivo que muestra el formulario de inicio de sesion del cliente-->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$tituloPagina="Iniciar Sesion";
include  '../../sitioweb/head/head.php';
include '../../sitioweb/contenido/MenuHorizontal.php';
?>


<!DOCTYPE html>
<html>
<body>
    <form method="post">
    	<h2>Iniciar Sesion!</h2>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
        <a id="crearcuenta" href="./registro">Crear Cuenta!</a>
    	<input type="submit" name="iniciar">
    </form>

</body>
</html>

<?php
include '../../sitioweb/footer/footer.php';
?>
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
        <div align="center">
    	<input  type="email" name="email" placeholder="Correo">
        </div>
        <div align="center">
    	<input  type="password" name="pass" placeholder="Contraseña">
        </div>
       	<input type="submit" name="iniciar>
        <div id="cajapadre">
            <div id="caja">
                <a id="crearcuenta" href="./registro">Crear Cuenta</a>
            </div>
            <div id="caja">
                <a id="recuperarcuenta" href="./registro">Olvide contraseña</a>
                <h1>hola esto es una prueba</h1>
            </div>
       </div>




    </form>

</body>
</html>

<?php
include '../../sitioweb/footer/footer.php';
?>
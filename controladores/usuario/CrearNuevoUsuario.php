<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../../configuracion/conexion/con_db.php';

$host="127.0.0.1";
$usuario="fupais";
$contra="fupais12345";//pon aqui tu contraseña
$db="dbproyectogps";

$con=mysqli_connect("$host","$usuario","$contra","$db");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $cedula = trim($_POST['cedula']);
        $email = trim($_POST['email']);
        $password = trim($_POST['contrasena']);

        $consulta = "INSERT INTO cliente(nombre,apellido,cedula,email,password) VALUES ('$name','$lastname','$cedula','$email','$password')";
        $resultado = mysqli_query($con, $consulta);
        if ($resultado) {

            echo "<h3 class='ok'>¡Te has inscripto correctamente!.$resultado</h3>";

        } else {

            echo "Error: " . $consulta . "<br>" . mysqli_error($con);

        }
    }else{
        echo "<h3 class=''>complete los datos</h3>";
    }
}
// else {
//
//            echo "<h3 class='bad'>¡Por favor complete los campos!</h3>";
//
//   }
//}



<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$host="127.0.0.1";
$usuario="fupais";
$contra="fupais12345";//pon aqui tu contraseña
$db="dbproyectogps";

$con=mysqli_connect("$host","$usuario","$contra","$db");
//if(!$con){
//    die("fallo la conexion".mysqli_error());
//}else{
//    echo ("Genial la conexion fue exitosa");//mysqli_select_db($db) or die ("fallo la conexion a la base de datos".mysql_error());
//}
//
//?>

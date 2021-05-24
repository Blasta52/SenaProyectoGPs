<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$host="127.0.0.1";
$usuario="fupais";
$contra="fupais12345";//pon aqui tu contraseña
$db="dbproyectogps";
$tituloPagina="registro";
include '../../sitioweb/head/head.php';
include 'MenuHorizontal.php';
$con=mysqli_connect("$host","$usuario","$contra","$db");
$lista="SELECT * FROM `cliente`";

$conslista=mysqli_query($con,$lista);




  echo"<table text-align='center' border='1' cellspacing='2'>";
	echo "<tr bgcolor='orange'>";
		echo "<td>id</td>";
		echo "<td>nombre</td>";
        echo "<td>apellido</td>";
        echo "<td>cedula</td>";
        echo "<td>Correo</td>";
	echo "</tr>";
while ($registros=mysqli_fetch_array($conslista)) {
	echo "<tr>";
        echo "<td>$registros[id_clientes]</td>";
        echo "<td>$registros[nombre]</td>";
        echo "<td>$registros[apellido]</td>";
        echo "<td>$registros[cedula]</td>";
    echo "<td>$registros[email]</td>";
    echo "</tr>";
}

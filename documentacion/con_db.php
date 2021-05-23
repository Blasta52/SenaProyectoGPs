
<?php
$host="127.0.0.1";
$usuario="fupais";
$contra="fupais12345";//pon aqui tu contraseña
$db="desarrollo_fupais";

$conexion=mysqli_connect("$host","$usuario","$contra","$db") //miguel puede usar cualquirea de estas lineas paral a conexion "esta con variables"
//$conexion=mysqli_connect("127.0.0.1","fupais","fupais12345","desarrollo_fupais"); // oo esta con los datos directamente
if(!$conexion){
    die("fallo la conexion".mysqli_error());
}else{
    echo "Genial la conexion fue exitosa";//mysqli_select_db($db) or die ("fallo la conexion a la base de datos".mysql_error());
}
    ?>
   <!-- <?php --> -->

// $conex = mysqli_connect("190.145.20.157","fupais","fupais12345","desarrollo_fupais"); 

?>
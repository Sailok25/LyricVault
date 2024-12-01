<?php
$host = 'bbdd.lyricvault.cat';
$usuario = 'ddb236060';
$contrasenya = 'Wataru25'; 
$nombre_bd = 'ddb236060';
$port = 3306;

$conn = new mysqli($host, $usuario, $contrasenya, $nombre_bd, $port);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>



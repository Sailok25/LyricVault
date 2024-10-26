<?php
$host = 'localhost';
$usuario = 'root';
$contrasenya = ''; 
$nombre_bd = 'lyricvault_db';
$port = 3308;

$conn = new mysqli($host, $usuario, $contrasenya, $nombre_bd, $port);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

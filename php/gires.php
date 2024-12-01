<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'conexio.php';

// Consulta para obtener los artistas
$sql = "SELECT Data_Concert, Ubicacio_Concert, Ciutat FROM gires_concerts";
$result = $conn->query($sql);


$gires = array();
if ($result->num_rows > 0) {
    // Guardar resultados en un array
    while ($row = $result->fetch_assoc()) {
        $gires[] = $row;
    }
} else {
    echo 'No hi ha gires o concerts programats.';
}

// Redirigir a la vista de artistas
include '../vistes/gires.view.php';

// Cerrar la conexión al final de la ejecución
$conn->close();
exit();
?>
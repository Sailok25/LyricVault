<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'conexio.php';

// Consulta para obtener los artistas
$sql = "SELECT Nom_Artista, Genere, Foto FROM artistes";
$result = $conn->query($sql);


$artistes = array();
if ($result->num_rows > 0) {
    // Guardar resultados en un array
    while ($row = $result->fetch_assoc()) {
        $artistes[] = $row;
    }
} else {
    echo 'No hay artistas encontrados.';
}

// Redirigir a la vista de artistas
include '../vistes/artistes.view.php';

// Cerrar la conexión al final de la ejecución
$conn->close();
exit();
?>
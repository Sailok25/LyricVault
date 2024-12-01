<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'conexio.php';

// Consulta para obtener todos los artistas con sus detalles
$sql = "SELECT ID_Artista, Nom_Artista, Genere, Foto FROM artistes";
$result = $conn->query($sql);
$artistes = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $artistes[] = $row;
    }
} else {
    echo 'No hay artistas encontrados.';
}



// Cargar la vista de artistas
include '../vistes/artistes.view.php';

// Cerrar la conexión al final de la ejecución
$conn->close();
exit();
?>

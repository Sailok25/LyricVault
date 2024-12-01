<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'conexio.php';

$id_artista = $_REQUEST['ID_Artista'];




// Consulta para obtener el artista qeu queremos cargar con sus detalles
$sql = "SELECT * FROM artistes WHERE ID_Artista = '$id_artista'";
$result = $conn->query($sql);
$artistes = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $artistes[] = $row;
    }
} else {
    echo 'No hi ha artistes amb aquest id.';
    header('../view/error404.view.php');
}


// Consulta para obtener los detalles del artista seleccionado si existe el parámetro ID_Artista en la URL
$artista_detall = null;
if (isset($_GET['ID_Artista'])) {
    $artista_escollit = $_GET['ID_Artista'];
    $sql = "SELECT * FROM artistes WHERE ID_Artista=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $artista_escollit);
    $stmt->execute();
    $result = $stmt->get_result();
    $artista_detall = $result->fetch_assoc();
}





// PENDENT DE DOCUMENTAR
/*$sqlmax = "SELECT COUNT(*) FROM artistes WHERE Genere=?";
$sqlmax->bind_param("s", $artista_detall['Genere']);
$resultat=mysqli_query($conn,$sqlmax);
$max=mysqli_num_rows($resultat);
echo "El nombre d'artistes amb aquest gènere és: ";
echo $max;*/

// Cargar la vista de artistas
include '../vistes/artista.view.php';

// Cerrar la conexión al final de la ejecución
$conn->close();
exit();
?>
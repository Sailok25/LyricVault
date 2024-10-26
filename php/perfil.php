<?php
session_start();
require_once 'conexio.php';

// Comprobar si el correo electrónico está definido en la sesión
if (!isset($_SESSION['Correu_Electronic'])) {
    die("No s'han pogut trobar les dades de l'usuari.");
}

// Asegúrate de que el correo se guarde en la sesión
$email = $_SESSION['Correu_Electronic'];

// Usar declaración preparada para evitar inyecciones SQL
$stmt = $conn->prepare("SELECT Nom_Usuari, Cognom_Usuari, Correu_Electronic, Numero_Telefon, DNI FROM usuaris WHERE Correu_Electronic = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $dni = $row['DNI'];
    $nom_usuari = $row['Nom_Usuari'];
    $cognom_usuari = $row['Cognom_Usuari'];
    $email = $row['Correu_Electronic'];
    $numero_telefon = $row['Numero_Telefon'];

    include '../vistes/perfil.view.php';
} else {
    echo "No s'han pogut trobar les dades de l'usuari.";
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
?>

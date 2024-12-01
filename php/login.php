<?php

session_start();

require_once 'conexio.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Consulta per login
    $sql = "SELECT DNI, Nom_Usuari, Contrasenya, Correu_Electronic FROM usuaris WHERE Correu_Electronic = '$email' AND Contrasenya = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
  
        $_SESSION['DNI'] = $row['DNI'];
        $_SESSION['Nom_Usuari'] = $row['Nom_Usuari'];
        $_SESSION['Correu_Electronic'] = $row['Correu_Electronic'];

        // Redirigir a la página de perfil
        header("Location: perfil.php");
        exit;

    } else {
        echo "El correu electrònic o la contrasenya són incorrectes.";
    }
}
?>

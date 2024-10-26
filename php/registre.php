<?php
include 'conexio.php'; 

session_start();

// Comprobacia si el formulari a sigut enviat i recolleix les dades omplertes
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = trim($_POST['dni']);
    $nom = trim($_POST['nom']);
    $cognoms = trim($_POST['cognoms']);
    $email = trim($_POST['email']);
    $telefon = trim($_POST['telefon']);
    $password = trim($_POST['password']);
    $password_confirm = trim($_POST['password-confirm']);

    // Validar que tots els camps hagin sigut omplerts
    if (empty($dni) || empty($nom) || empty($cognoms) || empty($email) || empty($telefon) || empty($password) || empty($password_confirm)) {
        die("Tots els camps són obligatoris.");
    }

    // Comprobar que les 2 contrasenyes introduides coincideixin
    if ($password !== $password_confirm) {
        die("Les contrasenyes no coincideixen.");
    }

    // Crear la consulta per insertar usuaris
    $sql = "INSERT INTO usuaris (DNI, Nom_Usuari, Cognom_Usuari, Correu_Electronic, Numero_Telefon, Contrasenya) 
            VALUES (?, ?, ?, ?, ?, ?)";


    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssss", $dni, $nom, $cognoms, $email, $telefon, $password);

        // Executar la declaració
        if ($stmt->execute()) {
            // Guardar les dades de l'usuari registrar en la sessió (les agafará cuan entri a perfil)
            $_SESSION['Correu_Electronic'] = $email;
            $_SESSION['Nom_Usuari'] = $nom;
            $_SESSION['Cognom_Usuari'] = $cognoms;

            // Redirigir a l'usuari a la página de perfil
            header("Location: perfil.php");
            exit();
        } else {
            echo "Error en el registre: " . $stmt->error;
        }

        // Tancar la declaració
        $stmt->close();
    } else {
        echo "Error en la preparació de la consulta: " . $conn->error;
    }

    // Tancar la sessió
    $conn->close();
}
?>

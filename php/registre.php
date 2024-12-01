<?php
include 'conexio.php'; 

session_start();

// Comprovació si el formulari ha estat enviat i recollir les dades omplertes
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanejar i eliminar espais en blanc innecessaris (davant i darrere)
    $dni = trim(htmlspecialchars($_POST['dni']));
    $nom = trim(htmlspecialchars($_POST['nom']));
    $cognoms = trim(htmlspecialchars($_POST['cognoms']));
    $email = trim(htmlspecialchars($_POST['email']));
    $telefon = trim(htmlspecialchars($_POST['telefon']));
    $password = trim(htmlspecialchars($_POST['password']));
    $password_confirm = trim(htmlspecialchars($_POST['password-confirm']));

    // Validar que tots els camps hagin estat omplerts
    if (empty($dni) || empty($nom) || empty($cognoms) || empty($email) || empty($telefon) || empty($password) || empty($password_confirm)) {
        die("Tots els camps són obligatoris.");
    }

    // Comprovar que les dues contrasenyes introduïdes coincideixin
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
            // Guardar les dades de l'usuari registrat en la sessió (les agafarà quan entri a perfil)
            $_SESSION['Correu_Electronic'] = $email;
            $_SESSION['Nom_Usuari'] = $nom;
            $_SESSION['Cognom_Usuari'] = $cognoms;

            // Redirigir a l'usuari a la pàgina de perfil
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

    // Tancar la connexió
    $conn->close();
}
?>

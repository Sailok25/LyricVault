<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyric Vault | Registre</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo/logo-lyricvault-2.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/estils-generals.css">
    <link rel="stylesheet" href="../assets/css/estils-login-registre.css">
</head>

<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                <a href="../index.php">
                    <img src="../assets/img/logo/logo-lyricvault-2.png" alt="Lyric Vault Logo">
                </a>
            </div>
            <ul class="nav-links">
                <li class="nav-item"><a href="../php/novetats.php">Novetats</a></li>
                <li class="nav-item"><a href="../php/artistes.php">Artistes</a></li>
                <li class="nav-item"><a href="../php/gires.php">Gires</a></li>
            </ul>
            <div class="login-register">
                <a href="login.view.php" class="btn">Login</a>
                <a href="registre.view.php" class="btn">Registre</a>
            </div>
        </nav>
    </header>

    <div id="all">
        <main>
            <section id="register">
                <div id="register-container">
                    <form action="../php/registre.php" method="post">
                        <fieldset>
                            <legend>Crear una compte</legend>

                            <label for="dni">DNI</label>
                            <input type="text" id="dni" name="dni" placeholder="Introdueix el teu DNI" required
                                aria-label="Introdueix el teu DNI">

                            <label for="nombre">Nom</label>
                            <input type="text" id="nom" name="nom" placeholder="Introdueix el teu nom" required
                                aria-label="Introdueix el teu nom">

                            <label for="apellidos">Cognoms</label>
                            <input type="text" id="cognoms" name="cognoms" placeholder="Introdueix el teu cognom"
                                required aria-label="Introdueix el teu cognom">

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Introdueix el teu email" required
                                aria-label="Introdueix el teu Email">

                            <label for="telefono">Telefon</label>
                            <input type="telefono" id="telefon" name="telefon"
                                placeholder="Introdueix el teu numero de telefon" required
                                aria-label="Introdueix el teu numero de telefon">

                            <label for="password">Contrasenya</label>
                            <input type="password" id="password" name="password"
                                placeholder="Introdueix la teva contrasenya" required
                                aria-label="Introdueix la teva contrasenya">

                            <label for="password-confirm">Confirma la contrasenya</label>
                            <input type="password" id="password-confirm" name="password-confirm"
                                placeholder="Confirma la contrasenya" required aria-label="Confirma la contrasenya">

                            <button type="submit">Registrarse</button>
                        </fieldset>
                    </form>

                    <p>¿Ja tens un compte? <a href="login.view.php">Inicia sesió aquí</a></p>
                </div>
            </section>
        </main>
    </div>
    <!-- Apartat: Footer -->
    <footer>
        <section id="links-footer">
            <div id="enllacos-descarregar">
                <div id="enllacos">
                    <p>Segueix-nos a les Xarxes</p>
                    <div id="icon-enllac">
                        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
                <div id="descarrega">
                    <p>Ja pots obtenir l'APP</p>
                    <a href="#"><i class="fa-solid fa-download"></i>Descarregar</a>
                </div>
            </div>

            <hr>

            <div id="politiques-termes">
                <div id="politiques">
                    <a href="politiques-de-privacitat.view.php">Politiques de privacitat</a>
                </div>
                <div id="termes">
                    <a href="termes-i-condicions.view.php">Termes i condicions</a>
                </div>
            </div>

            <div id="copyright-info">
                <p>© 1990-2024 by LyricVault.com, Inc.</p>
            </div>
        </section>
    </footer>
</body>

</html>
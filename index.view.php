<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyric Vault | Inicio</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo/logo-lyricvault-2.png">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/estils-generals.css">
</head>

<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                <a href="index.php">
                    <img src="assets/img/logo/logo-lyricvault-2.png" alt="Lyric Vault Logo">
                </a>
            </div>
            <ul class="nav-links">
                <li class="nav-item"><a href="php/novetats.php">Novetats</a></li>
                <li class="nav-item"><a href="php/artistes.php">Artistes</a></li>
                <li class="nav-item"><a href="php/gires.php">Gires</a></li>
            </ul>
            <div class="login-register">
                <a href="vistes/login.view.php" class="btn">Login</a>
                <a href="vistes/registre.view.php" class="btn">Registre</a>
            </div>
        </nav>
    </header>


    <div id="all">
        <!-- Apartat: Main -->
        <main>
            <!-- Apartat: Tendències i Gires -->
            <section id="tendencies-gires">
                <!-- Apartat: Tendències -->
                <div id="tendencies">
                    <h2>Tendència</h2>
                    <div id="imgtendencies">
                        <img src="assets/img/MV5BYjg0MmQ4NjQtNmZlYS00MWUxLTk2YTktMzFjODAxNzc0ZGNhXkEyXkFqcGc@._V1_FMjpg_UY1777_.jpg" alt="Tendència">
                    </div>
                </div>

                <!-- Apartat: Gires -->
                <div id="gires">
                    <h2>Gires</h2>
                    <div id="conjunt-detalls-gires">
                        <!-- Repetir este bloque para cada gira -->
                        <div class="detalls-gires">
                            <div class="mes-dia">
                                <p>septembre</p>
                                <p>16</p>
                            </div>
                            <div class="ciutat-direccio">
                                <p>Lleida</p>
                                <p>Carrer Sant Roc nº23</p>
                            </div>
                        </div>
                        <!-- Fin de bloque de gira -->
                    </div>
                    <a href="php/gires.php"><button>Veure'n més</button></a>
                </div>
            </section>

            <!-- Apartat: Famosos populars -->
            <section id="famosos-populars">
                <h2>Famosos més populars</h2>
                <div id="opcions-perfils-famosos">
                    <!-- Repetir este bloque para cada famoso -->
                    <div class="fitxa-famos">
                        <div class="escalarimg">
                            <img src="assets/img/MV5BYjg0MmQ4NjQtNmZlYS00MWUxLTk2YTktMzFjODAxNzc0ZGNhXkEyXkFqcGc@._V1_FMjpg_UY1777_.jpg" alt="Nombre del artista">
                        </div>
                        <p>nom artista/grup</p>
                    </div>
                    <!-- Fin de bloque de famoso -->
                </div>
            </section>

            <!-- Apartat: preferits-guardats -->
            <section id="preferits-guardats">
                <h2>Els teus preferits</h2>
                <div id="detalls-preferits">
                    <div class="dades-preferit-guardat">
                        <div class="foto-preferit">
                            <img src="assets/img/MV5BYjg0MmQ4NjQtNmZlYS00MWUxLTk2YTktMzFjODAxNzc0ZGNhXkEyXkFqcGc@._V1_FMjpg_UY1777_.jpg" alt="Título del preferido">
                        </div>
                        <div class="titol-artista-preferit">
                            <p>titol</p>
                            <p>artista</p>
                        </div>
                    </div>
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
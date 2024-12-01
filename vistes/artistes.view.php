<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyric Vault | Artistes</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logo/logo-lyricvault-2.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/estils-generals.css">
    <link rel="stylesheet" href="../assets/css/estils-artistes.css">
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
        <!-- Apartat: Main -->
        <main>
            <section id="buscador">
                <div id="buscar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" id="buscarArtista" onkeyup="filtrar_locals()"
                        placeholder="Buscar per artistes, generes...">
                </div>
            </section>

            <section id="llistar-artistes">
                <?php
                if (!empty($artistes)) {
                    foreach ($artistes as $artista) {
                        ?>
                        <div class="dades_artista">
                            <a href="artista.php?ID_Artista=<?php echo ($artista['ID_Artista']); ?>">
                                <div class="foto-artista">
                                    <img src="<?php echo htmlspecialchars($artista['Foto']); ?>" alt="<?php echo ($artista['Nom_Artista']); ?>">
                                </div>
                                <div class="nom-genere-artista">
                                    <h2><?php echo htmlspecialchars($artista['Nom_Artista']); ?></h2>
                                    <p><?php echo htmlspecialchars($artista['Genere']); ?></p>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                } else {
                    echo '<p>No hi ha artistes disponibles.</p>';
                }
                ?>
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

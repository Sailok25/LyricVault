<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LyricValut | Artista</title>
    <link rel="icon" type="image/x-icon" href="img/lyricVault.jpg">
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/estils-generals.css">
    <link rel="stylesheet" href="../assets/css/estils-artistes.css">
</head>

<body>
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
        <?php
    if (!empty($artista_detall)) { ?>

            <!-- Apartat: artista -->
            <section id="artista">

                <!-- Apartat: foto -->
                <div id="foto-artista">
                    <img src="<?php echo $artista_detall['Foto'];?>" alt="<?php echo $artista_detall['Nom_Artista']; ?>">
                </div>
                <div id="dades-artista">
                    <div class="dades-principals-artista">
                        <h2><?php echo $artista_detall['Nom_Artista']; ?></h2>
                        <p class="descripcio"><?php echo $artista_detall['Descripcio_Artista']; ?></p>
                    </div>

                    <hr class="barra-horitzontal">

                    <div class="dades-adicionals-artista">
                        <!-- <p class="estat"><b>Estat:</b> actiu - inactiu</p> -->
                        <p class="genere"><b>Genere: </b><?php echo $artista_detall['Genere']; ?></p>
                        <p class="llocweb"><b>Lloc Web: </b><a href="<?php echo $artista_detall['Lloc_Web']; ?>" target="_blank"><?php echo $artista_detall['Lloc_Web']; ?></a></p>
                        <!-- <p class="carrera"><b>Carrera:</b> 00's - today / 00's - 00's</p> -->
                        <!-- <p class="valoracio-usuaris"><b>Valoració usuaris:</b>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </p> -->
                    </div>

                    <hr class="barra-horitzontal">

                    <div id="artistes-similars">
                        <div class="mostrar-artista-similar">
                            <div class="foto-artista-similar">
                                <img src="/img/MV5BYjg0MmQ4NjQtNmZlYS00MWUxLTk2YTktMzFjODAxNzc0ZGNhXkEyXkFqcGc@._V1_FMjpg_UY1777_.jpg"
                                    alt="">
                            </div>
                            <p>nom-artista</p>
                        </div>


                        <div class="mostrar-artista-similar">
                            <div class="foto-artista-similar">
                                <img src="/img/MV5BYjg0MmQ4NjQtNmZlYS00MWUxLTk2YTktMzFjODAxNzc0ZGNhXkEyXkFqcGc@._V1_FMjpg_UY1777_.jpg"
                                    alt="">
                            </div>
                            <p>nom-artista</p>
                        </div>

                        <div class="mostrar-artista-similar">
                            <div class="foto-artista-similar">
                                <img src="/img/MV5BYjg0MmQ4NjQtNmZlYS00MWUxLTk2YTktMzFjODAxNzc0ZGNhXkEyXkFqcGc@._V1_FMjpg_UY1777_.jpg"
                                    alt="">
                            </div>
                            <p>nom-artista</p>
                        </div>

                        <div class="mostrar-artista-similar">
                            <div class="foto-artista-similar">
                                <img src="/img/MV5BYjg0MmQ4NjQtNmZlYS00MWUxLTk2YTktMzFjODAxNzc0ZGNhXkEyXkFqcGc@._V1_FMjpg_UY1777_.jpg"
                                    alt="">
                            </div>
                            <p>nom-artista</p>
                        </div>

                        <div class="mostrar-artista-similar">
                            <div class="foto-artista-similar">
                                <img src="/img/MV5BYjg0MmQ4NjQtNmZlYS00MWUxLTk2YTktMzFjODAxNzc0ZGNhXkEyXkFqcGc@._V1_FMjpg_UY1777_.jpg"
                                    alt="">
                            </div>
                            <p>nom-artista</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="discografia">
                <h2>Discografiía</h2>
                <div class="dades-preferit-guardat">
                    <div class="foto-preferit">
                        <img src="/img/MV5BYjg0MmQ4NjQtNmZlYS00MWUxLTk2YTktMzFjODAxNzc0ZGNhXkEyXkFqcGc@._V1_FMjpg_UY1777_.jpg"
                            alt="">
                    </div>
                    <div class="titol-artista-preferit">
                        <p>titol</p>
                        <p>artista</p>
                    </div>
                </div>
            </section>

            <section class="gires"></section>

            <section class="premis"></section>
        
        <?php
                    }else {
                    echo '<p>No hi ha artistes disponibles.</p>';
                }
                ?>
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
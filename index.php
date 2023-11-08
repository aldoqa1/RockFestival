<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina de conciertos">
    <title>Conciertos</title>
    <link rel="preload" href="build/CSS/app.css" as="style">
    <link rel="stylesheet" href="build/CSS/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600;900&display=swap" rel="stylesheet">
</head>
<body>

    <div class="header">

        <div class="contenedor contenedor-grid-2">

            <h1 class="header__titulo blanco">Rock & EDM Festival</h1>

            <nav class="header__navegacion">
                <a href="#lineup">Line Up</a>
                <a href="#galeria">Galeria</a>
                <a href="#boletos">Tickets</a>
            </nav>

        </div>

    </div>

    <div class="video">

        <video class="video__video" width="100%" autoplay muted loop>
            <source src="video/concierto.mp4" type="video/mp4" />
            <source src="video/concierto.ogg" type="video/ogg" />
            <source src="video/concierto.webm" type="video/webm" />
        </video>

        <div class="video__bkg">

        </div>

        <div class="video__texto">
            <h2>Rock & EDM Festival</h2>
            <p class="boton">Julio 2022, Mexicali, Mexico</p>
        </div>

    </div>

    <div class="invitacion">

        <div class="contenedor contenedor-grid-2">

            <picture class="invitacion__imagen">
                <source srcset="build/img/imagen_vocalista.avif" type="image/avif">
                <source srcset="build/img/imagen_vocalista.webp" type="image/webp">
                <img width="200" height="300" loading="lazy" src="build/img/imagen_vocalista.jpg" alt="vocalista">
            </picture>

            <div class="invitacion__texto">
                <h3>Rock & EDM Festival</h3>
                <p class="rojo">Julio 2022, Mexicali, Mexico</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat nisi culpa harum ullam voluptas fuga earum, ipsa necessitatibus, itaque error laudantium laborum reiciendis. Odio tempore hic fugit aliquam adipisci voluptatum?</p>
            </div>

        </div>

    </div>

    <div id="lineup" class="lineup">
        <div class="contenedor flex">
            <h2 class="blanco">Line UP</h2>
            <h3 class="blanco">Viernes 22</h3>
            <div class="contenedor-grid-2">
                <div class="lineup__calendario1">
                    <h3>Escenario Pop</h3>
                    <picture>
                        <source srcset="build/img/icono_edm.avif" type="image/avif">
                        <source srcset="build/img/icono_edm.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="build/img/icono_edm.png" alt="icono">
                    </picture>

                    <ul>
                        <li>
                            24:00 | <span>Deadmau5</span>
                        </li>
                        <li>
                            22:00 | <span>Tïesto</span>
                        </li>
                        <li>
                            20:00 | <span>Hardwell</span>
                        </li>
                        <li>
                            19:00 | <span>Dash Berlin</span>
                            </li>

                        <li>
                            18:00 | <span>Fedde Legrand</span>
                        </li>
                        <li>
                            17:00 | <span>Audien</span>
                        </li>
                    </ul>

                </div>

                <div class="lineup__calendario2">
                    <h3>Escenario Rock</h3>
                    <picture>
                        <source srcset="build/img/icono_rock.avif" type="image/avif">
                        <source srcset="build/img/icono_rock.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="build/img/icono_rock.png" alt="icono">
                    </picture>

                    <ul>
                        <li>
                            24:00 | <span>Metallica</span>
                        </li>
                        <li>
                            22:00 | <span>Pearl Jam</span>
                        </li>
                        <li>
                            20:00 | <span>KoRn</span>
                        </li>
                        <li>
                            19:00 | <span>Muse</span>
                        </li>
                        <li>
                            18:00 | <span>Breaking Benjamin</span>
                        </li>
                        <li>
                            17:00 | <span>30 Seconds to Mars</span>
                        </li>
                    </ul>


                </div>

            </div>
            <h3 class="blanco">Sabado 22</h3>
            <div class="contenedor-grid-2">


                <div class="lineup__calendario2">
                    <h3>Escenario Rock</h3>
                    <picture>
                        <source srcset="build/img/icono_rock.avif" type="image/avif">
                        <source srcset="build/img/icono_rock.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="build/img/icono_rock.png" alt="icono">
                    </picture>

                    <ul>
                        <li>
                            24:00 | <span>Metallica</span>
                        </li>
                        <li>
                            22:00 | <span>Pearl Jam</span>
                        </li>
                        <li>
                            20:00 | <span>KoRn</span>
                        </li>
                        <li>
                            19:00 | <span>Muse</span>
                        </li>
                        <li>
                            18:00 | <span>Breaking Benjamin</span>
                        </li>
                        <li>
                            17:00 | <span>30 Seconds to Mars</span>
                        </li>
                    </ul>


                </div>

                <div class="lineup__calendario1">
                    <h3>Escenario Pop</h3>
                    <picture>
                        <source srcset="build/img/icono_edm.avif" type="image/avif">
                        <source srcset="build/img/icono_edm.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="build/img/icono_edm.png" alt="icono">
                    </picture>

                    <ul>
                        <li>
                            24:00 | <span>Deadmau5</span>
                        </li>
                        <li>
                            22:00 | <span>Tïesto</span>
                        </li>
                        <li>
                            20:00 | <span>Hardwell</span>
                        </li>
                        <li>
                            19:00 | <span>Dash Berlin</span>
                            </li>

                        <li>
                            18:00 | <span>Fedde Legrand</span>
                        </li>
                        <li>
                            17:00 | <span>Audien</span>
                        </li>
                    </ul>

                </div>


            </div>
        </div>
    </div>

    <div id="galeria" class="galeria contenedor flex">

        <h2>Galeria</h2>

        <div class="galeria__fotos">

        </div>

    </div>

    <div id="boletos" class="boletos">
        <h2 class="contenedor blanco">Boletos</h2>
        <div class="contenedor contenedor-grid-2">
            <div class="boletos__tabla">
                <ul>
                    <li>Incluye</li>
                    <li>Comida y bebida</li>
                    <li>Acceso a ambos escenarios</li>
                    <li>$100</li>
                </ul>
            </div>

            <div class="boletos__tabla">
                <ul>
                    <li>Incluye</li>
                    <li>Comida y bebida</li>
                    <li>Acceso a ambos escenarios</li>
                    <li>$100</li>
                </ul>
            </div>


        </div>
    </div>

    <div class="footer">
        <div class="contenedor">
            <p class="footer__texto">Derechos reservados Aldo Quevedo SA De CV</p>
        </div>
    </div>
    <script src="build/js/app.js"></script>
</body>
</html>
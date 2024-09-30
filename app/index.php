<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avenged Sevenfold - Pàgina de Fans</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts for Metal Aesthetic -->
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #1c1c1c;
            color: #d3d3d3;
            font-family: 'Metal Mania', cursive;
            letter-spacing: 1px;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #e5e5e5;
            text-shadow: 2px 2px #000;
        }

        p {
            color: #b2b2b2;
            font-size: 1.1rem;
        }

        /* Barra de navegació estilitzada */
        .navbar {
            background-color: #000;
            border-bottom: 3px solid #b30000;
        }

        .navbar-brand {
            font-size: 2rem;
            color: #e5e5e5 !important;
        }

        .nav-link {
            color: #d3d3d3 !important;
            font-size: 1.2rem;
        }

        .nav-link:hover {
            color: #ff3333 !important;
        }

        /* Estils de les targetes i imatges d'àlbums */
        .card {
            background-color: #2d2d2d;
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 15px #ff3333;
        }

        .album-cover {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .card-title {
            color: #ff3333;
            font-weight: bold;
            text-align: center;
        }

        .card-text {
            color: #b2b2b2;
            text-align: center;
        }

        /* Estils de la secció de membres */
        .membre-card img {
            border-radius: 50%;
            border: 3px solid #ff3333;
            transition: border-color 0.3s;
        }

        .membre-card:hover img {
            border-color: #ff6666;
        }

        .membre-card .card-title {
            color: #ff6666;
        }

        /* Efectes de transició per a vídeos */
        .ratio {
            border: 2px solid #ff3333;
            transition: border-color 0.3s, transform 0.3s;
        }

        .ratio:hover {
            border-color: #ff6666;
            transform: scale(1.03);
        }

        /* Efecte de separador entre seccions */
        .separador {
            border-top: 1px solid #ff3333;
            margin: 40px 0;
        }

        /* Footer estilitzat */
        footer {
            background-color: #000;
            padding: 20px;
            text-align: center;
            color: #d3d3d3;
            border-top: 3px solid #b30000;
        }
    </style>
</head>
<body>

<!-- Barra de navegació -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Avenged Sevenfold</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inici</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#albums">Àlbums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#membres">Membres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#videos">Vídeos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Secció de presentació -->
<div class="container mt-5 text-center">
    <h1>Benvingut a la Pàgina Oficial de Fans d'Avenged Sevenfold</h1>
    <p class="lead">Explora la nostra música, àlbums, membres, vídeos i més!</p>
</div>

<hr class="separador">

<!-- Secció d'àlbums -->
<div id="albums" class="container mt-5">
    <h2 class="text-center mb-4">Discografia</h2>
    <div class="row">
        <?php
        $albums = [
            ['titol' => 'Sounding the Seventh Trumpet', 'any' => 2001, 'imatge' => 'assets/1.png'],
            ['titol' => 'Waking the Fallen', 'any' => 2003, 'imatge' => 'assets/2.png'],
            ['titol' => 'City of Evil', 'any' => 2005, 'imatge' => 'assets/avenged.jpg'],
            ['titol' => 'Avenged Sevenfold', 'any' => 2007, 'imatge' => 'assets/city.jpg'],
            ['titol' => 'Nightmare', 'any' => 2010, 'imatge' => 'assets/hail.jpg'],
            ['titol' => 'Hail to the King', 'any' => 2013, 'imatge' => 'assets/nightmare.jpg'],
            ['titol' => 'The Stage', 'any' => 2016, 'imatge' => 'assets/stage.jpg']
        ];

        foreach ($albums as $album) {
            echo "
                    <div class='col-md-4 mb-4'>
                        <div class='card'>
                            <img src='{$album['imatge']}' alt='{$album['titol']}' class='album-cover card-img-top'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$album['titol']}</h5>
                                <p class='card-text'>Any de llançament: {$album['any']}</p>
                            </div>
                        </div>
                    </div>";
        }
        ?>
    </div>
</div>

<hr class="separador">

<!-- Secció dels membres de la banda -->
<div id="membres" class="container mt-5">
    <h2 class="text-center mb-4">Membres de la Banda</h2>
    <div class="row">
        <?php
        $membres = [
            ['nom' => 'M. Shadows', 'rol' => 'Veu Principal', 'imatge' => 'assets/1.png'],
            ['nom' => 'Synyster Gates', 'rol' => 'Guitarra Solista', 'imatge' => 'https://upload.wikimedia.org/wikipedia/commons/8/8b/Synyster_Gates.jpg'],
            ['nom' => 'Zacky Vengeance', 'rol' => 'Guitarra Rítmica', 'imatge' => 'https://upload.wikimedia.org/wikipedia/commons/c/cf/Zacky_Vengeance%2C_Rock_am_Ring_2014.jpg'],
            ['nom' => 'Johnny Christ', 'rol' => 'Baixista', 'imatge' => 'https://upload.wikimedia.org/wikipedia/commons/7/7d/Johnny_Christ_at_Rock_am_Ring_2014.jpg'],
            ['nom' => 'Brooks Wackerman', 'rol' => 'Bateria', 'imatge' => 'https://upload.wikimedia.org/wikipedia/commons/3/34/Brooks_Wackerman_2017.jpg']
        ];

        foreach ($membres as $membre) {
            echo "
                    <div class='col-md-4 mb-4 membre-card'>
                        <div class='card'>
                            <img src='{$membre['imatge']}' alt='{$membre['nom']}' class='card-img-top'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$membre['nom']}</h5>
                                <p class='card-text'>Rol: {$membre['rol']}</p>
                            </div>
                        </div>
                    </div>";
        }
        ?>
    </div>
</div>

<hr class="separador">

<!-- Secció de vídeos -->
<div id="videos" class="container mt-5">
    <h2 class="text-center mb-4">Vídeos Recomanats</h2>
    <div class="row text-center">
        <div class="col-md-6">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/DelhLppPSxY" title="Hail to the King - Avenged Sevenfold" allowfullscreen></iframe>
            </div>
            <p>Hail to the King</p>
        </div>
        <div class="col-md-6">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/qKcNyMBw818" title="Nightmare - Avenged Sevenfold" allowfullscreen></iframe>
            </div>
            <p>Nightmare</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="mt-5">
    <p>&copy; 2024 Pàgina de Fans d'Avenged Sevenfold. Dedicada als fans del metal.</p>
</footer>

<!-- Incloure Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
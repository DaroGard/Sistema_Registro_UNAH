<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio PUMA en construccion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="assets/img/UNAH-escudo.png">
    <link rel="stylesheet" href="css/indexStyles.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/6130fb0810.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="assets/img/logo-unah.png" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/index.php">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="construccion.php" href="#">Estudiantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="construccion.php">Docentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="construccion.php" data-bs-toggle="modal" data-bs-target="#reviewerModal">Revisores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminLogin.php">Administradores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admisiones.php">Admisiones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="construccion.php">Biblioteca</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="top-bar">
            <div>
                <nav class="navbar bg-body-tertiary" id="header-bar">
                    <div class="container-fluid">
                        <h1 class="navbar-brand">
                            Sitio PUMA en construccion...
                        </h1>
                    </div>
                </nav>
            </div>
            <div class="banner-container" id="underConstruction"></div>
        </div>
    </main>

    <footer>
        <nav class="navbar fixed-bottom bg-body-tertiary">
            <div class="container-fluid">
                <p>&copy; 2024 Universidad Nacional Autónoma de Honduras</p>
            </div>
        </nav>
    </footer>

    <!-- Ventana modal -->
     <reviewer-modal tag-id="reviewer" application="loginRevisorSolicitudesAd.php" exam="./admissions/uploadExamResults/login.php"></reviewer-modal>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="js/components//reviewerModal.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripciones</title>
    <link rel="icon" type="image/png" href="assets/img/UNAH-escudo.png">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admisionesStyles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6130fb0810.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <navbar-unah></navbar-unah>
        <div class="top-bar">
            <div>
                <nav class="navbar bg-body-tertiary" id="header-bar">
                    <div class="container-fluid d-flex justify-content-between align-items-center" id="banner-container">
                        <h1 class="navbar-brand">
                            Direccion del Sistema de Admisiones
                        </h1>
                        <div id="carouselSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/banner-2025-08-PAC.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/banner-pruebas2-11.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/banner-pruebas2-12.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="main-navbar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col">
                        <a href="inscripciones.php">
                            <div class="custom-box">Inscripciones</div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="./admissions/applicantResults/">
                            <div class="custom-box">Resultados</div>
                        </a>
                    </div>
                    <div class="col">
                        <div class="custom-box" id="reviewersBox">Revisores</div>
                    </div>
                    <div class="col">
                        <a href="construccion.php">
                            <div class="custom-box">Preguntas Frecuentes</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container text-center">
                <div class="row row-cols-4">
                    <a href="construccion.php">
                        <div class="col"><img src="assets/img/Ciencias-color.png" alt=""></div>
                    </a>
                    <a href="construccion.php">
                        <div class="col"><img src="assets/img/Ciencias-Economicas-color.png" alt=""></div>
                    </a>
                    <a href="construccion.php">
                        <div class="col"><img src="assets/img/Ciencias-Juridicas-color.png" alt=""></div>
                    </a>
                    <a href="construccion.php">
                        <div class="col"><img src="assets/img/Ciencias-Sociales-color.png" alt=""></div>
                    </a>
                    <a href="construccion.php">
                        <div class="col"><img src="assets/img/Ingenieria-color.png" alt=""></div>
                    </a>
                    <a href="construccion.php">
                        <div class="col"><img src="assets/img/Ciencias-Espaciales-color.png" alt=""></div>
                    </a>
                    <a href="construccion.php">
                        <div class="col"><img src="assets/img/Humanidades-y-Artes-color.png" alt=""></div>
                    </a>
                    <a href="construccion.php">
                        <div class="col"><img src="assets/img/Quimica-y-Farmacia-color.png" alt=""></div>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <footer-unah></footer-unah>

    <!-- Ventana modal -->
     <modal-success tag-id="submission-success" modal-id="submission" arial-label-led-by="fileSuccessModal" header-title="Solicitud Enviada Correctamente" arial-label="sucess" hidden="false"></modal-success>
     <reviewer-modal tag-id="reviewer" application="loginRevisorSolicitudesAd.php" exam="./admissions/uploadExamResults/login.php"></reviewer-modal>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/components/successModal.js"></script>
    <script src="js/components/modal.js"></script>
    <script src="js/components/navbar.js"></script>
    <script src="js/components/footer.js"></script>
    <script src="js/components/reviewerModal.js"></script>
    <script>
        document.getElementById('reviewersBox').addEventListener('click', function() {
            var myModal = new bootstrap.Modal(document.getElementById('reviewerModal'));
            myModal.show();
        });
    </script>
</body>

</html>
<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica03/Views/layout.php";
?>

<!DOCTYPE html>
<html lang="es">

<?php MostrarCSS(); ?>

<body>

    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <?php MostrarNav(); ?>

    <div class="overlay"></div>
    <main class="main-wrapper">

        <?php MostrarHeader(); ?>

        <section class="section">
            <div class="container-fluid">
                <div class="title-wrapper pt-30">

                    <div class="row align-items-center mb-4">
                        <div class="col-12 text-center">
                            <h3>Bienvenido al Sistema de Abonos</h3>
                            <p class="text-muted">Seleccione una opción para continuar</p>
                        </div>
                    </div>

                    <div class="row g-4 justify-content-center">

                        <div class="col-sm-6 col-md-4">
                            <a href="Views/vConsulta/consultarCompras.php" class="text-decoration-none">
                                <div class="card h-100 shadow-sm text-center p-4">
                                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                        <i class="fas fa-list fa-3x text-primary mb-3"></i>
                                        <h5 class="card-title">Consulta</h5>
                                        <p class="card-text text-muted">Visualizar todos los productos y su estado de pago</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <a href="Views/vRegistro/registrarAbono.php" class="text-decoration-none">
                                <div class="card h-100 shadow-sm text-center p-4">
                                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                        <i class="fas fa-plus-circle fa-3x text-success mb-3"></i>
                                        <h5 class="card-title">Registro</h5>
                                        <p class="card-text text-muted">Registrar un pago parcial a una compra pendiente</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main>

    <?php MostrarJS(); ?>

</body>
</html>

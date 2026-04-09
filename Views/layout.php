<?php

function MostrarCSS()
{
    echo
    '<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Práctica 3</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/2.3.7/css/dataTables.bootstrap5.css" />
        <link rel="stylesheet" href="../assets/css/main.css" />
    </head>';
}

function MostrarNav()
{
    echo
    '<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4">
        <span class="navbar-brand fw-bold">
            <i class="fas fa-wallet me-2"></i>Bienvenido — Sistema de Abonos
        </span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../vConsulta/consultarCompras.php">
                        <i class="fas fa-list me-1"></i>Consulta
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../vRegistro/registrarAbono.php">
                        <i class="fas fa-plus-circle me-1"></i>Registro
                    </a>
                </li>
            </ul>
        </div>
    </nav>';
}

function MostrarJS()
{
    echo
    '<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.7/js/dataTables.bootstrap5.js"></script>';
}

<?php

function MostrarCSS()
{
    echo
    '<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Práctica 3</title>

        <link rel="stylesheet" href="/Practica03/Views/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/Practica03/Views/assets/css/lineicons.css" />
        <link rel="stylesheet" href="/Practica03/Views/assets/css/materialdesignicons.min.css" />
        <link rel="stylesheet" href="/Practica03/Views/assets/css/main.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/2.3.7/css/dataTables.bootstrap5.css" />
    </head>';
}

function MostrarNav()
{
    echo
    '<aside class="sidebar-nav-wrapper">
        <div class="navbar-logo">
            <a href="/Practica03/Views/vHome/inicio.php" style="text-decoration:none;">
                <span class="text-primary" style="font-size:1.3rem; font-weight:700; letter-spacing:0.5px;">Práctica 03</span>
            </a>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li class="nav-item">
                    <a href="/Practica03/Views/vConsulta/consultarCompras.php">
                        <span class="icon">
                            <i class="fas fa-list" style="font-size:20px;"></i>
                        </span>
                        <span class="text">Consulta</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Practica03/Views/vRegistro/registrarAbono.php">
                        <span class="icon">
                            <i class="fas fa-plus-circle" style="font-size:20px;"></i>
                        </span>
                        <span class="text">Registro</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>';
}

function MostrarHeader()
{
    echo
    '<header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-6">
                    <div class="header-left d-flex align-items-center">
                        <div class="menu-toggle-btn mr-15">
                            <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                                <i class="lni lni-chevron-left me-2"></i>
                            </button>
                        </div>
                        <span class="fw-bold">Bienvenido — Sistema de Abonos</span>
                    </div>
                </div>
            </div>
        </div>
    </header>';
}

function MostrarJS()
{
    echo
    '<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="/Practica03/Views/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/Practica03/Views/assets/js/main.js"></script>
    <script src="https://cdn.datatables.net/2.3.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.7/js/dataTables.bootstrap5.js"></script>';
}

<?php
<?php 
    include_once '../layout.php';
    include_once '../../Controllers/ConsultaController.php';

    $datos = ConsultarCompras();
?>

<!DOCTYPE html>
<html lang="es">
<?php MostrarCSS(); ?>
<body>
    <?php MostrarNav(); ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Consulta de Compras</h2>

        <?php
            if(isset($_POST["Mensaje"])) {
                $mensaje = htmlspecialchars($_POST["Mensaje"], ENT_QUOTES, 'UTF-8');
                echo '<div class="alert alert-info text-center">' . $mensaje . '</div>';
            }
        ?>

        <table id="tCompras" class="table table-hover table-bordered shadow-sm" aria-label="Tabla de compras">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Saldo</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (!empty($datos)) {
                        foreach ($datos as $fila) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($fila["Id_Compra"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . htmlspecialchars($fila["Descripcion"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . number_format($fila["Precio"], 2) . '</td>';
                            echo '<td>' . number_format($fila["Saldo"], 2) . '</td>';
                            echo '<td>' . htmlspecialchars($fila["Estado"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="5" class="text-center">No se encontraron compras.</td></tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="../../assets/funciones/consultarCompras.js"></script>
</body>
</html>
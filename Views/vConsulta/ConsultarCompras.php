<?php 
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Practica_03/Views/layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Practica_03/Controllers/ConsultaController.php';

    $datos = ConsultarCompras();
?>

<!DOCTYPE html>
<html lang="es">
<?php MostrarCSS(); ?>
<body>
    <?php MostrarNav(); ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Consulta de Compras</h2>

        <table id="tCompras" class="table table-hover table-bordered shadow-sm">
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
                            echo '<td>' . htmlspecialchars($fila["Id_Compra"]) . '</td>';
                            echo '<td>' . htmlspecialchars($fila["Descripcion"]) . '</td>';
                            echo '<td>' . number_format($fila["Precio"], 2) . '</td>';
                            echo '<td>' . number_format($fila["Saldo"], 2) . '</td>';
                            echo '<td>' . htmlspecialchars($fila["Estado"]) . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="5" class="text-center">No se encontraron compras.</td></tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>

    <?php MostrarJS(); ?>
</body>
</html>


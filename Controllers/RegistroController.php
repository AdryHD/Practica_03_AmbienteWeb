<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica_03/Models/PrincipalModel.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica_03/Models/AbonoModel.php";

function ConsultarComprasPendientes()
{
    return ConsultarComprasPendientesModel();
}

if (isset($_POST["btnGetSaldo"])) {
    $idCompra = $_POST["IdCompra"];
    $datos = ConsultarSaldoCompraModel($idCompra);

    echo json_encode(["Saldo" => $datos["Saldo"]]);
    exit; 
}


if (isset($_POST["btnAbonar"])) {
    $idCompra = $_POST["IdCompra"];
    $monto    = $_POST["Monto"];
    

    $saldoActual = ConsultarSaldoCompraModel($idCompra);

    if ($monto <= $saldoActual["Saldo"]) {
        $result = RegistrarAbonoModel($idCompra, $monto, date("Y-m-d H:i:s"));

        if ($result) {
            header("Location: ../../Views/vConsulta/ConsultarCompras.php");
            exit;
        } else {
            $_POST["Mensaje"] = "El abono no fue registrado correctamente";
        }
    } else {
        $_POST["Mensaje"] = "El abono no puede ser mayor al saldo anterior";
    }
}

<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica_03/Models/UtilitarioModel.php";

function RegistrarAbonoModel($idCompra, $monto, $fecha)
{
    try
    {
        $context = OpenDatabase();

        $sp = "CALL sp_RegistrarAbono('$idCompra', '$monto', '$fecha')";
        $result = $context->query($sp);

        CloseDatabase($context);
        return $result;
    }
    catch (Exception $e)
    {
        return false;
    }
}

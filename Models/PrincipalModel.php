<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica_03/Models/UtilitarioModel.php";

function ConsultarComprasModel()
{
    try
    {

        $context = UtilitarioModel::OpenDatabase();

        $sp = "CALL sp_ConsultarCompras()";
        $result = $context->query($sp);

        $datos = [];
        while ($fila = $result->fetch_assoc())
        {
            $datos[] = $fila;
        }

        UtilitarioModel::CloseDatabase($context);
        return $datos;
    }
    catch (Exception $e)
    {
        return null;
    }
}

function ConsultarComprasPendientesModel()
{
    try
    {

        $context = UtilitarioModel::OpenDatabase();

        $sp = "CALL sp_ConsultarComprasPendientes()";
        $result = $context->query($sp);

        $datos = [];
        while ($fila = $result->fetch_assoc())
        {
            $datos[] = $fila;
        }


        UtilitarioModel::CloseDatabase($context);
        return $datos;
    }
    catch (Exception $e)
    {
        return null;
    }
}

function ConsultarSaldoCompraModel($idCompra)
{
    try
    {

        $context = UtilitarioModel::OpenDatabase();

        $sp = "CALL sp_ConsultarSaldoCompra('$idCompra')";
        $result = $context->query($sp);

        $datos = null;
        while ($fila = $result->fetch_assoc())
        {
            $datos = $fila;
        }

        UtilitarioModel::CloseDatabase($context);
        return $datos;
    }
    catch (Exception $e)
    {
        return null;
    }
}
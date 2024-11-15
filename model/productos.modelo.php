<?php

require_once 'conexion.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

class ProductosModelo{
    static public function mdlCargaMasivaProductos($fileProductos){
        $nombreArchivo = $fileProductos['tmp_name'];
        $documento = IOFactory::load($nombreArchivo);

        $hojaCategorias = $documento->getSheet(1);
        $numeroFilasCategorias = $hojaCategorias->getHighestDataRow();

        var_dump($numeroFilasCategorias);
    }
}
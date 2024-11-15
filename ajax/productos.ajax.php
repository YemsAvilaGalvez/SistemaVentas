<?php

require_once '../controller/productos.controlador.php';
require_once '../model/productos.modelo.php';
require_once '../vendor/autoload.php';
class AjaxProductos{
    public $fileProductos;

    public function ajaxCargaMasivaProductos(){
        $respuesta = ProductosControlador::ctrCargaMasivaProductos($this->fileProductos);
        return json_encode($respuesta);
    }
}

if (isset($_FILES)) {
    $archivo_productos = new AjaxProductos();
    $archivo_productos -> fileProductos = $_FILES['fileProductos'];
    $archivo_productos -> ajaxCargaMasivaProductos();
}
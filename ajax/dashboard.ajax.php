<?php
require_once '../controller/dashboard.controlador.php';
require_once '../model/dashboard.modelo.php';
class AjaxDashboard
{

    public function getDatosDashboard()
    {
        $datos = DashboardControlador::ctrGetDatosDashboard();
        echo json_encode($datos);
    }

    public function getVentasMesActual(){
        $ventasMesActual = DashboardControlador::ctrGetVentasMesActual();
        echo json_encode($ventasMesActual);
    }

    public function getProductosMasVendidos(){
        $productosMasVendidos = DashboardControlador::ctrGetProductosMasVendidos();
        echo json_encode($productosMasVendidos);
    }

    public function getProductosConPocoStock(){
        $productosConPocoStock = DashboardControlador::ctrGetProductosConPocoStock();
        echo json_encode($productosConPocoStock);
    }
}

if (isset($_POST['accion']) && $_POST['accion'] == 1) {
    $ventasMesActual = new AjaxDashboard();
    $ventasMesActual -> getVentasMesActual();
}elseif (isset($_POST['accion']) && $_POST['accion'] == 2) {
    $productosMasVendidos = new AjaxDashboard();
    $productosMasVendidos -> getProductosMasVendidos();
}elseif (isset($_POST['accion']) && $_POST['accion'] == 3) {
    $productosConPocoStock = new AjaxDashboard();
    $productosConPocoStock -> getProductosConPocoStock();
}else {
    $datos = new AjaxDashboard();
    $datos->getDatosDashboard();
}

<?php
require_once '../controller/dashboard.controlador.php';
require_once '../model/dashboard.modelo.php';
class AjaxDashboard {

    public function getDatosDashboard(){
        $datos = DashboardControlador::ctrGetDatosDashboard();
        echo json_encode($datos);
    }
}

$datos = new AjaxDashboard();
$datos->getDatosDashboard();
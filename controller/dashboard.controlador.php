<?php
class DashboardControlador {
    static public function ctrGetDatosDashboard(){
        $datos = DashboardModelo::mldGetDatosDashboard();

        return $datos;
    }
}
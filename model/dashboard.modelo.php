<?php

require_once 'conexion.php';

class DashboardModelo {
    static public function mldGetDatosDashboard(){
        $stmt = Conexion::conectar()->prepare('call prc_ObtenerDatosDashboard');

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
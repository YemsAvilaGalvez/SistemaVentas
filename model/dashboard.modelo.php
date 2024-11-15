<?php

require_once 'conexion.php';

class DashboardModelo {
    static public function mldGetDatosDashboard(){
        $stmt = Conexion::conectar()->prepare('call prc_ObtenerDatosDashboard');

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mldGetVentasMesActual(){
        $stmt = Conexion::conectar()->prepare('call prc_ObtenerVentasMesActual');

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mldGetProductosMasVendidos(){
        $stmt = Conexion::conectar()->prepare('call prc_ListarProductosMasVendidos');

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    
    static public function mldGetProductosConPocoStock(){
        $stmt = Conexion::conectar()->prepare('call prc_ListarProductosConPocoStock');

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
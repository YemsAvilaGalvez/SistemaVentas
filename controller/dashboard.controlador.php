<?php
class DashboardControlador {
    static public function ctrGetDatosDashboard(){
        $datos = DashboardModelo::mldGetDatosDashboard();

        return $datos;
    }

    static public function ctrGetVentasMesActual(){
        $ventasMesActual = DashboardModelo::mldGetVentasMesActual();

        return $ventasMesActual;
    }

    
    static public function ctrGetProductosMasVendidos(){
        $productosMasVendidos = DashboardModelo::mldGetProductosMasVendidos();

        return $productosMasVendidos;
    }

    static public function ctrGetProductosConPocoStock(){
        $productosConPocoStock = DashboardModelo::mldGetProductosConPocoStock();

        return $productosConPocoStock;
    }
}
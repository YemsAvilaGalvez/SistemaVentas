     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">Tablero Principal</h1>
                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                         <li class="breadcrumb-item active">Tablero Principal</li>
                     </ol>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <div class="content">
         <div class="container-fluid">

             <div class="row">
                 <div class="col-lg-2">
                     <!-- small box -->
                     <div class="small-box bg-info">
                         <div class="inner">
                             <h3 id="totalProductos"> </h3>

                             <p>Productos Registrados</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-clipboard"></i>
                         </div>
                         <a href="#" class="small-box-footer" onclick="abrirUrl('view/productos.php','content-wrapper')">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-2">
                     <!-- small box -->
                     <div class="small-box bg-success">
                         <div class="inner">
                             <h3  id="totalCompras"></h3>

                             <p>Total Compras</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-cash"></i>
                         </div>
                         <a href="#" class="small-box-footer" onclick="abrirUrl('view/productos.php','content-wrapper')">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-2">
                     <!-- small box -->
                     <div class="small-box bg-warning">
                         <div class="inner">
                             <h3  id="totalVentas"> </h3>

                             <p>Total Ventas</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-clipboard"></i>
                         </div>
                         <a href="#" class="small-box-footer" onclick="abrirUrl('view/productos.php','content-wrapper')">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-2">
                     <!-- small box -->
                     <div class="small-box bg-danger">
                         <div class="inner">
                             <h3  id="totalGanancias"> </h3>

                             <p>Ganancias</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-clipboard"></i>
                         </div>
                         <a href="#" class="small-box-footer" onclick="abrirUrl('view/productos.php','content-wrapper')">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-2">
                     <!-- small box -->
                     <div class="small-box bg-primary">
                         <div class="inner">
                             <h3 id="totalProductosMinStock"></h3>

                             <p>Productos poco Stock</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-clipboard"></i>
                         </div>
                         <a href="#" class="small-box-footer" onclick="abrirUrl('view/productos.php','content-wrapper')">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-2">
                     <!-- small box -->
                     <div class="small-box bg-secondary">
                         <div class="inner">
                             <h3  id="totalVentasHoy"> </h3>

                             <p>Ventas del Dia</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-clipboard"></i>
                         </div>
                         <a href="#" class="small-box-footer" onclick="abrirUrl('view/productos.php','content-wrapper')">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>

             </div>
             <!-- /.row -->

         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content -->

     <script>
         $(document).ready(function() {
             $.ajax({
                 url: 'ajax/dashboard.ajax.php',
                 dataType: 'json',
                 method: 'POST',
                 success: function(respuesta) {
                     console.log('respuesta', respuesta)
                     $('#totalProductos').html(respuesta[0]['totalProductos'])
                     $("#totalCompras").html('S/. ' + respuesta[0]['totalCompras'].toString().replace(/\d(?=(\d{3})+\.)/g, "$&,"))
                     $('#totalVentas').html('S/. ' + respuesta[0]['totalVentas'].toString().replace(/\d(?=(\d{3})+\.)/g, "$&,"))
                     $('#totalGanancias').html('S/. ' + respuesta[0]['ganancias'].toString().replace(/\d(?=(\d{3})+\.)/g, "$&,"))
                     $('#totalProductosMinStock').html(respuesta[0]['productosPocoStock'])
                     $('#totalVentasHoy').html('S/. ' + respuesta[0]['ventasHoy'].toString().replace(/\d(?=(\d{3})+\.)/g, "$&,"))
                 }
             })
         })
     </script>
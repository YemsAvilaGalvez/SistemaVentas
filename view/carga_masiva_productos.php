     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">Carga Masiva</h1>
                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                         <li class="breadcrumb-item active">Carga Masiva</li>
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
                 <div class="col-12">
                     <!-- STACKED BAR CHART -->
                     <div class="card card-info">
                         <div class="card-header">
                             <h3 class="card-title">Seleccione Archivo a Importar (EXCEL)</h3>

                             <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                     <i class="fas fa-minus"></i>
                                 </button>
                             </div>
                         </div>
                         <div class="card-body">
                             <form method="post" enctype="multipart/form-data" id="form_carga_productos">
                                 <div class="row">
                                     <div class="col-lg-10">
                                         <input class="form-control" type="file" name="fileProductos" id="fileProductos" accept=".xls, .xlsx">
                                     </div>
                                     <div class="col-lg-2">
                                         <input type="submit" class="btn btn-primary" value="Cargar Productos" id="btnCargar">
                                     </div>
                                 </div>
                             </form>
                         </div>
                         <!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                 </div>
             </div>
             <!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content -->

     <script>
         $(document).ready(function() {
             $('#form_carga_productos').on('submit', function(e) {
                 e.preventDefault();

                 /** validar que se seleccione un archivo */
                 if ($('#fileProductos').get(0).files.length == 0) {
                     Swal.fire({
                         position: 'center',
                         icon: 'warning',
                         title: 'No se selecciono un archivo',
                         showConfirmButton: false,
                         timer: 2500
                     })
                 } else {
                     /** validar archivo */
                     var extensiones_permitidas = ['.xls', '.xlsx']
                     var input_file_productos = $('#fileProductos')
                     var exp_reg = new RegExp("([a-zA-Z0-9\s_\\-.\:])+(" + extensiones_permitidas.join('|') + ")$")

                     if (!exp_reg.test(input_file_productos.val().toLowerCase())) {
                         Swal.fire({
                             position: 'center',
                             icon: 'warning',
                             title: 'El archivo tiene que se .xls o .xlsx',
                             showConfirmButton: false,
                             timer: 2500
                         })

                         return false
                     }

                     var datos = new FormData($(form_carga_productos)[0])
                     $('#btnCargar').prop('disable', true)

                     $.ajax({
                         url: 'ajax/productos.ajax.php',
                         method: 'POST',
                         data: datos,
                         cache: false,
                         contentType: false,
                         processData: false,
                         dataType: 'json',
                         success: function(respuesta) {
                            console.log('respuesta', respuesta)
                         }
                     });
                 }
             })
         })
     </script>
 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0">Inventario / Productos</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                     <li class="breadcrumb-item active">Inventario / Productos</li>
                 </ol>
             </div><!-- /.col -->
         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content">
     <div class="container-fluid">

     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->

 
 <!-- Main content -->
 <div class="content">
     <div class="container-fluid">

         <!-- row para criterios de busqueda -->
         <div class="row">

             <div class="col-lg-12">

                 <div class="card card-info">
                     <div class="card-header">
                         <h3 class="card-title">CRITERIOS DE BÚSQUEDA</h3>
                         <div class="card-tools">
                             <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                 <i class="fas fa-minus"></i>
                             </button>
                             <button type="button" class="btn btn-tool text-danger" id="btnLimpiarBusqueda">
                                 <i class="fas fa-times"></i>
                             </button>
                         </div> <!-- ./ end card-tools -->
                     </div> <!-- ./ end card-header -->
                     <div class="card-body">

                         <div class="row">

                            <div class="col-lg-12 d-lg-flex">

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input 
                                            type="text" 
                                            id="iptCodigoBarras"
                                            class="form-control"
                                            data-index="2">
                                    <label for="iptCodigoBarras">Código de Barras</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input 
                                            type="text" 
                                            id="iptCategoria"
                                            class="form-control"
                                            data-index="4">
                                    <label for="iptCategoria">Categoría</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input 
                                            type="text" 
                                            id="iptProducto"
                                            class="form-control"
                                            data-index="5">
                                    <label for="iptProducto">Producto</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input 
                                            type="text" 
                                            id="iptPrecioVentaDesde"
                                            class="form-control">
                                    <label for="iptPrecioVentaDesde">P. Venta Desde</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input 
                                            type="text" 
                                            id="iptPrecioVentaHasta"
                                            class="form-control">
                                    <label for="iptPrecioVentaHasta">P. Venta Hasta</label>
                                </div>
                            </div>

                         </div>
                     </div> <!-- ./ end card-body -->
                 </div>

             </div>
             
         </div>

         <!-- row para listado de productos/inventario -->
         <div class="row">
             <div class="col-lg-12">
                 <table id="tbl_productos" class="table table-striped w-100 shadow">
                     <thead class="bg-info">
                         <tr style="font-size: 15px;">
                             <th></th>
                             <th>id</th>
                             <th>Codigo</th>
                             <th>Id Categoria</th>
                             <th>Categoría</th>
                             <th>Producto</th>
                             <th>P. Compra</th>
                             <th>P. Venta</th>
                             <th>Utilidad</th>
                             <th>Stock</th>
                             <th>Min. Stock</th>
                             <th>Ventas</th>
                             <th>Fecha Creación</th>
                             <th>Fecha Actualización</th>
                             <th class="text-cetner">Opciones</th>
                         </tr>
                     </thead>
                     <tbody class="text-small">
                     </tbody>
                 </table>
             </div>
         </div>
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->

 <!-- Ventana Modal para ingresar o modificar un Productos -->
<div class="modal fade" id="mdlGestionarProducto" role="dialog">

    <div class="modal-dialog modal-lg">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Agregar Producto</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
                        <i class="far fa-times-circle"></i>
                </button>
            </div>

            <!-- cuerpo del modal -->
            <div class="modal-body">

                <!-- Abrimos una fila -->
                <div class="row">

                    <!-- Columna para registro del codigo de barras -->
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="iptCodigoReg"><i class="fas fa-barcode fs-6"></i>
                                <span class="small">Código de Barras</span><span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="iptCodigoReg"
                                name="iptCodigoReg" placeholder="Código de Barras" required>
                            <span id="validate_codigo" class="text-danger small fst-italic"
                                style="display:none">Debe Ingresar el Codigo de barras</span>
                        </div>
                    </div>

                    <!-- Columna para registro de la categoría del producto -->
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="selCategoriaReg"><i class="fas fa-dumpster fs-6"></i>
                                <span class="small">Categoría</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="selCategoriaReg">
                            </select>
                            <span id="validate_categoria" class="text-danger small fst-italic"
                                style="display:none">Debe Ingresar la categoria del producto</span>
                        </div>
                    </div>

                    <!-- Columna para registro de la descripción del producto -->
                    <div class="col-12">
                        <div class="form-group mb-2">
                            <label class="" for="iptDescripcionReg"><i
                                    class="fas fa-file-signature fs-6"></i> <span
                                    class="small">Descripción</span><span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm" id="iptDescripcionReg"
                                placeholder="Descripción">
                            <span id="validate_descripcion" class="text-danger small fst-italic"
                                style="display:none">Debe Ingresar la descripción del producto</span>
                        </div>
                    </div>

                    <!-- Columna para registro del Precio de Compra -->
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label class="" for="iptPrecioCompraReg"><i
                                    class="fas fa-dollar-sign fs-6"></i> <span class="small">Precio
                                    Compra</span><span class="text-danger">*</span></label>
                            <input type="number" min="0" class="form-control form-control-sm"
                                id="iptPrecioCompraReg" placeholder="Precio de Compra">
                            <span id="validate_precio_compra" class="text-danger small fst-italic"
                                style="display:none">Debe ingresar el precio de compra</span>
                        </div>
                    </div>

                    <!-- Columna para registro del Precio de Venta -->
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label class="" for="iptPrecioVentaReg"><i
                                    class="fas fa-dollar-sign fs-6"></i> <span class="small">Precio
                                    Venta</span><span class="text-danger">*</span></label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptPrecioVentaReg"
                                placeholder="Precio de Venta">
                            <span id="validate_precio_venta" class="text-danger small fst-italic"
                                style="display:none">Debe ingresar el precio de venta</span>
                        </div>
                    </div>

                    <!-- Columna para registro de la Utilidad -->
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label class="" for="iptUtilidadReg"><i
                                    class="fas fa-dollar-sign fs-6"></i> <span class="small">Utilidad</span></label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptUtilidadReg"
                                placeholder="Utilidad" disabled>
                        </div>
                    </div>

                    <!-- Columna para registro del Stock del producto -->
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="iptStockReg"><i class="fas fa-plus-circle fs-6"></i>
                                <span class="small">Stock</span><span class="text-danger">*</span></label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptStockReg"
                                placeholder="Stock">
                            <span id="validate_stock" class="text-danger small fst-italic" style="display:none">Debe
                                ingresar el stock del producto</span>
                        </div>
                    </div>

                    <!-- Columna para registro del Minimo de Stock -->
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="iptMinimoStockReg"><i
                                    class="fas fa-minus-circle fs-6"></i> <span class="small">Mínimo
                                    Stock</span><span class="text-danger">*</span></label>
                            <input type="number" min="0" class="form-control form-control-sm" id="iptMinimoStockReg"
                                placeholder="Mínimo Stock">
                            <span id="validate_min_stock" class="text-danger small fst-italic"
                                style="display:none">Debe ingresar el mínimo de stock del producto</span>
                        </div>
                    </div>

                     <!-- creacion de botones para cancelar y guardar el producto -->
                     <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                        data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>

                    <button type="button" style="width:170px;" class="btn btn-primary mt-3 mx-2"
                        id="btnGuardarProducto" onclick="formSubmitClick()">Guardar Producto</button>

                </div>

            </div>

        </div>
    </div>
</div>

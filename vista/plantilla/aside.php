<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Venta De Celulares</span>
    </a>
      <!-- Sidebar Menu -->
      <!--<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php foreach ($menu as $key => $valor) { ?>
          <li class="nav-item">
            <a href="<?='?ctrl='.$key?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                <?=$valor?>
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
        <?php } ?>
        </ul>
      </nav> -->
      <!-- /.sidebar-menu -->
    </div>

     <!-- Sidebar -->
     <div class="sidebar">         
         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                 data-accordion="false">

                 <li class="nav-item">
                     <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vista/principal.php','content-wrapper')">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Inicio
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Productos
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                         <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/productos/productos.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Inventario</p>
                             </a>
                         </li>
                         <li class="nav-item">
                         <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/categorias/categorias.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Categorías</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                 <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/ventas/ventas.php','content-wrapper')">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Ventas
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                 <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/compras/compras.php','content-wrapper')">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Compras
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                 <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/reportes.php','content-wrapper')">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Reportes
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                 <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vista/configuracion.php','content-wrapper')">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Configuración
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
  </aside>
  <script>
     $(".nav-link").on('click',function(){
        $(".nav-link").removeClass('active');
        $(this).addClass('active');
     })
 </script>
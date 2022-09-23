<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';

/*
* Clase CtrlPrincipal
*/
class CtrlPrincipal extends Controlador {
    
    public function index(){
         $menu = array(
            'CtrlTurno'=>'Inicio',
            'CtrlCarrera'=>'Productos',
            'CtrlTipoPersona'=>'Ventas',
            'CtrlSemestre'=>'Compras',
            'CtrlDepartamento'=>'Reportes',
            'CtrlTipoVacuna'=>'Configuracion',
            'CtrlPersona'=>'Personas (Estudiantes,...)',
            'CtrlVacuna'=>'Vacunas',
            );
        /*
        $datos = array(
                'encabezado'=> 'Sistema Administración Vacunas',
                'menu'=>$menu
            );
        */
        $datos = array(
            'titulo'=>'Control De Ventas',
            'contenido'=>Vista::mostrar('principal.php','',true),
            'menu'=>$menu
        );
        
        $this->mostrarVista('template.php',$datos);
    }
}

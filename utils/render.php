<?php 
    require '../utils/autoload.php';
    
    function render($vista,$parametros){
        return require "../vistas/$vista.php";
    }

    function renderVista($vista){
        render($vista,null);
    }
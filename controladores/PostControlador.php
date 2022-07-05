<?php 
    require "../utils/autoload.php";

    class PostControlador {
        public static function Post($context){
            $p = new PostModelo();
            $p -> Usuario = $context['post']['usuario'];
            $p -> FyH = $context['post']['fyh'];
            $p-> Cuerpo = $context['post']['cuerpo'];
            $p -> Guardar();
        }
    }

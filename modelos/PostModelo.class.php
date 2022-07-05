<?php 

require "../utils/autoload.php";

    class PostModelo extends Modelo{
        public $Id;
        public $Nombre;
        public $FyH;
        public $Cuerpo;
        

        public function __construct($id=""){
            parent::__construct();
            if($id != ""){
                $this -> id = $id;
                $this -> Obtener();
            }
        }

        public function Guardar(){
            if($this -> Id == NULL) $this -> insertar();
            else $this -> actualizar();
        }
        

        private function postear(){
            $sql = "INSERT INTO usuario (username,fechayhora,cuerpo) VALUES (
            '" . $this -> Nombre . "',
             '" . $this -> $FyH . "',

            '" . $this -> $Cuerpo . "')";

            $this -> conexionBaseDeDatos -> query($sql);
        }

        



      

        public function Obtener(){
            $sql = "SELECT * FROM usuario WHERE id = " . $this ->id;
            $fila = $this -> conexionBaseDeDatos -> query($sql) -> fetch_all(MYSQLI_ASSOC)[0];

            $this -> Id = $fila['id'];
            $this -> Nombre = $fila['username'];
        }

        public function Eliminar(){
            $sql = "DELETE FROM post WHERE id = " . $this ->Id;
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function ObtenerTodos(){
            $sql = "SELECT * FROM post";
            $filas = $this -> conexionBaseDeDatos -> query($sql) -> fetch_all(MYSQLI_ASSOC);

            $resultado = array();
            foreach($filas as $fila){
                $u = new PostModelo();
                $p -> Id = $fila['id'];
                $p -> Nombre = $fila['username'];
                array_push($resultado,$p);
            }
            return $resultado;
        }

        public function MostrarPost(){
            $sql = "SELECT * FROM usuario WHERE username = '" . $this -> Nombre . "'";
            $resultado = $this -> conexionBaseDeDatos -> query($sql);
            if($resultado -> num_rows == 0) {
                return false;
            }

            $fila = $resultado -> fetch_all(MYSQLI_ASSOC)[0];
            return $this -> compararPasswords($fila['password']);
        }

       

    }
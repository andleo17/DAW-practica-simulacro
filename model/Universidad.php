<?php
    require_once 'conexion.php';

    class Universidad {

        private $id;
        private $nombre;

        public function __construct ($id) {
            $this -> buscar($id);
        }

        public static function listar () {
            $query = 'SELECT * FROM universidad';
            return Conexion::getConexion() -> query($query);
        }

        public function buscar ($id) {
            $resultSet = Conexion::getConexion() -> query("SELECT * FROM universidad WHERE id = $id");
            if ($universidad = $resultSet -> fetchObject()) {
                $this -> id = $universidad -> id;
                $this -> nombre = $universidad -> nombre;
            }
        }

        /**
         * @return mixed
         */
        public function getId () {
            return $this -> id;
        }

        /**
         * @param mixed $id
         */
        public function setId ($id) {
            $this -> id = $id;
        }

        /**
         * @return mixed
         */
        public function getNombre () {
            return $this -> nombre;
        }

        /**
         * @param mixed $nombre
         */
        public function setNombre ($nombre) {
            $this -> nombre = $nombre;
        }

    }
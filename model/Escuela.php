<?php
    require_once 'conexion.php';

    class Escuela {
        private $id;
        private $nombre;

        public function __construct ($id) {
            $this -> buscar($id);
        }

        public static function listar($universidad) {
            return Conexion::getConexion() -> query("SELECT * FROM escuela_universidad INNER JOIN escuela ON escuela.id = escuela_universidad.escuela_id WHERE universidad_id = $universidad");
        }

        public function buscar ($id) {
            $resultSet = Conexion::getConexion() -> query("SELECT * FROM escuela WHERE id = $id");
            if ($escuela = $resultSet -> fetchObject()) {
                $this -> id = $escuela -> id;
                $this -> nombre = $escuela -> nombre;
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
<?php
    require_once 'Universidad.php';
    require_once 'Escuela.php';
    require_once 'conexion.php';

    class Estudiante {
        private $id;
        private $codigo;
        private $nombres;
        private $apellidoPaterno;
        private $apellidoMaterno;
        private $universidad;
        private $escuela;
        private $foto;

        public function registrar () {
            $url_foto = basename($this -> foto["name"]);
            move_uploaded_file($this -> foto["tmp_name"], "imagenes/$url_foto");

            $this -> escuela = new Escuela($this -> escuela);
            $this -> universidad = new Universidad($this -> universidad);

            $query = "INSERT INTO estudiante VALUES (DEFAULT, :nombres, :apellido_paterno, :apellido_materno, :universidad_id, :escuela_id, :foto, :codigo);";
            $statement = Conexion::getConexion() -> prepare($query);
            $statement -> bindParam(':nombres', $this -> nombres);
            $statement -> bindParam(':apellido_paterno', $this -> apellidoPaterno);
            $statement -> bindParam(':apellido_materno', $this -> apellidoMaterno);
            $statement -> bindParam(':universidad_id', $this -> universidad -> getId());
            $statement -> bindParam(':escuela_id', $this -> escuela -> getId());
            $statement -> bindParam(':foto', $url_foto);
            $statement -> bindParam(':codigo', $this -> codigo);

            $statement -> execute() or die($statement);
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
        public function getNombres () {
            return $this -> nombres;
        }

        /**
         * @param mixed $nombres
         */
        public function setNombres ($nombres) {
            $this -> nombres = $nombres;
        }

        /**
         * @return mixed
         */
        public function getApellidoPaterno () {
            return $this -> apellidoPaterno;
        }

        /**
         * @param mixed $apellidoPaterno
         */
        public function setApellidoPaterno ($apellidoPaterno) {
            $this -> apellidoPaterno = $apellidoPaterno;
        }

        /**
         * @return mixed
         */
        public function getApellidoMaterno () {
            return $this -> apellidoMaterno;
        }

        /**
         * @param mixed $apellidoMaterno
         */
        public function setApellidoMaterno ($apellidoMaterno) {
            $this -> apellidoMaterno = $apellidoMaterno;
        }

        /**
         * @return mixed
         */
        public function getUniversidad () {
            return $this -> universidad;
        }

        /**
         * @param mixed $universidad
         */
        public function setUniversidad ($universidad) {
            $this -> universidad = $universidad;
        }

        /**
         * @return mixed
         */
        public function getEscuela () {
            return $this -> escuela;
        }

        /**
         * @param mixed $escuela
         */
        public function setEscuela ($escuela) {
            $this -> escuela = $escuela;
        }

        /**
         * @return mixed
         */
        public function getFoto () {
            return $this -> foto;
        }

        /**
         * @param mixed $foto
         */
        public function setFoto ($foto) {
            $this -> foto = $foto;
        }

        /**
         * @return mixed
         */
        public function getCodigo () {
            return $this -> codigo;
        }

        /**
         * @param mixed $codigo
         */
        public function setCodigo ($codigo) {
            $this -> codigo = $codigo;
        }

    }
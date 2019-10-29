<?php
require_once 'conexion.php';

$target_dir = 'imagenes/';
$url_foto = $target_dir . basename($_FILES["foto"]["name"]);
move_uploaded_file($_FILES["foto"]["tmp_name"], $url_foto);

$query = "INSERT INTO estudiante VALUES (DEFAULT, :nombres, :apellido_paterno, :apellido_materno, :universidad_id, :escuela_id, :foto);";
$statement = $cnx -> prepare($query);
$statement -> bindParam(':nombres', $_POST['nombres']);
$statement -> bindParam(':apellido_paterno', $_POST['apellido_paterno']);
$statement -> bindParam(':apellido_materno', $_POST['apellido_materno']);
$statement -> bindParam(':universidad_id', $_POST['universidad']);
$statement -> bindParam(':escuela_id', $_POST['escuela']);
$statement -> bindParam(':foto', $url_foto);

$statement -> execute() or die($statement);

header('location: generarTarjeta.php');

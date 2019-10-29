<?php

require_once 'conexion.php';

$query = 'SELECT * FROM escuela_universidad INNER JOIN escuela ON escuela.id = escuela_universidad.escuela_id WHERE universidad_id = :id';
$statement = $cnx -> prepare($query);
$statement -> bindParam(':id', $_GET['id']);
$statement -> execute() or die($statement);

while ($escuela = $statement -> fetchObject()) {
    echo "<option value='{$escuela -> id}'>{$escuela -> nombre}</option>";
}
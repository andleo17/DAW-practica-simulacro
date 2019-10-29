<?php

require_once 'conexion.php';

$query = 'SELECT * FROM universidad';

$resultSet = $cnx -> query($query) or die($query);

while ($universidad = $resultSet -> fetchObject()) {
    echo "<option value='{$universidad -> id}'>{$universidad -> nombre}</option>";
}
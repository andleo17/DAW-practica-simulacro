<?php
    require_once 'model/Universidad.php';
    $rs = Universidad ::listar();
    while ($universidad = $rs -> fetchObject()) {
        echo "<option value='{$universidad -> id}'>{$universidad -> nombre}</option>";
    }
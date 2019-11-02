<?php
    require_once 'model/Escuela.php';
    $rs = Escuela ::listar($_GET['id']);
    while ($escuela = $rs -> fetchObject()) {
        echo "<option value='{$escuela -> id}'>{$escuela -> nombre}</option>";
    }
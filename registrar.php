<?php
    require_once 'model/Estudiante.php';

    $estudiante = new Estudiante();

    $estudiante -> setNombres($_POST['nombres']);
    $estudiante -> setApellidoPaterno($_POST['apellido_paterno']);
    $estudiante -> setApellidoMaterno($_POST['apellido_materno']);
    $estudiante -> setUniversidad($_POST['universidad']);
    $estudiante -> setEscuela($_POST['escuela']);
    $estudiante -> setFoto($_FILES['foto']);
    $estudiante -> setCodigo($_POST['codigo']);
    $estudiante -> registrar();

    session_start();
    $_SESSION['estudiante'] = $estudiante;
    header('location: generarTarjeta.php');

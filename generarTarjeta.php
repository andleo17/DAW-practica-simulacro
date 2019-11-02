<?php
    require 'vendor/autoload.php';
    require_once 'conexion.php';
    require_once 'model/Estudiante.php';
    use Fpdf\Fpdf;

    session_start();
    $estudiante = $_SESSION['estudiante'];
    $tamanoFuente = 11;

    $pdf = new Fpdf();

    $pdf -> AddPage();
    $pdf -> SetTitle('Tarjeta de presentación', true);
    $pdf -> SetFont('Arial', 'B', 16);

    $pdf -> Cell(0, 10, utf8_decode('Tarjeta de presentación'), 0, 1, 'C');

    $pdf -> Rect(40, 50, 130, 196);

    $pdf -> Image("imagenes/{$estudiante -> getFoto()['name']}", 41, 51, 128, 130);

    $pdf -> Ln(156);
    $pdf -> SetFont('Arial', '', 14);
    $pdf -> SetFillColor(255);
    $pdf -> SetX(76);
    $pdf -> Cell(60, 10, "Codigo: {$estudiante -> getCodigo()}", 1, 0, 'C', true);

    $pdf -> Ln(20);
    $pdf -> SetFont('Arial', 'B', $tamanoFuente);
    $pdf -> SetX(40);
    $pdf -> Cell(45, 10, 'Nombres:', 1);
    $pdf -> SetFont('Arial', '', $tamanoFuente);
    $pdf -> Cell(85, 10, utf8_decode($estudiante -> getNombres()), 1);

    $pdf -> Ln();
    $pdf -> SetFont('Arial', 'B', $tamanoFuente);
    $pdf -> SetX(40);
    $pdf -> Cell(45, 10, 'Apellido paterno:', 1);
    $pdf -> SetFont('Arial', '', $tamanoFuente);
    $pdf -> Cell(85, 10, utf8_decode($estudiante -> getApellidoPaterno()), 1);

    $pdf -> Ln();
    $pdf -> SetFont('Arial', 'B', $tamanoFuente);
    $pdf -> SetX(40);
    $pdf -> Cell(45, 10, 'Apellido materno:', 1);
    $pdf -> SetFont('Arial', '', $tamanoFuente);
    $pdf -> Cell(85, 10, utf8_decode($estudiante -> getApellidoMaterno()), 1);

    $pdf -> Ln();
    $pdf -> SetFont('Arial', 'B', $tamanoFuente);
    $pdf -> SetX(40);
    $pdf -> Cell(45, 10, 'Universidad:', 1);
    $pdf -> SetFont('Arial', '', $tamanoFuente);
    $pdf -> Cell(85, 10, utf8_decode($estudiante -> getUniversidad() -> getNombre()), 1);

    $pdf -> Ln();
    $pdf -> SetFont('Arial', 'B', $tamanoFuente);
    $pdf -> SetX(40);
    $pdf -> Cell(45, 10, 'Escuela:', 1);
    $pdf -> SetFont('Arial', '', $tamanoFuente);
    $pdf -> Cell(85, 10, utf8_decode($estudiante -> getEscuela() -> getNombre()), 1);

    $pdf -> Output();

<?php
// PDO PHP Data Object
$driver = "mysql";
$servidor = "localhost";
$basedatos = "dbsimulacro";
$usuario = "root";
$clave 	 = "";
$cadena = "$driver:host=$servidor;dbname=$basedatos";
$cnx = new PDO($cadena,$usuario,$clave, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
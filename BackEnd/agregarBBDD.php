<?php
require "conexion.php";

// -- AÑADE MOVIMIENTO A LA BBDD
if(isset($_POST['movimientos'])){
    
    $longitud1 = $_POST['longitud1'];
    $longitud2 = $_POST['longitud2'];
    $longitud3 = $_POST['longitud3'];
    $longitud4 = $_POST['longitud4'];
    $movimientos = $_POST['movimietos'];
    $angulo1 = $_POST['angulo1'];
    $angulo2 = $_POST['angulo2'];
    $angulo3 = $_POST['angulo3'];
    $angulo4 = $_POST['angulo4'];
    $abscisa = $_POST['abscisa'];
    $oordenada = $_POST['oordenada'];
    $referencia = $_POST['referencia'];

    $sql = "INSERT INTO sensores (longitud1, longitud2, longitud3, longitud4, movimientos, angulo1, angulo2, angulo3, angulo4, abscisa, oordenada, referencia) VALUES ('$longitud1', '$longitud2', '$longitud3', '$longitud4', '$movimientos', '$angulo1', '$angulo2', '$angulo3', '$angulo4', '$abscisa', '$oordenada', '$referencia')";
    if(mysqli_query($conn, $sql)){
    }
}



?>
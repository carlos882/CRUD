<?php

include("conexion.php");
$conn=conectar();

$cod_estudiante=$_GET['id'];

$sql= $conn->query ("DELETE FROM alumno  WHERE cod_estudiante='$cod_estudiante'");
$query= $sql->fetchAll(PDO::FETCH_OBJ);

    if($query){
        Header("Location: alumno.php");
    }
?>

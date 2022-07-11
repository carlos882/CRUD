<?php

include("conexion.php");
$conn=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql= $conn->query("UPDATE alumno SET  dni='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_estudiante='$cod_estudiante'");
$query= $sql->fetchAll(PDO::FETCH_OBJ);

    if($query){
        Header("Location: alumno.php");
    }
// verificacion

//$sql1= "SELECT * FROM alumno WHERE dni='$dni' ";
//$verificar = $conn->query("SELECT dni FROM alumno WHERE dni='".$dni."' ");  //oki


//$resultado=$conn->query($sql1);
//$cantidad= $resultado->fetchAll(PDO::FETCH_OBJ);

//$fila = $verificar->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);


//Validamos que la consulta haya retornado información
  //if( $cantidad > 0 ){
//$_POST['dni']=$dni;
  //Header("Location: alumno.php");

//}else{
//echo "Datos incorrectos";
//}


?>
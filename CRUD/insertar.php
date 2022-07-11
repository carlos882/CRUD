<?php
include("conexion.php");
$conn=conectar();
$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['dni'];                   
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


// verificacion de regsitros duplicados

  $sql1   = $conn->query("SELECT dni FROM alumno WHERE dni = '$dni'");
  $query1 = $sql1->fetchAll(PDO::FETCH_OBJ);


// echo ('$dni    ==> '.$dni);
// echo ('$query1 ==> '.$query1[0]->dni);

 
if ($query1[0]->dni) {

//echo  "CI ya existe";
echo '<script language="javascript">alert("CI ya existe");window.location.href="alumno.php"</script>';

exit();


}else{

// $_POST['dni']=$dni;
$sql   = $conn->prepare("INSERT INTO alumno (dni,nombres,apellidos) VALUES(?,?,?);");
$query = $sql->execute([$dni, $nombres, $apellidos]);

Header("Location: alumno.php");

}
// verificacion //

?>
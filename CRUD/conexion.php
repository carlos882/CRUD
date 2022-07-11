 <?php
 function conectar(){
    $host='localhost';
    $dbname='crud';
    $username='postgres';
    $pass='123';
    $puerto = "5432";
   
    try {
        $conn = new PDO ("pgsql:host=$host; port=$puerto; dbname=$dbname",$username, $pass);
    } catch (PDOException $exp) {
        echo "Error de conexion ".$exp->getMessage();
    }
    return $conn ;
 }
?>
<?php

include('../conexion.php');

$codigo = $_POST['id'];

$query = "SELECT * FROM clientes WHERE codigo = $codigo";
$result = mysqli_query($con, $query);

if(!$result){
    die('Query Failed');
}

$json = array();
while($row = mysqli_fetch_array($result)){
    $json[] = array(
        'codigo' => $row['codigo'],
        'nombre' => $row['nombre'],
        'direccion' => $row['direccion'],
        'telefono' => $row['telefono']
    );

}

$jsonstring = json_encode($json[0]);
echo $jsonstring;

?>
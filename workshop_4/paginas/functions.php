<?php
include 'conexion.php';

class Functions{

function authenticate($usuario, $password){
$conn = new Conexion();
$sql = "SELECT * FROM usuario WHERE `usuario` = '$usuario' AND `password` = '$password'";
$result = $conn->query($sql);

if ($conn->connect_errno) {
$conn->close();
return false;
}
$conn->close();
return $result->fetch_array();
}

function saveUser($usuario) {
$conn= new Conexion();

$sql = "INSERT INTO usuario( `usuario`, `nombre`, `apellidos`, `password`, `tipo`)
VALUES ('{$usuario['usuario']}',  '{$usuario['nombre']}','{$usuario['apellidos']}','{$usuario['password']}', 'user')";
$conn->query($sql);
if ($conn->connect_errno) {
$conn->close();
return false;
}
$conn->close();
return true;
}
}
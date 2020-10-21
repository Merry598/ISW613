<?php
include 'functions.php';

session_start();
$user = $_SESSION['usuario'];
if (!$user|| $user['tipo'] ==="usuario") { 
header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<title>Registrarse</title>
</head>
<body>
<div class="container">
<form action="createuser.php" method="POST" class="form-inline" role="form">
<p>
<div class="form-group">
<label class="sr-only" for="">Usuario</label>
<input type="text" class="form-control" id="" name="usuario" placeholder="Usuario">
</div>
</p>
<p>
<div class="form-group">
<label class="sr-only" for="">Nombre</label>
<input type="text" class="form-control" id="" name="nombre" placeholder="Nombre">
</div>
</p>
<p>
<div class="form-group">
<label class="sr-only" for="">Apellidos</label>
<input type="text" class="form-control" id="" name="apellidos" placeholder="Apellidos">
</div>
</p>
<p>
<div class="form-group">
<label class="sr-only" for="">Password</label>
<input type="password" class="form-control" id="" name="password" placeholder="Password">
</div>
<p><p>
<button type="submit" class="btn btn-primary">Guardar</button>
</p></p>
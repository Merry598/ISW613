<?php
include 'functions.php';

if(isset($_POST['usuario']) && isset($_POST['nombre']) &&  isset($_POST['apellidos']) && isset($_POST['password'])) {
$Clfunctions= new Functions();

$saved = $Clfunctions-> saveUser($_POST);

if($saved) {
header('Location:dashboard.php?status=success');
} else {
header('Location:dashboard.php?status=error');
}
}else{
header('Location: dashboard.php?status=error');
}
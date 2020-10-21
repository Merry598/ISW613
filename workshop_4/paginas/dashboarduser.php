<?php
session_start();
$user = $_SESSION['usuario'];
if($user){
if (!$user|| $user['tipo'] =="admin") {
header('Location: ../index.php');
}
}
else{
header('Location: ../index.php');
}
?>
<p>Bienvenido <?php echo $user['nombre']." ".$user['apellidos']; ?> </p>
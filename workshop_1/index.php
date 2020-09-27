<?php
//Asignar la fecha local
date_default_timezone_set('America/Costa_Rica');

$fecha=date("F j, Y, g:i a"); 
//Se imprime la fecha
echo $fecha;
?>
    <input type="datetime"name="fecha"value="<?php echo $fecha;?>">

<?php
include('function.php');

$id = $_GET['id_categoria'];
if($id) {
 
 
    $deleted = deletecategoria($id);
    if($deleted) {
      header('Location:/dashboard/web/ISW613/workshop_3?status=success');
    } else {
      header('Location:/dashboard/web/ISW613/workshop_3?status=error');
    }
  } else {
    header('Location:/dashboard/web/ISW613/workshop_3?status=error id');
  }


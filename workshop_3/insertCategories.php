<?php
  include('function.php');

  if(isset($_POST['nombre']) && isset($_POST['descripcion'])) {
  
  
    $saved = saveCategorias($_POST);

    if($saved) {
      header('Location:/dashboard/web/ISW613/workshop_3?status=success');
    } else {
      header('Location: /dashboard/web/ISW613/workshop_3?status=error');
    }
  } else {
    header('Location: /dashboard/web/ISW613/workshop_3?status=error');
  }
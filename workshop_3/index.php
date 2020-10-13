
<?php

    
require('function.php');

  $message = "";
  if(!empty($_REQUEST['status'])) {
    $message = $_REQUEST['message'];
    // switch($_REQUEST['status']) {
    //   case 'success':
    //     $message = 'User was added succesfully';
    //   break;
    //   case 'error':
    //     $message = 'There was a problem inserting the user';
    //   break;
    // }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


  <title>Document</title>
</head>
<body>
<div class="container">
  <?php require ('header.php') ?>
    <div class="msg">
      <?php echo $message; ?>
    </div>
    <h1>Form Categorias</h1>
    <form action="insertCategories.php" method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Your name">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">Descripción</label>
        <input type="text" class="form-control" name="descripcion" placeholder="Your descripcion">
      </div>
      
      <input type="submit" class="btn btn-primary" value="Submit"></input>
    </form>

    

        <table class="table table-light">
          <tbody>
            <tr>
              <td>Id</td>
              <td>Name</td>
              <td>Descripcion</td>
              <td>Actions</td>
            </tr>
    <?php
           
            $categorias = getcategorias();
            $categoriasHtml = "";
            foreach ($categorias as $categoria) {
              $categoriasHtml .= "<tr id_categoria='categoria_{$categoria['id_categoria']}'></td><td>{$categoria['id_categoria']}</td><td>{$categoria['nombre']}</td><td>{$categoria['descripcion']}</td><td> <a href='editcategoria.php?id={$categoria['id_categoria']}'>Edit</a>| <a href='deletecategoria.php?id_categoria={$categoria['id_categoria']}' class='btn btn-primary' onclick='deletecategoria({$categoria['id_categoria']})'>Delete</a></td></tr>";
            }
            echo $categoriasHtml;
        
    ?>
          </tbody>
        </table>
    
</div>

</body>
</html>

